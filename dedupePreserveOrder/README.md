# Dedupe Preserve Order

## Task

From an input array, build a new array with **duplicate values removed**. Keep only the **first** appearance of each value and maintain the relative order of everything that remains.

## Rules

- Compare elements with **strict** equality (`===`).
- On repeated values, keep the earliest occurrence and discard later ones.
- Return a **zero-indexed** list (`array_values` style): keys must run `0, 1, 2, …`.
- Leave the original input array unchanged.

## Input

- `items` — an array of mixed values (integers, strings, booleans, etc.).

## Output

- A new array with duplicates removed, first occurrences kept, reindexed from `0`.

## Examples

| Input | Output |
|-------|--------|
| `[5, 4, 5, 3, 4, 2]` | `[5, 4, 3, 2]` |
| `[0, 0, 0]` | `[0]` |
| `[null, false, null, false]` | `[null, false]` |
| `[1.0, 1, 1.0]` | `[1.0, 1]` |

```text
Input:  [42]
Output: [42]
```

```text
Input:  ['x' => 'a', 'y' => 'b', 'z' => 'a']
Output: ['a', 'b']
```

(Associative keys in the input are ignored; the output is a plain indexed list.)

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement this function in `php/dedupe_preserve_order.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`dedupePreserveOrder`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/DedupePreserveOrderTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/DedupePreserveOrderTest.php</code></p>
