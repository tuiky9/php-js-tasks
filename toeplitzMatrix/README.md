# Toeplitz Matrix

## Task

You are given a square matrix of size `n x n`.

Decide whether it is a **Toeplitz matrix**.

A matrix is Toeplitz when every descending diagonal (top-left to bottom-right, `↘`) is constant — all entries on the same such diagonal share the same value.

## Input

- `matrix` — a square matrix of integers (`n x n`).

## Output

- `true` if the matrix is Toeplitz, otherwise `false`.

## Rules

- For every valid `row, col`, require `matrix[row][col] === matrix[row + 1][col + 1]`.
- Return `false` as soon as any diagonal contains a mismatch.
- A `1 x 1` matrix is always Toeplitz.

## Examples

Given matrix:

```text
1 7
5 1
```

Return `true` — descending diagonals `[1]`, `[7, 5]`, and `[1]` are each constant.

```text
Input:
1 5 9
6 1 5
11 6 1

Output:
true
```

```text
Input:
1 2 1
0 1 2
3 0 1

Output:
true
```

```text
Input:
3 3 3
3 1 3
3 3 3

Output:
false
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement in `php/is_toeplitz_matrix.php`.

Call the solution with `Solution::solution(...)`.

```javascript
class Solution {
    static solution(...)
}
```

Implement in `js/is_toeplitz_matrix.js`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`toeplitzMatrix`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/ToeplitzMatrixTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/ToeplitzMatrixTest.php</code></p>
