# 06 · Pass a value into a method

**Start:** `addOne()` works. Keep it as a reference.

**Location:** inside `Item`, add a method named `receive`.

A parameter names incoming information:

```php
public function brighten(int $amount): void
```

Inside that example method, `$amount` is the supplied number. `$this->brightness` is the object's stored value. They have different roles.

**Your turn:** define `receive(int $amount): void` and make it add the incoming amount to the item's stored quantity. Use your `addOne()` implementation as the starting pattern.

Stop for review before calling it. Then call it with `3` and again with `2`, displaying quantity after each call. Predict both results first.
