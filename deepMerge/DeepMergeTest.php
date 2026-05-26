<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class DeepMergeTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/deep_merge.php', 'deepMerge');
    }

    #[DataProvider('provideCases')]
    public function testDeepMerge(array $left, array $right, array $expected): void
    {
        self::assertSame($expected, deepMerge($left, $right));
    }

    public static function provideCases(): array
    {
        return [
            'readme add key' => [['a' => 1], ['b' => 2], ['a' => 1, 'b' => 2]],
            'readme scalar replace' => [['a' => 1], ['a' => 2], ['a' => 2]],
            'readme nested merge' => [
                ['x' => ['a' => 1]],
                ['x' => ['b' => 2]],
                ['x' => ['a' => 1, 'b' => 2]],
            ],
            'readme list replaced' => [
                ['items' => [1, 2]],
                ['items' => [3]],
                ['items' => [3]],
            ],
            'readme config merge' => [
                ['config' => ['debug' => true, 'ttl' => 60]],
                ['config' => ['ttl' => 120, 'env' => 'prod']],
                ['config' => ['debug' => true, 'ttl' => 120, 'env' => 'prod']],
            ],
            'readme tags list replace' => [
                ['tags' => ['php', 'test']],
                ['tags' => ['merge']],
                ['tags' => ['merge']],
            ],

            'empty left' => [[], ['a' => 1], ['a' => 1]],
            'empty right' => [['a' => 1], [], ['a' => 1]],
            'both empty' => [[], [], []],

            'deep three levels' => [
                ['a' => ['b' => ['c' => 1, 'd' => 2]]],
                ['a' => ['b' => ['d' => 3, 'e' => 4]]],
                ['a' => ['b' => ['c' => 1, 'd' => 3, 'e' => 4]]],
            ],

            'right only nested key' => [
                ['a' => 1],
                ['b' => ['x' => 10]],
                ['a' => 1, 'b' => ['x' => 10]],
            ],

            'list keys merged per index at top level' => [
                [0 => 'a', 1 => 'b'],
                [0 => 'c'],
                [0 => 'c', 1 => 'b'],
            ],

            'map replaces list at key' => [
                ['mix' => [1, 2]],
                ['mix' => ['k' => 'v']],
                ['mix' => ['k' => 'v']],
            ],

            'list replaces map at key' => [
                ['mix' => ['k' => 'v']],
                ['mix' => [9, 8]],
                ['mix' => [9, 8]],
            ],

            'null scalar from right' => [
                ['a' => 1],
                ['a' => null],
                ['a' => null],
            ],

            'numeric string keys associative not list' => [
                ['0' => 'left', '1' => 'keep'],
                ['0' => 'right'],
                ['0' => 'right', '1' => 'keep'],
            ],

            'preserve left only keys' => [
                ['keep' => 1, 'shared' => ['x' => 1]],
                ['shared' => ['y' => 2]],
                ['keep' => 1, 'shared' => ['x' => 1, 'y' => 2]],
            ],
        ];
    }

    public function testLeftInputNotMutated(): void
    {
        $left = ['a' => ['b' => 1]];
        $copy = $left;

        deepMerge($left, ['a' => ['c' => 2]]);

        self::assertSame($copy, $left);
    }

    public function testRightInputNotMutated(): void
    {
        $right = ['a' => ['b' => 2]];
        $copy = $right;

        deepMerge(['a' => ['b' => 1]], $right);

        self::assertSame($copy, $right);
    }

    public function testNestedLeftNotMutatedViaResult(): void
    {
        $left = ['nested' => ['value' => 1]];

        $result = deepMerge($left, ['nested' => ['added' => 2]]);
        $result['nested']['value'] = 99;

        self::assertSame(['value' => 1], $left['nested']);
    }
}
