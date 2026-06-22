# Remove Common Elements

## Task

You are given two sorted arrays of integers, `list1` and `list2`.

Return a **new sorted array** that contains all elements from both lists **except** values that appear in **both** lists. The result must be sorted in ascending order.

## Rules

- Both input arrays are sorted in non-decreasing order.
- A value that appears in `list1` and also in `list2` must be **removed entirely** from the result (even if it would appear twice after merging).
- Use an efficient **two-pointer** approach (merge-style walk).
- Do not mutate the input arrays.

## Input

- `$list1` — sorted array of integers (may be empty).
- `$list2` — sorted array of integers (may be empty).

## Output

- A sorted array with common elements removed.

## Examples

| list1 | list2 | Output |
|-------|-------|--------|
| `[2, 5, 7, 10]` | `[1, 5, 9]` | `[1, 2, 7, 9, 10]` |
| `[1, 2, 3]` | `[4, 5, 6]` | `[1, 2, 3, 4, 5, 6]` |
| `[1, 2, 3]` | `[1, 2, 3]` | `[]` |
| `[]` | `[-1, 0, 1]` | `[-1, 0, 1]` |

`5` is dropped because it appears in both input lists.

```text
Input:  list1 = [1, 2, 3, 4, 5, 6, 7], list2 = [2, 4, 6]
Output: [1, 3, 5, 7]
```

```text
Input:  list1 = [1, 3, 5, 7], list2 = [2, 4, 6, 8, 10, 12]
Output: [1, 2, 3, 4, 5, 6, 7, 8, 10, 12]
```

## Function signature

```php
class Solution {
    public function removeCommonElements(array $list1, array $list2): array
}
```

Implement in `php/remove_common_elements.php`.

## Run tests

From this task directory (`removeCommonElements`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./RemoveCommonElementsTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./RemoveCommonElementsTest.php</code></p>
