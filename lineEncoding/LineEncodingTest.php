<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class LineEncodingTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/line_encoding.php', 'lineEncoding');
    }

    #[DataProvider('provideCases')]
    public function testLineEncoding(array $args, mixed $expected): void
    {
        self::assertSame($expected, lineEncoding(...$args));
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
