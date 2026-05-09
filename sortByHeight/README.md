# Sort By Height

## Task

People stand in a row. Each position has either a **person’s height** (positive integer) or a **tree**, represented by `-1`. Trees cannot be moved. Sort the people by **non-decreasing height** while keeping every tree in its original index.

## Input

- `a` — array of integers; `-1` means a tree, any other value is a person’s height.

## Output

An array of the same length: heights sorted among people only, trees still `-1` at the same indices.

## Examples

| Input | Output |
|-------|--------|
| `[-1, 150, 190, 170, -1, -1, 160, 180]` | `[-1, 150, 160, 170, -1, -1, 180, 190]` |
| `[-1, -1, -1, -1, -1]` | `[-1, -1, -1, -1, -1]` (only trees) |
| `[4, 2, 7, 3]` | `[2, 3, 4, 7]` (no trees) |

```text
Input:  [-1, 150, 190, 170, -1, -1, 160, 180]
Output: [-1, 150, 160, 170, -1, -1, 180, 190]
```

```text
Input:  [2, -1, -1, 3, -1]
Output: [2, -1, -1, 3, -1]
```

Heights are sorted left to right in non-decreasing order in the slots that are not trees.

## Run tests

From the repository root (`codesignal-master`), install dependencies once:

```bash
composer install
```

From this task directory (`sortByHeight`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./SortByHeightTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./SortByHeightTest.php</code></p>
