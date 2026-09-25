# 04 · Same class, separate objects

**Start:** keep your `$bolts` object and its changes.

**File:** `inventory.php`, after the class definition, where you created your objects.

Creating another object with `new Item` gives it its own properties with the class's default values.

**Your turn:** create a second item named `$nuts`. Change its name property to `'Nuts'` and display its quantity.

Predict both objects' quantities before running. Changing `$bolts` should not change `$nuts`.

Stop for review. Do not write `$nuts = $bolts`: that would make both variables refer to the same object, not create another one.
