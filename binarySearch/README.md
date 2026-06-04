# Binary Search

## Task

Given a **sorted** array of integers in **non-decreasing** order and a **target** value, return the **zero-based index** of the target if it is present; otherwise return `-1`.

Use **binary search** (do not scan the whole array linearly).

## Rules

- The input array is sorted ascending (`$sorted[$i] <= $sorted[$i + 1]`).
- Return the **leftmost** index when the target appears more than once.
- If the target is not in the array, return `-1`.
- An empty array always returns `-1`.

## Input

- `$sorted` — sorted array of integers (may be empty).
- `$target` — integer to find.

## Output

- Integer index `0 .. count($sorted) - 1`, or `-1`.

## Examples

| Array | Target | Output |
|-------|--------|--------|
| `[1, 3, 5, 7, 9]` | `5` | `2` |
| `[1, 3, 5, 7, 9]` | `4` | `-1` |
| `[2, 4, 4, 4, 8]` | `4` | `1` |
| `[]` | `10` | `-1` |

```text
Input:  sorted = [1, 3, 5, 7, 9], target = 5
Output: 2
```

```text
Input:  sorted = [1, 3, 5, 7, 9], target = 1
Output: 0
```

```text
Input:  sorted = [1, 3, 5, 7, 9], target = 10
Output: -1
```

## Function signature

```php
function binarySearch(array $sorted, int $target): int
```

Implement this function in `php/binary_search.php`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`binarySearch`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./BinarySearchTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./BinarySearchTest.php</code></p>
