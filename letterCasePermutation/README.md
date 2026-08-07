# Letter Case Permutation

## Task

Given a string `$s`, return every string that can be formed by choosing, for
each letter, either its lowercase or uppercase form. Digits and any other
non-letter characters stay fixed in place.

Input letters may already be lower or upper case; both casings of each letter
must still appear in the output set.

Prefer a recursive / backtracking approach that walks the string one character
at a time.

## Rules

- Only English letters (`a–z`, `A–Z`) fork into two branches.
- Digits and special characters are copied unchanged.
- Preserve relative character positions; do not reorder the string.
- When `$s` has no letters, the result is a single-element list containing `$s`.
- When `$s` is empty, return `[""]`.
- For each letter, explore the lowercase option before the uppercase option so
  results match the usual generation order.

## Input

- `$s` — source string (letters, digits, and/or other characters).

## Output

- List of all distinct letter-case variants of `$s`.

## Example

```text
s = "a1b2"
```

```text
Output: ["a1b2", "a1B2", "A1b2", "A1B2"]
```

```text
s = "3z4"
```

```text
Output: ["3z4", "3Z4"]
```

```text
s = "12345"
```

```text
Output: ["12345"]
```

## Function signature

```php
class Solution
{
    /**
     * @return list<string>
     */
    public static function solution(string $s): array
}
```

Implement this in `php/letter_case_permutation.php`.

Call the solution with `Solution::solution($s)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`letterCasePermutation`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/LetterCasePermutationTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/LetterCasePermutationTest.php</code></p>
