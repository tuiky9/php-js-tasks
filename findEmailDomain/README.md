# Find Email Domain

## Task

An email address has three parts: a **local part**, an `@` symbol, and a **domain part**.

Example shape: `"John.Smith@example.com"` → local `"John.Smith"`, domain `"example.com"`.

The local part may contain many special characters; the domain part uses letters, digits, hyphens, and dots. You are given a **valid** email address. Extract and return its domain (everything after the **last** `@`).

## Input

- `address` — a valid email address string (`10 ≤ address.length ≤ 50`).

## Output

A string: the domain portion of the address.

## Examples

| address | Output |
|---------|--------|
| `"someaddress@yandex.ru"` | `"yandex.ru"` |
| `"admin@mailserver2"` | `"mailserver2"` |
| `'"very.unusual.@.unusual.com"@usual.com'` | `"usual.com"` |

```text
Input:  address = "someaddress@yandex.ru"
Output: yandex.ru
```

```text
Input:  address = "admin@mailserver2"
Output: mailserver2
```

```text
Input:  address = "\"very.unusual.@.unusual.com\"@usual.com"
Output: usual.com
```

(The local part is quoted; the domain is still `usual.com`.)

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement in `php/find_email_domain.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`findEmailDomain`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/FindEmailDomainTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/FindEmailDomainTest.php</code></p>
