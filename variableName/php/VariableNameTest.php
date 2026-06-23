<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use VariableName\Solution;

final class VariableNameTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testVariableName(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['var_1__Int'], true],
            [['qq-q'], false],
            [['2w2'], false],
            [[' variable'], false],
            [['_Aas_23'], true],
        ];
    }
}
