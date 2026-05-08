<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class AddBorderTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/add_border.php', 'addBorder');
    }

    #[DataProvider('provideCases')]
    public function testAddBorder(array $input, array $expected): void
    {
        self::assertSame($expected, addBorder($input));
    }

    public static function provideCases(): array
    {
        return [
            [['abc', 'ded'], ['*****', '*abc*', '*ded*', '*****']],
            [['a'], ['***', '*a*', '***']],
            [['aa', 'bb', 'cc'], ['****', '*aa*', '*bb*', '*cc*', '****']],
            [['zxy', '123'], ['*****', '*zxy*', '*123*', '*****']],
            [['hello', 'world'], ['*******', '*hello*', '*world*', '*******']],
        ];
    }
}
