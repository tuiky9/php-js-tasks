<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class ParseQueryStringTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/parse_query_string.php', 'parseQueryString');
    }

    #[DataProvider('provideCases')]
    public function testParseQueryString(string $input, array $expected): void
    {
        self::assertSame($expected, parseQueryString($input));
    }

    public static function provideCases(): array
    {
        return [
            'readme basic pairs' => [
                'foo=1&bar=2',
                ['foo' => '1', 'bar' => '2'],
            ],
            'readme leading question mark and percent encoding' => [
                '?foo=1&bar=hello%20world',
                ['foo' => '1', 'bar' => 'hello world'],
            ],
            'readme duplicate key last wins' => [
                'a=1&a=2',
                ['a' => '2'],
            ],
            'readme key without equals' => [
                'flag',
                ['flag' => ''],
            ],
            'readme empty string' => [
                '',
                [],
            ],
            'only question mark' => [
                '?',
                [],
            ],
            'encoded equals in value' => [
                'key=a%3Db',
                ['key' => 'a=b'],
            ],
            'encoded ampersand in value' => [
                'q=1%262',
                ['q' => '1&2'],
            ],
            'encoded key' => [
                'user%20name=Ann',
                ['user name' => 'Ann'],
            ],
            'value contains equals' => [
                'eq=a=b=c',
                ['eq' => 'a=b=c'],
            ],
            'trailing ampersand ignored' => [
                'x=1&y=2&',
                ['x' => '1', 'y' => '2'],
            ],
            'double ampersand skips empty segment' => [
                'a=1&&b=2',
                ['a' => '1', 'b' => '2'],
            ],
            'empty value' => [
                'empty=',
                ['empty' => ''],
            ],
            'plus as space in value' => [
                'msg=hello+world',
                ['msg' => 'hello world'],
            ],
        ];
    }
}
