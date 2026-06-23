<?php

declare(strict_types=1);

use FileNaming\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class FileNamingTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testFileNaming(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [[['doc', 'doc', 'image', 'doc(1)', 'doc']], ['doc', 'doc(1)', 'image', 'doc(1)(1)', 'doc(2)']],
            [[['a', 'a', 'a', 'a']], ['a', 'a(1)', 'a(2)', 'a(3)']],
            [[['dd', 'dd(1)', 'dd', 'dd(1)']], ['dd', 'dd(1)', 'dd(2)', 'dd(1)(1)']],
            [[['file']], ['file']],
            [[['x', 'x(1)', 'x(1)', 'x']], ['x', 'x(1)', 'x(1)(1)', 'x(2)']],
        ];
    }
}
