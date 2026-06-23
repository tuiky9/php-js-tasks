# Binary Search

## Task

You receive an integer array sorted in **ascending** (non-decreasing) order and a **target** integer. Locate the target using **binary search** and return its **zero-based index**, or `-1` if it is absent.

Do not solve this by scanning every element linearly.

## Rules

- `$sorted` is ordered so `$sorted[$i] <= $sorted[$i + 1]` for all valid `$i`.
- When the target appears multiple times, return the **leftmost** (smallest) index.
- Missing targets yield `-1`.
- An empty array always yields `-1`.

## Input

- `$sorted` — ascending sorted array of integers (possibly empty).
- `$target` — integer to locate.

## Output

- Index in the range `0 .. count($sorted) - 1`, or `-1`.

## Examples

| Array | Target | Output |
|-------|--------|--------|
| `[-10, -5, 0, 3, 7]` | `-5` | `1` |
| `[42]` | `42` | `0` |
| `[42]` | `7` | `-1` |
| `[1, 100, 200, 300, 400, 500]` | `300` | `3` |
| `[5, 5, 5, 5]` | `5` | `0` |

```text
Input:  sorted = [-10, -5, 0, 3, 7], target = -5
Output: 1
```

```text
Input:  sorted = [1, 100, 200, 300, 400, 500], target = 250
Output: -1
```

```text
Input:  sorted = [10, 20], target = 20
Output: 1
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement this function in `php/binary_search.php`.

Call the solution with `Solution::solution(...)`.

```javascript
class Solution {
    static solution(...)
}
```

Implement this function in `js/binary_search.js`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`binarySearch`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/BinarySearchTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/BinarySearchTest.php</code></p>
