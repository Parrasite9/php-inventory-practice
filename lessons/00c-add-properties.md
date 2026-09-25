# 00c · Give the item a property

**Start:** you have an empty `Item` class. Work inside its braces.

A property is a value each object can hold. Example inside a different class:

```php
public string $color = 'Blue';
```

`public` permits access from outside the object. `string` requires text. The assignment supplies a starting value.

**Your turn:** declare a text property named `name`, with the starting value `'Bolts'`.

**Stop and share the line for review.**

After review, repeat the pattern for a property named `quantity` starting at `10`. Use `int` for a whole number, without quotes around `10`.

Run `php -l inventory.php`. Nothing new should print yet: you defined properties but have not displayed them.

[Next: create an object](01-create-an-object.md)
