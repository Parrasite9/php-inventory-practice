# 00b · Define a class yourself

**Start:** `inventory.php` has a PHP opening tag and your working message.

A class defines a kind of object. The braces contain its properties and methods. Defining it does not create an object.

Example from another project:

```php
class Lamp
{
}
```

**Your turn:** define an empty class named `Item` after the opening tag and before your message. Adapt the example. Do not create an object yet.

Check syntax:

```bash
php -l inventory.php
```

`-l` checks whether PHP can parse the file without executing it. Expect “No syntax errors detected.” Run the file normally too: your message should still appear.

**Stop for review.** Next, we will put information inside the class.

[Next: add a property](00c-add-properties.md)
