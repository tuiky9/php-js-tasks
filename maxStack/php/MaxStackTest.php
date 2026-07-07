<?php

declare(strict_types=1);

use MaxStack\MaxStack;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class MaxStackTest extends TestCase
{
    #[DataProvider('provideMaxCases')]
    public function testMaxAfterOperations(array $steps, int $expected): void
    {
        self::assertSame($expected, self::runSteps($steps));
    }

    #[DataProvider('providePopCases')]
    public function testPopReturnsExpectedValue(array $steps, int $expected): void
    {
        self::assertSame($expected, self::runSteps($steps));
    }

    public static function provideMaxCases(): array
    {
        return [
            'single value' => [[['push', 10], ['max', null]], 10],
            'increasing values' => [[['push', 2], ['push', 5], ['push', 1], ['max', null]], 5],
            'readme sequence' => [
                [['push', 2], ['push', 5], ['push', 1], ['pop', null], ['pop', null], ['max', null]],
                2,
            ],
            'negative values' => [[['push', -4], ['push', -1], ['push', -9], ['max', null]], -1],
            'max after removing non max' => [
                [['push', -4], ['push', -1], ['push', -9], ['pop', null], ['max', null]],
                -1,
            ],
            'duplicate maximum values' => [
                [['push', 3], ['push', 7], ['push', 7], ['pop', null], ['max', null]],
                7,
            ],
            'max survives intermediate pops' => [
                [['push', 1], ['push', 8], ['push', 3], ['push', 8], ['pop', null], ['pop', null], ['max', null]],
                8,
            ],
            'rebuild after emptying' => [
                [['push', 4], ['pop', null], ['push', 9], ['max', null]],
                9,
            ],
            'equal values only' => [[['push', 5], ['push', 5], ['push', 5], ['max', null]], 5],
            'mixed signs' => [[['push', -10], ['push', 0], ['push', 10], ['max', null]], 10],
        ];
    }

    public static function providePopCases(): array
    {
        return [
            'pop top value' => [[['push', 2], ['push', 5], ['push', 1], ['pop', null]], 1],
            'pop after single push' => [[['push', 42], ['pop', null]], 42],
            'pop preserves order' => [
                [['push', 10], ['push', 20], ['pop', null], ['pop', null]],
                10,
            ],
            'pop negative value' => [[['push', -3], ['push', -7], ['pop', null]], -7],
        ];
    }

    public function testMaxTracksRemainingElementsAfterPop(): void
    {
        $stack = new MaxStack();
        $stack->push(2);
        $stack->push(5);
        $stack->push(1);

        self::assertSame(1, $stack->pop());
        self::assertSame(5, $stack->max());
        self::assertSame(5, $stack->pop());
        self::assertSame(2, $stack->max());
    }

    /**
     * @param list<array{0: string, 1: int|null}> $steps
     */
    private static function runSteps(array $steps): int
    {
        $stack = new MaxStack();
        $result = 0;

        foreach ($steps as [$operation, $value]) {
            if ($operation === 'push') {
                $stack->push($value);
                continue;
            }

            $result = match ($operation) {
                'pop' => $stack->pop(),
                'max' => $stack->max(),
                default => throw new \InvalidArgumentException("Unknown operation: {$operation}"),
            };
        }

        return $result;
    }
}
