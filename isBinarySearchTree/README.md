# Is Binary Search Tree

## Task

Determine whether a given binary tree is a **binary search tree (BST)**.

In a BST, every node’s value is **greater than or equal to** all values in its left subtree and **less than or equal to** all values in its right subtree. Node values in this task are **guaranteed to be distinct**.

Implement a **recursive** check that visits each node **at most once**. Expected time complexity: **O(n)**.

## Rules

- Use recursion (no collecting all values into an array and sorting).
- Traverse each node only once.
- An empty tree (`null` root) is considered a valid BST.
- A single-node tree is a valid BST.

## Input

- `$root` — root of the binary tree (`TreeNode` or `null`).

## Output

- `true` if the tree is a BST, otherwise `false`.

## Examples

Valid BST:

```text
      4
     / \
    2   6
   / \ / \
  1  3 5  7
```

```text
Input:  root = TreeNode(4, TreeNode(2, TreeNode(1), TreeNode(3)), TreeNode(6, TreeNode(5), TreeNode(7)))
Output: true
```

Invalid BST (right child of `2` is greater than the ancestor `4`’s left-subtree upper bound):

```text
      4
     / \
    2   6
     \
      5
```

```text
Input:  root = TreeNode(4, TreeNode(2, null, TreeNode(5)), TreeNode(6))
Output: false
```

```text
Input:  root = null
Output: true
```

## Function signature

```php
class TreeNode {
    public int $val;
    public ?TreeNode $left;
    public ?TreeNode $right;
}

class Solution {
    public static function solution(?TreeNode $root): bool
}
```

Implement this in `php/is_binary_search_tree.php`.

Call the solution with `Solution::solution($root)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`isBinarySearchTree`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/IsBinarySearchTreeTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/IsBinarySearchTreeTest.php</code></p>
