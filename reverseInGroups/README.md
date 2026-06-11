# Reverse In Groups

## Task

Given an array of `n` integers and a positive integer `k`, reverse the array **in consecutive groups of size `k`**.

Process the array from left to right in blocks of `k` elements. Reverse each full block in place. If the final block has **fewer than `k` elements**, reverse that remaining block as well.

Return the resulting array.

## Rules

- Split the array into consecutive groups of size `k`.
- Reverse every group, including the last one even when it has fewer than `k` elements.
- Preserve element values; only their order changes.
- `k` is guaranteed to be at least `1`.

## Input

- `$numbers` — array of integers.
- `$k` — group size (positive integer).

## Output

- A new array after group reversals.

## Examples

Given `[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]` and `k = 3`, return:

`[3, 2, 1, 6, 5, 4, 9, 8, 7, 10]`

- `[1, 2, 3]` → `[3, 2, 1]`
- `[4, 5, 6]` → `[6, 5, 4]`
- `[7, 8, 9]` → `[9, 8, 7]`
- `[10]` (only one element left) → `[10]`

```text
Input:  numbers = [1, 2, 3, 4, 5, 6, 7], k = 3
Output: [3, 2, 1, 6, 5, 4, 7]
```

```text
Input:  numbers = [2, 3], k = 2
Output: [3, 2]
```

```text
Input:  numbers = [1, 2, 3, 4, 5, 6], k = 1
Output: [1, 2, 3, 4, 5, 6]
```

(`k = 1` reverses each one-element group, so the array stays the same.)

## Function signature

```php
class Solution {
    public static function solution($numbers, $k): array
}
```

Implement in `php/reverse_in_groups.php`.

## Run tests

From this task directory (`reverseInGroups`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./ReverseInGroupsTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./ReverseInGroupsTest.php</code></p>
