# Swap Linked List Nodes

## Task

Given the head of a **singly linked list** and two **0-based indices** `start` and `end` (with `start <= end`), swap the nodes at those positions and return the new head.

Important: swap by rewiring `next` pointers only. **Do not change node values.**

Expected time complexity: **O(n)**, where `n` is the list length.

## Rules

- Indices are zero-based (`0` is the head node).
- It is guaranteed that `start <= end`.
- If `start === end`, return the list unchanged.
- Only pointer links may be modified, not `$val` fields.

## Input

- `$head` — first node of the singly linked list (`ListNode` or `null`)
- `$start` — index of the first node to swap
- `$end` — index of the second node to swap

## Output

- Head node of the modified linked list.

## Examples

| List | start | end | Result |
|------|-------|-----|--------|
| `5 -> 4 -> 3 -> 2 -> 1` | `1` | `3` | `5 -> 2 -> 3 -> 4 -> 1` |
| `1 -> 2 -> 3 -> 4 -> 5 -> 6 -> 7 -> 8 -> 9` | `3` | `5` | `1 -> 2 -> 3 -> 6 -> 5 -> 4 -> 7 -> 8 -> 9` |
| `1 -> 2 -> 3` | `0` | `2` | `3 -> 2 -> 1` |
| `1 -> 2 -> 3` | `1` | `1` | `1 -> 2 -> 3` |

```text
Input:  list = 5 -> 4 -> 3 -> 2 -> 1, start = 1, end = 3
Output: 5 -> 2 -> 3 -> 4 -> 1
```

```text
Input:  list = -5 -> 0 -> 5, start = 0, end = 2
Output: 5 -> 0 -> -5
```

## Function signature

```php
class ListNode {
    public int $val;
    public ?ListNode $next;
}

class Solution {
    public static function solution(?ListNode $head, int $start, int $end): ?ListNode
}
```

Implement this in `php/swap_linked_list_nodes.php`.

Call the solution with `Solution::solution($head, $start, $end)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`swapLinkedListNodes`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/SwapLinkedListNodesTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/SwapLinkedListNodesTest.php</code></p>
