# MedService SSO Testing Issues

## Issue 1: Privilege escalation via role manipulation

### Summary
A normal user can register as a doctor/admin by sending a crafted `user_type` value during account creation.

### Steps to reproduce
1. Open the registration page.
2. Enter a new email and password.
3. Change the role dropdown to `doctor` or `admin`.
4. Submit the form.
5. Log in with the new account.

### Expected behavior
Only an authorized admin should be able to create or assign doctor/admin roles. Regular users must not be able to self-elevate.

### Actual behavior
The application accepts the client-controlled role and stores it in the database without server-side validation.

### Why this matters
This creates a privilege escalation path and undermines the trust model of the SSO/authentication flow.

---

## Issue 2: Weak password hashing allows credential cracking

### Summary
Passwords are hashed with MD5, which is fast, outdated, and easy to brute-force offline.

### Steps to reproduce
1. Create a new account with a password such as `Password123`.
2. Check the database entries in `user_form`.
3. Compare the stored hash to the MD5 output of common passwords.
4. Try candidate values to confirm brute-force feasibility.

### Expected behavior
Passwords should be stored with a modern password hashing function such as bcrypt, Argon2, or PBKDF2 with salt.

### Actual behavior
The app uses `md5($_POST['password'])` both during registration and login.

### Why this matters
MD5 is no longer considered secure for password storage and makes user accounts highly vulnerable to offline guessing attacks.

---

# Answer Key

## Issue 1: Root cause
The issue is in [MedService/Register.php](MedService/Register.php). The application does this:

- Reads the submitted role from the browser: `user_type = $_POST['user_type'];`
- Inserts it directly into the database without validation.
- Later, [MedService/login.php](MedService/login.php) authenticates based on the stored `user_type` and grants admin access when `$row["user_type"] == 'admin'`.

This means the role is trusted from the client side instead of being enforced by the server.

### Fix
- Remove the role selector from the public registration page.
- Assign default role on the server.
- Restrict admin/doctor creation to an authorized admin workflow.
- Validate the role against a whitelist such as `user` or `admin` before storing it.

## Issue 2: Root cause
The issue is in both [MedService/Register.php](MedService/Register.php) and [MedService/login.php](MedService/login.php), where the code uses:

- `md5($_POST['password'])`
- `md5($_POST['cpassword'])`

MD5 is a fast unsalted hash and is not suitable for password storage.

### Fix
Use a modern password hashing function such as:

- `password_hash()` with `PASSWORD_BCRYPT`
- `PASSWORD_ARGON2I` or `PASSWORD_ARGON2ID` if supported

Then verify with `password_verify()` instead of comparing MD5 digests.
