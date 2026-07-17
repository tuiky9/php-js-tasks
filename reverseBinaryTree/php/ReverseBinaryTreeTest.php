<?php

declare(strict_types=1);

use ReverseBinaryTree\Solution;
use ReverseBinaryTree\TreeNode;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ReverseBinaryTreeTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testReverseBinaryTree(?TreeNode $root, ?array $expected): void
    {
        self::assertSame($expected, self::toLevelOrder(Solution::solution($root)));
    }

    public static function provideCases(): array
    {
        return [
            'empty tree' => [null, null],
            'single node' => [new TreeNode(1), [1]],
            'readme example' => [
                new TreeNode(4, new TreeNode(2, new TreeNode(1), new TreeNode(3)), new TreeNode(5)),
                [4, 5, 2, null, null, 3, 1],
            ],
            'only left child' => [
                new TreeNode(2, new TreeNode(1)),
                [2, null, 1],
            ],
            'only right child' => [
                new TreeNode(2, null, new TreeNode(3)),
                [2, 3],
            ],
            'full three node tree' => [
                new TreeNode(1, new TreeNode(2), new TreeNode(3)),
                [1, 3, 2],
            ],
            'balanced four level-ish' => [
                new TreeNode(
                    10,
                    new TreeNode(5, new TreeNode(3), new TreeNode(7)),
                    new TreeNode(15, new TreeNode(12), new TreeNode(20))
                ),
                [10, 15, 5, 20, 12, 7, 3],
            ],
            'left skewed tree' => [
                new TreeNode(3, new TreeNode(2, new TreeNode(1))),
                [3, null, 2, null, 1],
            ],
            'right skewed tree' => [
                new TreeNode(1, null, new TreeNode(2, null, new TreeNode(3))),
                [1, 2, null, 3],
            ],
            'negative values' => [
                new TreeNode(-1, new TreeNode(-3), new TreeNode(-2)),
                [-1, -2, -3],
            ],
        ];
    }

    /**
     * @return list<int|null>|null
     */
    private static function toLevelOrder(?TreeNode $root): ?array
    {
        if ($root === null) {
            return null;
        }

        $result = [];
        $queue = [$root];

        while ($queue !== []) {
            $node = array_shift($queue);

            if ($node === null) {
                $result[] = null;
                continue;
            }

            $result[] = $node->val;
            $queue[] = $node->left;
            $queue[] = $node->right;
        }

        while ($result !== [] && $result[array_key_last($result)] === null) {
            array_pop($result);
        }

        return $result;
    }
}
