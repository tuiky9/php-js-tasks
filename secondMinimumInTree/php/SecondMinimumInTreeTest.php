<?php

declare(strict_types=1);

use SecondMinimumInTree\Solution;
use SecondMinimumInTree\TreeNode;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class SecondMinimumInTreeTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testSecondMinimumInTree(?TreeNode $root, ?int $expected): void
    {
        self::assertSame($expected, Solution::solution($root));
    }

    public static function provideCases(): array
    {
        return [
            'empty tree' => [null, null],
            'single node' => [new TreeNode(10), null],
            'readme example with second min' => [
                new TreeNode(2, new TreeNode(2), new TreeNode(5, new TreeNode(5), new TreeNode(7))),
                5,
            ],
            'all values equal' => [
                new TreeNode(2, new TreeNode(2), new TreeNode(2)),
                null,
            ],
            'two distinct values' => [
                new TreeNode(1, new TreeNode(2), new TreeNode(1)),
                2,
            ],
            'second min is left child' => [
                new TreeNode(5, new TreeNode(3), new TreeNode(8)),
                5,
            ],
            'negative values' => [
                new TreeNode(-1, new TreeNode(-5), new TreeNode(-3)),
                -3,
            ],
            'mixed signs' => [
                new TreeNode(0, new TreeNode(-2), new TreeNode(4)),
                0,
            ],
            'second min deeper in tree' => [
                new TreeNode(
                    4,
                    new TreeNode(2, new TreeNode(1), new TreeNode(3)),
                    new TreeNode(6)
                ),
                2,
            ],
            'only left children' => [
                new TreeNode(3, new TreeNode(2, new TreeNode(1))),
                2,
            ],
            'only right children' => [
                new TreeNode(1, null, new TreeNode(2, null, new TreeNode(3))),
                2,
            ],
            'duplicates with clear second' => [
                new TreeNode(1, new TreeNode(1), new TreeNode(2)),
                2,
            ],
        ];
    }
}
