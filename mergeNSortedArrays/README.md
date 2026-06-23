# Merge N Sorted Arrays

## Task

You receive `n` integer arrays. Each array is individually sorted in **ascending** order, but the batches have not been combined yet.

Produce a **single sorted array** containing every element from all input arrays.

## Rules

- Every input array is sorted non-decreasing.
- Return one new array in ascending order.
- Do **not** use built-in sort functions (`sort`, `usort`, etc.).
- Do **not** use `SplPriorityQueue` or similar priority-queue helpers.
- Expected time complexity: **O(n × m)**, where `n` is the number of arrays and `m` is the maximum length of any array.
- A typical approach: repeatedly select the smallest **current head** across all arrays (keep an index per array).

## Input

- `$arrays` — array of sorted integer arrays (may include empty arrays).

## Output

- A sorted array with all elements merged.

## Examples

| Input | Output |
|-------|--------|
| `[[-3, 10, 27], [32, 50, 78], [98, 100, 110]]` | `[-3, 10, 27, 32, 50, 78, 98, 100, 110]` |
| `[[12, 15, 17, 20], [3, 7, 8, 10], [2, 9, 11, 30]]` | `[2, 3, 7, 8, 9, 10, 11, 12, 15, 17, 20, 30]` |
| `[[-5], [-4], [-3], [-2], [-1]]` | `[-5, -4, -3, -2, -1]` |
| `[[10, 20, 30], [15, 25], [23, 24, 35]]` | `[10, 15, 20, 23, 24, 25, 30, 35]` |

```text
Input:  [[3, 5, 7, 9], [2, 4, 6, 8, 10]]
Output: [2, 3, 4, 5, 6, 7, 8, 9, 10]
```

```text
Input:  [[], [], [-3, -2, -1]]
Output: [-3, -2, -1]
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement in `php/merge_n_sorted_arrays.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`mergeNSortedArrays`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/MergeNSortedArraysTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/MergeNSortedArraysTest.php</code></p>
