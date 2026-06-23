# Merge N Sorted Arrays

## Task

You are given `n` arrays of integers. Each individual array is sorted in **ascending** order, but the data is split across batches that are not merged yet.

Merge all arrays into a **single sorted array** containing every element from every input array.

## Rules

- Each input array is sorted non-decreasing.
- Return one new array sorted in ascending order.
- Do **not** use built-in sort functions (`sort`, `usort`, etc.).
- Do **not** use `SplPriorityQueue` or similar priority-queue helpers.
- Expected time complexity: **O(n × m)**, where `n` is the number of arrays and `m` is the maximum length of any array.
- A common approach: repeatedly pick the smallest **current head** element across all arrays (track an index per array).

## Input

- `$arrays` — array of sorted integer arrays (may contain empty arrays).

## Output

- A sorted array with all elements merged.

## Examples

| Input | Output |
|-------|--------|
| `[[1, 5, 9], [2, 3, 10], [4, 6, 8]]` | `[1, 2, 3, 4, 5, 6, 8, 9, 10]` |
| `[[], [], [-3, -2, -1]]` | `[-3, -2, -1]` |
| `[[1], [2], [3], [4], [5]]` | `[1, 2, 3, 4, 5]` |

```text
Input:  [[3, 5, 7, 9], [2, 4, 6, 8, 10]]
Output: [2, 3, 4, 5, 6, 7, 8, 9, 10]
```

```text
Input:  [[-1000, 0, 1000], [-500, 0, 500], [-50, 0, 50]]
Output: [-1000, -500, -50, 0, 0, 0, 50, 500, 1000]
```

## Function signature

```php
class Solution {
    public static function mergeNSortedArrays($arrays): array
}
```

Implement in `php/merge_n_sorted_arrays.php`.

## Run tests

From this task directory (`mergeNSortedArrays`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./MergeNSortedArraysTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./MergeNSortedArraysTest.php</code></p>
