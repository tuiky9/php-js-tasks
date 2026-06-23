# Remove Common Elements

## Task

You are given two sorted integer arrays, `list1` and `list2`.

Produce a **new sorted array** containing every value from either list **except** those that appear in **both**. The output must be in ascending order.

## Rules

- Both inputs are sorted in non-decreasing order.
- Any value present in `list1` and also in `list2` is **excluded completely** from the result (even if it would appear multiple times after a naive merge).
- Use an efficient **two-pointer** merge-style scan.
- Do not modify the input arrays.

## Input

- `$list1` — sorted array of integers (may be empty).
- `$list2` — sorted array of integers (may be empty).

## Output

- A sorted array with shared values removed.

## Examples

| list1 | list2 | Output |
|-------|-------|--------|
| `[1, 2, 3]` | `[2, 3, 4]` | `[1, 4]` |
| `[-3, -2, -1]` | `[1, 2, 3]` | `[-3, -2, -1, 1, 2, 3]` |
| `[-3, -2, -1, 0]` | `[0, 1, 2, 3]` | `[-3, -2, -1, 1, 2, 3]` |
| `[-3, -1]` | `[-2, -1]` | `[-3, -2]` |
| `[10, 20, 30]` | `[5, 15, 20, 25]` | `[5, 10, 15, 25, 30]` |

`20` is omitted because it occurs in both lists.

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
    public static function solution(...)
}
```

Implement in `php/remove_common_elements.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`removeCommonElements`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/RemoveCommonElementsTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/RemoveCommonElementsTest.php</code></p>
