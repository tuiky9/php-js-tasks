<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class ReverseInParanthesesTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/reverse_in_parantheses.php', 'reverseInParentheses');
    }

    #[DataProvider('provideCases')]
    public function testReverseInParantheses(array $args, mixed $expected): void
    {
        self::assertSame($expected, reverseInParentheses(...$args));
    }

    public static function provideCases(): array
    {
        return [
            [['(bar)'], 'rab'],
            [['foo(bar)baz'], 'foorabbaz'],
            [['foo(bar)baz(blim)'], 'foorabbazmilb'],
            [['foo(bar(baz))blim'], 'foobazrabblim'],
            [['abc(cba)ab(bac)c'], 'abcabcabcabc'],
        ];
    }
}
