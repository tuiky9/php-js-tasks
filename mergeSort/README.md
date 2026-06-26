# Merge Sort

## Task

Sort an array of `n` integers into **ascending order** using the **Merge Sort** algorithm and return the sorted result.

In the merge sort algorithm, the following algorithm must be used:
1. Split the array into two halves.
2. Recursively sort each half.
3. Merge the two sorted halves into one sorted array.

## Rules

- Sort in **non-decreasing** order (smallest to largest).
- Use **Merge Sort** — do not call PHP's built-in sort functions (`sort`, `usort`, `array_multisort`, etc.).
- Expected time complexity is **O(n log n)**.
- The input may contain duplicates, negative values, or a single element.
- An empty array should be returned unchanged.

## Input

- `$array` — array of integers (possibly empty).

## Output

- Sorted array in ascending order.

## Examples

| Input | Output |
|-------|--------|
| `[10, 3, 2, 8, -1, 5, 1]` | `[-1, 1, 2, 3, 5, 8, 10]` |
| `[5, 4, 3, 2, 1]` | `[1, 2, 3, 4, 5]` |
| `[2, 3, 6, 2, 7, 3, 9]` | `[2, 2, 3, 3, 6, 7, 9]` |
| `[]` | `[]` |

```text
Input:  array = [100, -50, 200, -150, 50, -100]
Output: [-150, -100, -50, 50, 100, 200]
```

```text
Input:  array = [-1, -1, -1, 1, 1, 1]
Output: [-1, -1, -1, 1, 1, 1]
```

## Function signature

```php
class Solution {
    public static function solution(array $array): array
}
```

Implement this function in `php/merge_sort.php`.

Call the solution with `Solution::solution(...)`.

```javascript
class Solution {
    static solution(array)
}
```

Implement this function in `js/merge_sort.js`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`mergeSort`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/MergeSortTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/MergeSortTest.php</code></p>
