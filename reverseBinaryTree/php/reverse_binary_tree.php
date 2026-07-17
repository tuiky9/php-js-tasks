<?php

declare(strict_types=1);

namespace ReverseBinaryTree;

class TreeNode
{
    public function __construct(
        public int $val = 0,
        public ?TreeNode $left = null,
        public ?TreeNode $right = null
    ) {
    }
}

class Solution
{
    public static function solution(?TreeNode $root): ?TreeNode
    {
        if ($root === null) {
            return null;
        }

        $temp = $root->left;
        $root->left = $root->right;
        $root->right = $temp;

        self::solution($root->left);
        self::solution($root->right);

        return $root;
    }
}
