# Sort By Height

## Task

A row contains people and trees. Each slot holds either a **person's height** (positive integer) or a **tree**, marked as `-1`. Trees are fixed in place. Sort the people into **non-decreasing height order** while leaving every tree at its original index.

## Input

- `a` — array of integers; `-1` denotes a tree, any other value is a person's height.

## Output

An array of the same length: people sorted by height, trees still `-1` at the same positions.

## Examples

| Input | Output |
|-------|--------|
| `[190, -1, 170]` | `[170, -1, 190]` |
| `[50, -1, -1, 10, 30]` | `[10, -1, -1, 30, 50]` |
| `[-1, 9, 1]` | `[-1, 1, 9]` |
| `[-1, 2, -1]` | `[-1, 2, -1]` |

```text
Input:  [190, -1, 170]
Output: [170, -1, 190]
```

```text
Input:  [50, -1, -1, 10, 30]
Output: [10, -1, -1, 30, 50]
```

```text
Input:  [-1, 9, 1]
Output: [-1, 1, 9]
```

Heights occupy only non-tree positions and appear in ascending order left to right.

## Run tests

From the repository root, install dependencies at once:

```bash
composer install
```

From this task directory (`sortByHeight`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/SortByHeightTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/SortByHeightTest.php</code></p>
