# Postorder Traversal

## Task

Implement **postorder traversal** of a binary tree using **recursion**.

Visit every node in **left → right → root** order and return the node values as an array.

## Rules

- Use a **recursive** solution.
- For each node: traverse the left subtree, then the right subtree, then append the current node's value.
- If the tree is empty (`null` root), return an empty array.

## Input

- `$root` — root of the binary tree (`TreeNode` or `null`).

## Output

- Array of node values in postorder sequence.

## Example

For this tree:

```text
      2
     / \
    1   3
       / \
      4   5
```

Postorder visit order: `1`, `4`, `5`, `3`, `2`

```text
Input:  root = TreeNode(2, TreeNode(1), TreeNode(3, TreeNode(4), TreeNode(5)))
Output: [1, 4, 5, 3, 2]
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

Implement this in `php/postorder_traversal.php`.

Call the solution with `Solution::solution($root)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`postorderTraversal`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/PostorderTraversalTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/PostorderTraversalTest.php</code></p>
