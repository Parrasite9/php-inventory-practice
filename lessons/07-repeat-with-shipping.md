# 07 · Repeat the pattern with shipping

**Start:** you can receive a supplied quantity using a method.

**Location:** inside `Item`.

**Your turn:** add `ship(int $amount): void`. It should subtract the supplied amount from this item's quantity.

Use only positive amounts smaller than available stock for this first exercise. No new syntax is needed: adapt your receiving method.

Stop for review. Then receive stock, ship stock, and display the quantity. Repeat on the second item and predict which values change.

Next, with guidance, we will reject negative amounts and shipments larger than stock. We will decide how to report rejection before writing those conditions.
