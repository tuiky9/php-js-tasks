<?php

declare(strict_types=1);

use IsBinarySearchTree\Solution;
use IsBinarySearchTree\TreeNode;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class IsBinarySearchTreeTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testIsBinarySearchTree(?TreeNode $root, bool $expected): void
    {
        self::assertSame($expected, Solution::solution($root));
    }

    public static function provideCases(): array
    {
        return [
            'empty tree' => [null, true],
            'single node' => [new TreeNode(42), true],
            'readme valid bst' => [
                new TreeNode(
                    4,
                    new TreeNode(2, new TreeNode(1), new TreeNode(3)),
                    new TreeNode(6, new TreeNode(5), new TreeNode(7))
                ),
                true,
            ],
            'readme invalid bst' => [
                new TreeNode(4, new TreeNode(2, null, new TreeNode(5)), new TreeNode(6)),
                false,
            ],
            'invalid left value in right subtree' => [
                new TreeNode(4, new TreeNode(2), new TreeNode(6, new TreeNode(3), new TreeNode(7))),
                false,
            ],
            'simple valid three nodes' => [
                new TreeNode(2, new TreeNode(1), new TreeNode(3)),
                true,
            ],
            'simple invalid three nodes' => [
                new TreeNode(2, new TreeNode(3), new TreeNode(1)),
                false,
            ],
            'left skewed valid' => [
                new TreeNode(5, new TreeNode(3, new TreeNode(1))),
                true,
            ],
            'left skewed invalid' => [
                new TreeNode(5, new TreeNode(3, new TreeNode(4))),
                false,
            ],
            'right skewed valid' => [
                new TreeNode(1, null, new TreeNode(2, null, new TreeNode(3))),
                true,
            ],
            'right skewed invalid' => [
                new TreeNode(1, null, new TreeNode(3, new TreeNode(0))),
                false,
            ],
            'negative values valid' => [
                new TreeNode(0, new TreeNode(-2), new TreeNode(2)),
                true,
            ],
            'only left child valid' => [
                new TreeNode(10, new TreeNode(5)),
                true,
            ],
            'only right child valid' => [
                new TreeNode(10, null, new TreeNode(15)),
                true,
            ],
            'only left child invalid' => [
                new TreeNode(10, new TreeNode(20)),
                false,
            ],
        ];
    }
}
