# 00 · Start with an empty file

**Goal:** create a PHP file yourself and see it execute. No classes yet.

1. Open this project folder in Cursor. In the Explorer sidebar, right-click the project folder → **New File**. Name it `inventory.php`, beside `README.md`.
2. PHP needs an opening tag. Type `<?php` on the first line. Leave off the closing `?>` in a PHP-only file.
3. On a new line, write a message using `echo`. Example syntax:

```php
echo "Hello!\n";
```

`echo` displays text, `\n` starts a new output line, and `;` ends the statement. Choose your own message. Save the file.

Open **Terminal → New Terminal** in this project folder. Run:

```bash
php inventory.php
```

Expect your message. If PHP is unavailable or the command fails, share the error; don't change unrelated code.

**Stop for review.** You have made an empty file executable.

[Next: define a class](00b-define-a-class.md)
