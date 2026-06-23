<?php

declare(strict_types=1);

use LineEncoding\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class LineEncodingTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testLineEncoding(array $args, mixed $expected): void
    {
        self::assertSame($expected, Solution::solution(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['aabbbc'], '2a3bc'],
            [['abbcabb'], 'a2bca2b'],
            [['abcd'], 'abcd'],
            [['zzzz'], '4z'],
            [['wwwwwwwawwwwwww'], '7wa7w'],
        ];
    }
}
