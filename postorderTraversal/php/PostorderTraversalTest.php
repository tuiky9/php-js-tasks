<?php

declare(strict_types=1);

use PostorderTraversal\Solution;
use PostorderTraversal\TreeNode;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class PostorderTraversalTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testPostorderTraversal(?TreeNode $root, array $expected): void
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
                    2,
                    new TreeNode(1),
                    new TreeNode(3, new TreeNode(4), new TreeNode(5))
                ),
                [1, 4, 5, 3, 2],
            ],
            'left skewed tree' => [
                new TreeNode(3, new TreeNode(2, new TreeNode(1))),
                [1, 2, 3],
            ],
            'right skewed tree' => [
                new TreeNode(1, null, new TreeNode(2, null, new TreeNode(3))),
                [3, 2, 1],
            ],
            'full three level tree' => [
                new TreeNode(
                    5,
                    new TreeNode(2, new TreeNode(1), new TreeNode(3)),
                    new TreeNode(8)
                ),
                [1, 3, 2, 8, 5],
            ],
            'only left child' => [
                new TreeNode(10, new TreeNode(20)),
                [20, 10],
            ],
            'only right child' => [
                new TreeNode(10, null, new TreeNode(20)),
                [20, 10],
            ],
            'balanced four node tree' => [
                new TreeNode(
                    4,
                    new TreeNode(2),
                    new TreeNode(6)
                ),
                [2, 6, 4],
            ],
            'negative values' => [
                new TreeNode(-1, new TreeNode(-3), new TreeNode(-2)),
                [-3, -2, -1],
            ],
        ];
    }
}
