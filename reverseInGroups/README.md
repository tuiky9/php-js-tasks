# Reverse In Groups

## Task

Given an array of `n` integers and a positive integer `k`, reverse the array **in consecutive groups of size `k`**.

Walk the array from left to right in chunks of `k` elements. Reverse each complete chunk. When the final chunk has **fewer than `k` elements**, reverse that partial chunk too.

Return the modified array.

## Rules

- Partition the array into consecutive groups of size `k`.
- Reverse every group, including the trailing partial group when it is shorter than `k`.
- Element values stay the same; only positions change.
- `k` is always at least `1`.

## Input

- `$numbers` — array of integers.
- `$k` — group size (positive integer).

## Output

- A new array after reversing each group.

## Examples

Given `[10, 20, 30, 40, 50, 60, 70]` and `k = 5`, return:

`[50, 40, 30, 20, 10, 70, 60]`

- `[10, 20, 30, 40, 50]` → `[50, 40, 30, 20, 10]`
- `[60, 70]` (remaining two elements) → `[70, 60]`

```text
Input:  numbers = [-7, -6, -5, -4, -3, -2, -1], k = 4
Output: [-4, -5, -6, -7, -1, -2, -3]
```

```text
Input:  numbers = [10, 20, 30, 40, 50, 60, 70], k = 10
Output: [70, 60, 50, 40, 30, 20, 10]
```

```text
Input:  numbers = [1, 2, 3, 4, 5], k = 3
Output: [3, 2, 1, 5, 4]
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement in `php/reverse_in_groups.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`reverseInGroups`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/ReverseInGroupsTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/ReverseInGroupsTest.php</code></p>
