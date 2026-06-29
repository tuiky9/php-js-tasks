# Linked List Palindrome

## Task

Given the head of a **singly linked list**, decide whether the list is a **palindrome**.

A linked list is a palindrome when its node values read the same from head to tail as from tail to head.

Implement an **O(n)** solution. A common approach is to find the middle, reverse the second half, and compare both halves node by node.

## Rules

- Input is the first node (`$head`) of a singly linked list.
- Each node stores an integer value in `$val` and a reference to the next node in `$next`.
- Return `true` for a palindrome, otherwise `false`.
- A list with `0` or `1` node is considered a palindrome.
- Expected time complexity: **O(n)**.

## Input

- `$head` — `ListNode` reference, or `null` for an empty list.

## Output

- `true` if the list is a palindrome, otherwise `false`.

## Examples

| List values | Output |
|-------------|--------|
| `1 -> 2 -> 3 -> 2 -> 1` | `true` |
| `1 -> 2 -> 3 -> 4` | `false` |
| `1` | `true` |
| `10 -> 11` | `false` |
| `-1 -> -2 -> -2 -> -1` | `true` |

```text
Input:  1 -> 2 -> 2 -> 1
Output: true
```

```text
Input:  1 -> 2 -> 3 -> 1
Output: false
```

```text
Input:  1 -> 10 -> 100 -> 10 -> 1
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

Implement this in `php/linked_list_palindrome.php`.

Call the solution with `Solution::solution($head)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`linkedListPalindrome`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/LinkedListPalindromeTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/LinkedListPalindromeTest.php</code></p>
