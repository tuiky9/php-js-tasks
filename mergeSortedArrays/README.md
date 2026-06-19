# Merge Sorted Arrays

## Task

You are given two arrays of integers, each sorted in **non-decreasing** order (every element is greater than or equal to the previous one).

Merge them into a **new** array that is also sorted in non-decreasing order and contains **all** elements from both input arrays.

## Rules

- Both input arrays are already sorted ascending.
- Do **not** use built-in PHP sort functions (`sort`, `usort`, `array_merge` followed by sort, etc.).
- Use a two-pointer merge approach (like merging in merge sort).
- Expected time complexity: **O(n + m)**, where `n` and `m` are the lengths of the two arrays.
- Expected extra space: **O(n + m)** for the result array.

## Input

- `$arr1` — sorted array of integers (may be empty).
- `$arr2` — sorted array of integers (may be empty).

## Output

- A new sorted array containing every element from `$arr1` and `$arr2`.

## Examples

| arr1 | arr2 | Output |
|------|------|--------|
| `[1, 3, 5, 7, 9]` | `[2, 2, 3, 4, 6, 6]` | `[1, 2, 2, 3, 3, 4, 5, 6, 6, 7, 9]` |
| `[1, 2, 3]` | `[4, 5, 6]` | `[1, 2, 3, 4, 5, 6]` |
| `[1, 2, 3]` | `[1, 2, 3]` | `[1, 1, 2, 2, 3, 3]` |
| `[]` | `[1, 2]` | `[1, 2]` |

```text
Input:  arr1 = [-100, 0, 50, 100], arr2 = [-75, -50, -25]
Output: [-100, -75, -50, -25, 0, 50, 100]
```

```text
Input:  arr1 = [1], arr2 = [1, 2, 3, 4, 5]
Output: [1, 1, 2, 3, 4, 5]
```

When values are equal, take from `$arr1` first (either order is valid for equal elements; the solution uses `<=` from `$arr1`).

## Function signature

```php
class Solution {
    public static function solution($arr1, $arr2): array
}
```

Implement in `php/merge_sorted_arrays.php`.

## Run tests

From this task directory (`mergeSortedArrays`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./MergeSortedArraysTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./MergeSortedArraysTest.php</code></p>
