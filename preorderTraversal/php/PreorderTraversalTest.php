<?php

declare(strict_types=1);

use PreorderTraversal\Solution;
use PreorderTraversal\TreeNode;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class PreorderTraversalTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testPreorderTraversal(?TreeNode $root, array $expected): void
    {
        self::assertSame($expected, Solution::solution($root));
    }

    public static function provideCases(): array
    {
        return [
            'empty tree' => [null, []],
            'single node' => [new TreeNode(42), [42]],
            'readme example tree' => [
                new TreeNode(
                    5,
                    new TreeNode(2, new TreeNode(1), new TreeNode(3)),
                    new TreeNode(8)
                ),
                [5, 2, 1, 3, 8],
            ],
            'classic problem tree' => [
                new TreeNode(
                    1,
                    new TreeNode(2, new TreeNode(4), new TreeNode(5)),
                    new TreeNode(3)
                ),
                [1, 2, 4, 5, 3],
            ],
            'left skewed tree' => [
                new TreeNode(3, new TreeNode(2, new TreeNode(1))),
                [3, 2, 1],
            ],
            'right skewed tree' => [
                new TreeNode(1, null, new TreeNode(2, null, new TreeNode(3))),
                [1, 2, 3],
            ],
            'full three level tree' => [
                new TreeNode(
                    5,
                    new TreeNode(2, new TreeNode(1), new TreeNode(3)),
                    new TreeNode(8)
                ),
                [5, 2, 1, 3, 8],
            ],
            'only left child' => [
                new TreeNode(10, new TreeNode(20)),
                [10, 20],
            ],
            'only right child' => [
                new TreeNode(10, null, new TreeNode(20)),
                [10, 20],
            ],
            'balanced four node tree' => [
                new TreeNode(4, new TreeNode(2), new TreeNode(6)),
                [4, 2, 6],
            ],
            'negative values' => [
                new TreeNode(-1, new TreeNode(-3), new TreeNode(-2)),
                [-1, -3, -2],
            ],
        ];
    }
}
