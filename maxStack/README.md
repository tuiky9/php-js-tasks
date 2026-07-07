# Max Stack

## Task

Implement a **MaxStack** — a stack that supports retrieving the current maximum value in **O(1)** time.

Provide these methods:

1. **`push(int $value)`** — add a value to the top of the stack  
2. **`pop(): int`** — remove and return the top value  
3. **`max(): int`** — return the largest value currently in the stack  

All three operations must run in **O(1)** time.

## Rules

- `pop()` and `max()` are only called when the stack is not empty (in tests).
- Values may be negative or duplicated.
- After `pop()`, `max()` must reflect the maximum among remaining elements.
- Use **O(1)** extra work per operation (do not scan the whole stack on each `max()` call).

## Example sequence

| Step | Operation | Stack (top on right) | `max()` |
|------|-----------|----------------------|---------|
| 1 | `push(2)` | `2` | `2` |
| 2 | `push(5)` | `2, 5` | `5` |
| 3 | `push(1)` | `2, 5, 1` | `5` |
| 4 | `pop()` → `1` | `2, 5` | `5` |
| 5 | `pop()` → `5` | `2` | `2` |

```text
push(2), push(5), push(1)  →  max() = 5
pop() = 1, pop() = 5         →  max() = 2
```

```text
push(-4), push(-1), push(-9)  →  max() = -1
pop() = -9                    →  max() = -1
```

## Class signature

```php
namespace MaxStack;

final class MaxStack
{
    public function push(int $value): void;
    public function pop(): int;
    public function max(): int;
}
```

Implement this in `php/max_stack.php`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`maxStack`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/MaxStackTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/MaxStackTest.php</code></p>
