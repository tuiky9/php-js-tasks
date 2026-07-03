# Rotate Right

## Task

Given the head of a **singly linked list** and an integer `k`, rotate the list **to the right** by `k` places.

Take the last `k` nodes from the end, move them to the front, and keep their relative order unchanged. Return the new head.

If `k` is `0` or greater than the list length, treat the rotation using `k % length` (a full rotation returns the original order).

Expected time complexity: **O(n)**.

## Rules

- Rotate right, not left.
- Preserve node order within the moved segment and within the remaining segment.
- `k` may be `0` or larger than the list length.
- Use modulo on `k` after finding the list length.

## Input

- `$head` — first node of the singly linked list (`ListNode` or `null`)
- `$k` — number of places to rotate right (non-negative integer)

## Output

- Head of the rotated linked list.

## Examples

| List | k | Result |
|------|---|--------|
| `1 -> 2 -> 3 -> 4` | `3` | `2 -> 3 -> 4 -> 1` |
| `1 -> 2 -> 3 -> 4 -> 5` | `2` | `4 -> 5 -> 1 -> 2 -> 3` |
| `1 -> 2` | `1` | `2 -> 1` |
| `1 -> 2 -> 3 -> 4 -> 5` | `5` | `1 -> 2 -> 3 -> 4 -> 5` |

```text
Input:  list = 1 -> 2 -> 3 -> 4, k = 3
Output: 2 -> 3 -> 4 -> 1
```

```text
Input:  list = 1 -> 2 -> 3 -> 4 -> 5, k = 6
Output: 5 -> 1 -> 2 -> 3 -> 4
```

## Function signature

```php
class ListNode {
    public int $val;
    public ?ListNode $next;
}

class Solution {
    public static function solution(?ListNode $head, int $k): ?ListNode
}
```

Implement this in `php/rotate_right.php`.

Call the solution with `Solution::solution($head, $k)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`rotateRight`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/RotateRightTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/RotateRightTest.php</code></p>
