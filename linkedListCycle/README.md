# Linked List Cycle

## Task

Given the head of a **singly linked list**, determine whether the list contains a **cycle**.

A cycle exists when some node's `next` pointer refers to a node that already appeared earlier in the list (not `null`). Return `true` if a cycle is present, otherwise `false`.

Your solution must use **O(1)** additional memory.

## Rules

- Do not modify the input list structure unless your approach requires it and tests still pass.
- Do not use extra data structures that store all visited nodes (that would be O(n) space).
- A `null` head has no cycle.
- A single node pointing to `null` has no cycle.
- A single node pointing to itself is a cycle.

## Input

- `$head` — first node of the singly linked list (`ListNode` or `null`).

## Output

- `true` if the list contains a cycle, otherwise `false`.

## Examples

| List structure | Output |
|----------------|--------|
| `1 -> 2 -> 3 -> 4 -> null` | `false` |
| `3 -> 2 -> 0 -> -4 -> (back to 2)` | `true` |
| `1 -> 2 -> (back to 1)` | `true` |
| `7 -> null` | `false` |
| `5 -> (points to itself)` | `true` |

```text
Input:  1 -> 2 -> 3 -> 4 -> null
Output: false
```

```text
Input:  1 -> 2 -> 3 -> 4 -> 2   (tail connects to node with value 2)
Output: true
```

## Function signature

```php
class ListNode {
    public int $val;
    public ?ListNode $next;
}

class Solution {
    public static function solution(?ListNode $head): bool
}
```

Implement this in `php/linked_list_cycle.php`.

Call the solution with `Solution::solution($head)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`linkedListCycle`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/LinkedListCycleTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/LinkedListCycleTest.php</code></p>
