# 02 · Read what the object holds

**Start:** lesson 01 created `$bolts`. Keep that line.

**File:** `inventory.php`, immediately below it.

A property is a value stored on an object. Our item has `name` and `quantity` properties.

Example with an unrelated object:

```php
echo $lamp->brightness;
```

`->brightness` selects that object's property; `echo` displays its value.

**Your turn:** display the quantity stored on `$bolts`.

Run `php inventory.php`. Expect `10` before the startup message. Share your line for review.

After review, repeat the same pattern to display the item's name.
