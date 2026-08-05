# All Combinations

## Task

Given a string `$s`, build every non-empty string that can be formed by taking
any subset of its characters and arranging them in any order. That includes
the original string, its reverse, single characters, and everything in between.

Solve it with **recursion / backtracking**. Return the results sorted in
alphabetical order.

Do not rely on a built-in helper that generates permutations or combinations
for you.

## Rules

- Each character from `$s` may be used at most once in any result string
  (selection is by position when characters repeat).
- Duplicate strings are removed; the returned list contains unique values only.
- Include every length from `1` through `n`, where `n = strlen($s)`.
- Order within each result matters (`"ab"` and `"ba"` are both required).
- The empty string is not included.
- Sort the final list lexicographically.
- Expected growth is proportional to the number of arrangements generated
  (on the order of `Σ C(n, k) · k!` for `k = 1 … n`).

## Input

- `$s` — a string of `n` characters.

## Output

- Alphabetically sorted list of all non-empty arrangements described above.

## Example

```text
s = "abc"
```

```text
Output:
[
  "a", "ab", "abc", "ac", "acb",
  "b", "ba", "bac", "bc", "bca",
  "c", "ca", "cab", "cb", "cba",
]
```

```text
s = "ab"
```

```text
Output: ["a", "ab", "b", "ba"]
```

```text
s = ""
```

```text
Output: []
```

## Function signature

```php
class Solution
{
    /**
     * @return list<string>
     */
    public static function allCombinations(string $s): array
}
```

Implement this in `php/all_combinations.php`.

Call the solution with `Solution::allCombinations($s)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`allCombinations`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/AllCombinationsTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/AllCombinationsTest.php</code></p>
