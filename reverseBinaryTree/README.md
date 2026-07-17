# Reverse Binary Tree

## Task

Given a binary tree, **mirror** it by swapping the left and right child of every node.

Return the root of the transformed tree. An empty tree (`null`) stays `null`.

## Rules

- For each node, exchange `$left` and `$right`, then continue through both subtrees.
- Expected time complexity: **O(n)**, where `n` is the number of nodes.
- You may use recursion or an iterative traversal.

## Input

- `$root` — root of the binary tree (`TreeNode` or `null`).

## Output

- Root of the mirrored tree.

## Examples

Original:

```text
      4
     / \
    2   5
   / \
  1   3
```

After reverse:

```text
      4
     / \
    5   2
       / \
      3   1
```

```text
Input:  root = TreeNode(4, TreeNode(2, TreeNode(1), TreeNode(3)), TreeNode(5))
Output: TreeNode(4, TreeNode(5), TreeNode(2, TreeNode(3), TreeNode(1)))
```

```text
Input:  root = null
Output: null
```

```text
Input:  root = TreeNode(1)
Output: TreeNode(1)
```

## Function signature

```php
class TreeNode {
    public int $val;
    public ?TreeNode $left;
    public ?TreeNode $right;
}

class Solution {
    public static function solution(?TreeNode $root): ?TreeNode
}
```

Implement this in `php/reverse_binary_tree.php`.

Call the solution with `Solution::solution($root)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`reverseBinaryTree`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/ReverseBinaryTreeTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/ReverseBinaryTreeTest.php</code></p>
