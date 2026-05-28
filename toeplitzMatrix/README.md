# Toeplitz Matrix

## Task

You are given a square matrix of size `n x n`.

Return whether the matrix is a **Toeplitz matrix**.

A matrix is Toeplitz when every descending diagonal (top-left to bottom-right, `↘`) is constant, meaning all elements on the same descending diagonal are equal.

## Input

- `matrix` — a square matrix of integers (`n x n`).

## Output

- `true` if the matrix is Toeplitz, otherwise `false`.

## Rules

- A matrix is Toeplitz when for every valid `row, col` pair, `matrix[row][col] === matrix[row + 1][col + 1]`.
- If any diagonal has at least one mismatch, return `false`.
- A `1 x 1` matrix is always Toeplitz.

## Examples

Given matrix:

```text
6 7 8
4 6 7
1 4 6
```

Return `true`, because each descending diagonal is constant:

- `[1]`
- `[4, 4]`
- `[6, 6, 6]`
- `[7, 7]`
- `[8]`

```text
Input:
1 2 3
4 5 6
7 8 9

Output:
false
```

## Function signature

```php
class Solution {
    public function isToeplitzMatrix($matrix): bool
}
```

Implement in `php/is_toeplitz_matrix.php`.

```javascript
function isToeplitzMatrix(matrix)
```

Implement in `js/is_toeplitz_matrix.js`.

## Run tests

From this task directory (`toeplitzMatrix`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./ToeplitzMatrixTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./ToeplitzMatrixTest.php</code></p>
