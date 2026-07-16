# Second Minimum in Tree

## Task

Given a binary tree where each node holds an integer, find the **second smallest** distinct value among all nodes.

Traverse the tree (do not collect values and sort them). If a second distinct minimum does not exist — for example, every node shares the same value, or the tree has fewer than two distinct values — return `null`.

## Rules

- Use a binary tree traversal (recursive or iterative).
- Do **not** use built-in sorting helpers (`sort`, `usort`, `asort`, etc.).
- Expected time complexity: **O(n)**, where `n` is the number of nodes.
- Expected extra memory: **O(1)** beyond the recursion/call stack used for traversal.
- Return `null` when there is no second distinct minimum.

## Input

- `$root` — root of the binary tree (`TreeNode` or `null`).

## Output

- The second smallest distinct integer in the tree, or `null`.

## Examples

For this tree:

```text
      2
     / \
    2   5
       / \
      5   7
```

```text
Input:  root = TreeNode(2, TreeNode(2), TreeNode(5, TreeNode(5), TreeNode(7)))
Output: 5
```

```text
Input:  root = TreeNode(2, TreeNode(2), TreeNode(2))
Output: null
```

```text
Input:  root = TreeNode(10)
Output: null
```

## Function signature

```php
class TreeNode {
    public int $val;
    public ?TreeNode $left;
    public ?TreeNode $right;
}

class Solution {
    public static function solution(?TreeNode $root): ?int
}
```

Implement this in `php/second_minimum_in_tree.php`.

Call the solution with `Solution::solution($root)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`secondMinimumInTree`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/SecondMinimumInTreeTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/SecondMinimumInTreeTest.php</code></p>
