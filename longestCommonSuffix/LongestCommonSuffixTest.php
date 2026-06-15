<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/php/longest_common_suffix.php';

final class LongestCommonSuffixTest extends TestCase
{
    #[DataProvider('provideCases')]
    public function testLongestCommonSuffix(array $strs, string $expected): void
    {
        self::assertSame($expected, (new Solution())->solution($strs));
    }

    public static function provideCases(): array
    {
        return [
            'test1 barking parking starking' => [['barking', 'parking', 'starking'], 'arking'],
            'test2 flower tower power' => [['flower', 'tower', 'power'], 'ower'],
            'test3 alpha beta gamma' => [['alpha', 'beta', 'gamma'], 'a'],
            'test4 racer placer effacer' => [['racer', 'placer', 'effacer'], 'acer'],
            'test5 hello jello' => [['hello', 'jello'], 'ello'],
            'test6 single word' => [['word'], 'word'],
            'test7 apple grapple pineapple' => [['apple', 'grapple', 'pineapple'], 'apple'],
            'test8 a aa aaa' => [['a', 'aa', 'aaa'], 'a'],
            'test9 no common suffix' => [['ab', 'abc', 'abcd'], ''],
            'test10 empty array' => [[], ''],
            'test11 introduction reduction production seduction' => [
                ['introduction', 'reduction', 'production', 'seduction'],
                'duction',
            ],
            'test12 communication station vacation nation' => [
                ['communication', 'station', 'vacation', 'nation'],
                'ation',
            ],
            'test13 spoon moon balloon cartoon raccoon' => [
                ['spoon', 'moon', 'balloon', 'cartoon', 'raccoon'],
                'oon',
            ],
            'test14 abracadabra dabra califragilisticexpialidociousdabra' => [
                ['abracadabra', 'dabra', 'califragilisticexpialidociousdabra'],
                'dabra',
            ],
            'test15 transformation information formation automation' => [
                ['transformation', 'information', 'formation', 'automation'],
                'mation',
            ],
            'test16 repeater defeater heater seater eater' => [
                ['repeater', 'defeater', 'heater', 'seater', 'eater'],
                'eater',
            ],
            'test17 intelligibility responsibility agility ability' => [
                ['intelligibility', 'responsibility', 'agility', 'ability'],
                'ility',
            ],
            'test18 synchronization organization localization realization' => [
                ['synchronization', 'organization', 'localization', 'realization'],
                'ization',
            ],
            'test19 complication application implication replication duplication' => [
                ['complication', 'application', 'implication', 'replication', 'duplication'],
                'plication',
            ],
            'test20 understanding withstanding demanding commanding handing' => [
                ['understanding', 'withstanding', 'demanding', 'commanding', 'handing'],
                'anding',
            ],
        ];
    }
}
