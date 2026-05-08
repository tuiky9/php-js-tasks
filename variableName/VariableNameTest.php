<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class VariableNameTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/variable_name.php', 'variableName');
    }

    #[DataProvider('provideCases')]
    public function testVariableName(array $args, mixed $expected): void
    {
        self::assertSame($expected, variableName(...$args));
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
