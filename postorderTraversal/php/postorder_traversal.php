<?php

declare(strict_types=1);

namespace PostorderTraversal;

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
    public static function solution(?TreeNode $root): array
    {
        if ($root === null) {
            return [];
        }

        return array_merge(
            self::solution($root->left),
            self::solution($root->right),
            [$root->val]
        );
    }
}
