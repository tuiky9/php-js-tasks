<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use RemoveCommonElements\Solution;

final class RemoveCommonElementsTest extends TestCase
{
        #[DataProvider('provideCases')]
    public function testRemoveCommonElements(array $list1, array $list2, array $expected): void
    {
        self::assertSame($expected, Solution::solution($list1, $list2));
    }

    public static function provideCases(): array
    {
        return [
            'test1 readme example' => [[2, 5, 7, 10], [1, 5, 9], [1, 2, 7, 9, 10]],
            'test2 no overlap' => [[1, 2, 3], [4, 5, 6], [1, 2, 3, 4, 5, 6]],
            'test3 all common' => [[1, 2, 3], [1, 2, 3], []],
            'test4 empty first list' => [[], [-1, 0, 1], [-1, 0, 1]],
            'test5 partial overlap' => [[1, 2, 3], [2, 3, 4], [1, 4]],
            'test6 negative positive split' => [[-3, -2, -1], [1, 2, 3], [-3, -2, -1, 1, 2, 3]],
            'test7 zero in common' => [[-3, -2, -1, 0], [0, 1, 2, 3], [-3, -2, -1, 1, 2, 3]],
            'test8 shared negative' => [[-3, -1], [-2, -1], [-3, -2]],
            'test9 even numbers removed' => [[1, 2, 3, 4, 5, 6, 7], [2, 4, 6], [1, 3, 5, 7]],
            'test10 interleaved odds evens' => [[1, 3, 5, 7], [2, 4, 6, 8, 10, 12], [1, 2, 3, 4, 5, 6, 7, 8, 10, 12]],
            'test11 evens then odds' => [[2, 4, 6, 8, 10, 12], [1, 3, 5, 7], [1, 2, 3, 4, 5, 6, 7, 8, 10, 12]],
            'test12 one shared middle value' => [[10, 20, 30], [5, 15, 20, 25], [5, 10, 15, 25, 30]],
        ];
    }

    public function testInputListsNotMutated(): void
    {
        $list1 = [2, 5, 7];
        $list2 = [1, 5, 9];
        $copy1 = $list1;
        $copy2 = $list2;

        Solution::solution($list1, $list2);

        self::assertSame($copy1, $list1);
        self::assertSame($copy2, $list2);
    }
}
