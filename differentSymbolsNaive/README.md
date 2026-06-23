# Different Symbols Naive

## Task

You receive a string made of lowercase English letters. Count how many **distinct** characters appear in it.

Each letter is counted once, no matter how many times it repeats.

## Input

- `s` — a string of lowercase English letters (`3 ≤ s.length ≤ 1000`; an empty string may appear in tests).

## Output

An integer: the number of unique characters in `s`.

## Examples

| s | Output |
|---|--------|
| `"abacabad"` | `4` (`a`, `b`, `c`, `d`) |
| `"cccccccc"` | `1` |
| `""` | `0` |
| `"abcdefghijklmnopqrstuvwxyz"` | `26` |

```text
Input:  s = "abacabad"
Output: 4
```

```text
Input:  s = "cccccccc"
Output: 1
```

```text
Input:  s = ""
Output: 0
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement in `php/different_symbols_naive.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`differentSymbolsNaive`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/DifferentSymbolsNaiveTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/DifferentSymbolsNaiveTest.php</code></p>
