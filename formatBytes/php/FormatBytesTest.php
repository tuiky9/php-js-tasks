<?php

declare(strict_types=1);

use FormatBytes\Solution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class FormatBytesTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testFormatBytes(int $input, string $expected): void
    {
        self::assertSame($expected, Solution::solution($input));
    }

    public static function provideCases(): array
    {
        return [
            'readme bytes only' => [512, '512 B'],
            'readme just below kb' => [1023, '1023 B'],
            'readme one kb' => [1024, '1.0 KB'],
            'readme one and half kb' => [1536, '1.5 KB'],
            'readme one mb' => [1048576, '1.0 MB'],
            'readme one gb' => [1073741824, '1.0 GB'],
            'zero' => [0, '0 B'],
            'one byte' => [1, '1 B'],
            'two kb' => [2048, '2.0 KB'],
            'just below mb' => [1048575, '1024.0 KB'],
            'just below gb' => [1073741823, '1024.0 MB'],
            'ten gb' => [10737418240, '10.0 GB'],
            'large stays in gb' => [16106127360, '15.0 GB'],
            '999 bytes' => [999, '999 B'],
            'rounding half kb' => [2560, '2.5 KB'],
            'fractional mb' => [1572864, '1.5 MB'],
        ];
    }
}
