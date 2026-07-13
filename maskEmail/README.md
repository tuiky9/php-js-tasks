# Mask Email

## Task

Write a function that **masks** a valid email address for display.

Validate the input with PHP's `filter_var($email, FILTER_VALIDATE_EMAIL)`. If the email is invalid, return `false`.

For valid emails: keep the **first two characters** of the local part (before `@`), replace the rest of the local part with `***`, and leave the domain unchanged.

## Rules

- Validate with `filter_var(..., FILTER_VALIDATE_EMAIL)` before masking.
- Return `false` when validation fails.
- Visible prefix length is `min(2, strlen(local))` — one character when the local part has length `1`, two when it has length `2` or more.
- Always append exactly `***` after the visible prefix.
- The domain (including `@`) stays as in the input.

## Input

- `$email` — email address string.

## Output

- Masked email string, or `false` if the input is not a valid email.

## Examples

| Input | Output |
|-------|--------|
| `jhon.doe@example.com` | `jh***@example.com` |
| `alice@company.org` | `al***@company.org` |
| `ab@test.io` | `ab***@test.io` |
| `not-an-email` | `false` |
| `user@` | `false` |

```text
Input:  email = "jhon.doe@example.com"
Output: "jh***@example.com"
```

```text
Input:  email = "dev.team@mail.example.net"
Output: "de***@mail.example.net"
```

```text
Input:  email = "invalid-address"
Output: false
```

## Function signature

```php
class Solution {
    public static function solution(string $email): string|false
}
```

Implement this in `php/mask_email.php`.

Call the solution with `Solution::solution($email)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`maskEmail`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/MaskEmailTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/MaskEmailTest.php</code></p>
