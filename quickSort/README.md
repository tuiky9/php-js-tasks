# Quick Sort

## Task

Sort an array of `n` integers into **ascending order** using the **Quick Sort** algorithm and return the sorted result.

Quick Sort is a comparison-based sorting algorithm:

1. **Choose a pivot** — pick an element from the array (this task uses the middle element).
2. **Partition** — place values less than the pivot before it, equal values with the pivot, and greater values after it.
3. **Recurse** — apply the same steps to the left and right partitions until each part has at most one element.

## Rules

- Sort in **non-decreasing** order (smallest to largest).
- Use **Quick Sort** — do not call PHP's built-in sort functions (`sort`, `usort`, `array_multisort`, etc.).
- Expected time complexity is **O(n log n)** on average.
- The input may contain duplicates, negative values, or a single element.
- An empty array should be returned unchanged.

## Input

- `$array` — array of integers (possibly empty).

## Output

- Sorted array in ascending order.

## Example walkthrough

For `[9, 4, 7, 1, 5]`:

1. Pivot (middle element): `7`
2. Partition: `[4, 1, 5]`, `[7]`, `[9]`
3. Recurse on `[4, 1, 5]` with pivot `1` → `[]`, `[1]`, `[4, 5]`
4. Merge results: `[1, 4, 5, 7, 9]`

## Examples

| Input | Output |
|-------|--------|
| `[9, 4, 7, 1, 5]` | `[1, 4, 5, 7, 9]` |
| `[5, 4, 3, 2, 1]` | `[1, 2, 3, 4, 5]` |
| `[7, 8, 4, 2]` | `[2, 4, 7, 8]` |
| `[]` | `[]` |

```text
Input:  array = [-1, 2, -3]
Output: [-3, -1, 2]
```

```text
Input:  array = [15, 10, 45, 25, 36, 12, 27]
Output: [10, 12, 15, 25, 27, 36, 45]
```

## Function signature

```php
class Solution {
    public static function solution(array $array): array
}
```

Implement this function in `php/quick_sort.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`quickSort`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/QuickSortTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/QuickSortTest.php</code></p>
