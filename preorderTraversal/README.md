# Preorder Traversal

## Task

Implement **preorder traversal** of a binary tree using **recursion**.

In preorder, visit each node **before** its subtrees: **root → left → right**.

Return node values in that order as an array.

## Rules

- Use a **recursive** solution.
- For each node: append the current value, then traverse the left subtree, then the right subtree.
- If the tree is empty (`null` root), return an empty array.

## Input

- `$root` — root of the binary tree (`TreeNode` or `null`).

## Output

- Array of node values in preorder sequence.

## Example

For this tree:

```text
      5
     / \
    2   8
   / \
  1   3
```

Preorder visit order: `5`, `2`, `1`, `3`, `8`

```text
Input:  root = TreeNode(5, TreeNode(2, TreeNode(1), TreeNode(3)), TreeNode(8))
Output: [5, 2, 1, 3, 8]
```

```text
Input:  root = null
Output: []
```

## Function signature

```php
class TreeNode {
    public int $val;
    public ?TreeNode $left;
    public ?TreeNode $right;
}

class Solution {
    public static function solution(?TreeNode $root): array
}
```

Implement this in `php/preorder_traversal.php`.

Call the solution with `Solution::solution($root)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`preorderTraversal`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/PreorderTraversalTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/PreorderTraversalTest.php</code></p>
