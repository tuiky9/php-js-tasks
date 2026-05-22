# Dedupe Preserve Order

## Task

Given an array, return a new array with **duplicate values removed**, keeping the **first** occurrence of each value and preserving the relative order of the remaining items.

## Rules

- Compare values with **strict** equality (`===`).
- Keep the first time each value appears; drop later duplicates.
- Return a **zero-indexed** list (`array_values` style): keys must be `0, 1, 2, …`.
- Do not modify the input array.

## Input

- `items` — an array of mixed values (integers, strings, booleans, etc.).

## Output

- A new array with duplicates removed, first occurrence kept, reindexed from `0`.

## Examples

| Input | Output |
|-------|--------|
| `[3, 1, 3, 2, 1]` | `[3, 1, 2]` |
| `['a', 'b', 'a']` | `['a', 'b']` |
| `[1, 2, 3]` | `[1, 2, 3]` |
| `[]` | `[]` |

```text
Input:  [3, 1, 3, 2, 1]
Output: [3, 1, 2]
```

```text
Input:  [true, true, false]
Output: [true, false]
```

```text
Input:  [1, '1']
Output: [1, '1']
```

(`1` and `'1'` are different under strict comparison.)

## Function signature

```php
function dedupePreserveOrder(array $items): array
```

Implement this function in `php/dedupe_preserve_order.php`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`dedupePreserveOrder`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./DedupePreserveOrderTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./DedupePreserveOrderTest.php</code></p>
