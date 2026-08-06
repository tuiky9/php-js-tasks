# Generate Parentheses

## Task

Given a non-negative integer `$n`, produce every string that contains exactly
`$n` opening parentheses and `$n` closing parentheses and is **correctly
matched** (every prefix has at least as many `(` as `)`, and the totals are
equal at the end).

Build the answer with **recursion / backtracking**: grow a candidate string by
appending `(` or `)` only when that choice cannot break validity.

## Rules

- Each result must use exactly `$n` of `(` and `$n` of `)`.
- A string is valid when no prefix has more `)` than `(`, and the final counts
  match.
- Use recursion; do not hard-code answers for specific `$n`.
- When `$n <= 0`, return an empty list.
- The number of results is the Catalan number `C_n` (for `$n >= 1`).

## Input

- `$n` — how many pairs of parentheses to place.

## Output

- List of all valid parenthesis strings of length `2 · n`.

## Example

```text
n = 3
```

```text
Output:
[
  "((()))",
  "(()())",
  "(())()",
  "()(())",
  "()()()",
]
```

```text
n = 1
```

```text
Output: ["()"]
```

```text
n = 0
```

```text
Output: []
```

## Function signature

```php
class Solution
{
    /**
     * @return list<string>
     */
    public static function generateParentheses(int $n): array
}
```

Implement this in `php/generate_parentheses.php`.

Call the solution with `Solution::generateParentheses($n)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`generateParentheses`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/GenerateParenthesesTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/GenerateParenthesesTest.php</code></p>
