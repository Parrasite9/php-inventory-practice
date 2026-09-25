# 05 · An object changes its own property

**Location:** inside the existing `Item` class, below its properties.

A method defines an action. `$this` refers to whichever object receives the method call.

Unrelated example, inside a `Lamp` class:

```php
public function brighten(): void
{
    $this->brightness = $this->brightness + 1;
}
```

`void` means this method returns no value.

**Your turn:** define an `addOne()` method on `Item` that increases its quantity by one. Adapt the example; do not change the practice area yet.

Stop for review. Then call your method on `$bolts`, using the method-call pattern you practiced: `$object->method();`. Display both quantities. Only the receiving object should change.
