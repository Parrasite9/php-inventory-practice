# 08 · Create and connect a second file

**Start:** your working `inventory.php` contains the `Item` class followed by code using it. Finish and review the earlier lessons first.

**Your turn:** create an empty file named `Item.php` beside `inventory.php`. Add its PHP opening tag. Move the complete `Item` class into it, including its closing brace. Keep object creation and method calls in `inventory.php`.

**Stop for review before running.** We need to connect the files next.

PHP does not automatically load a neighboring file. Example for loading a different file:

```php
require_once __DIR__ . '/Lamp.php';
```

`__DIR__` gives the current file's folder. `.` joins strings. `require_once` loads the file once, stopping with an error if it cannot be loaded.

After review, adapt that line to load `Item.php` from `inventory.php`. Put it before the first use of `Item`.

Run `php inventory.php`. Expect the same behavior as before the move. You changed file organization, not inventory logic.
