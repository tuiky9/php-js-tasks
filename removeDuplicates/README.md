# Remove Duplicates

## Task

Given the head of an **unsorted singly linked list**, remove duplicate values while keeping the **first occurrence** of each value.

Return the head of the updated list. Relative order of the remaining nodes must match the original list.

If a value appears more than once, delete every occurrence after the first one.

## Rules

- The list is unsorted.
- Preserve the order of first appearances.
- Modify the list structure as needed; rebuilding or in-place removal are both acceptable.
- Expected time complexity: **O(n)**.

## Input

- `$head` — first node of the singly linked list (`ListNode` or `null`).

## Output

- Head of the list after removing duplicate values.

## Examples

| Input | Output |
|-------|--------|
| `10 -> 20 -> 10 -> 30 -> 20 -> 40 -> 30` | `10 -> 20 -> 30 -> 40` |
| `1 -> 2 -> 2 -> 3 -> 3 -> 4 -> 5 -> 5 -> 5` | `1 -> 2 -> 3 -> 4 -> 5` |
| `1 -> 1 -> 1 -> 1` | `1` |
| `1 -> -1 -> 2 -> -2 -> 3 -> -3` | `1 -> -1 -> 2 -> -2 -> 3 -> -3` |

```text
Input:  10 -> 20 -> 10 -> 30 -> 20 -> 40 -> 30
Output: 10 -> 20 -> 30 -> 40
```

```text
Input:  1000 -> 100 -> 10 -> 1 -> 1 -> 10 -> 100 -> 1000
Output: 1000 -> 100 -> 10 -> 1
```

## Function signature

```php
class ListNode {
    public int $val;
    public ?ListNode $next;
}

class Solution {
    public static function solution(?ListNode $head): ?ListNode
}
```

Implement this in `php/remove_duplicates.php`.

Call the solution with `Solution::solution($head)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`removeDuplicates`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/RemoveDuplicatesTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/RemoveDuplicatesTest.php</code></p>
