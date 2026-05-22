<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class SlugifyTitleTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/slugify_title.php', 'slugifyTitle');
    }

    #[DataProvider('provideCases')]
    public function testSlugifyTitle(string $input, string $expected): void
    {
        self::assertSame($expected, slugifyTitle($input));
    }

    public static function provideCases(): array
    {
        return [
            'readme hello world' => ['Hello World!', 'hello-world'],
            'readme collapsed separators' => ['  Foo--Bar  ', 'foo-bar'],
            'readme digits and punctuation' => ['PHP 8.3 Release', 'php-8-3-release'],
            'readme only punctuation' => ['!!!', ''],
            'readme already slug' => ['already-a-slug', 'already-a-slug'],
            'readme year and colon' => ['Year 2024: Best Practices', 'year-2024-best-practices'],
            'single word' => ['Article', 'article'],
            'numbers only' => ['12345', '12345'],
            'underscores become hyphens' => ['foo_bar_baz', 'foo-bar-baz'],
            'leading trailing hyphens in input' => ['--trim-me--', 'trim-me'],
            'tabs and newlines' => ["foo\t\nbar", 'foo-bar'],
            'empty string' => ['', ''],
            'whitespace only' => ['   ', ''],
            'mixed case with dots' => ['Dr. Smith Goes Home', 'dr-smith-goes-home'],
            'unicode letters stripped' => ['Café René', 'caf-ren'],
        ];
    }
}
