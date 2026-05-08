<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class FirstDigitTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/first_digit.php', 'firstDigit');
    }

    #[DataProvider('provideCases')]
    public function testFirstDigit(array $args, mixed $expected): void
    {
        self::assertSame($expected, firstDigit(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['var_1__Int'], '1'],
            [['q2q-q'], '2'],
            [['0ss'], '0'],
            [['no digits here'], ' '],
            [['abc123'], '1'],
        ];
    }
}
