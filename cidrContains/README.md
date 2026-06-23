# CIDR Contains

## Task

Given a valid **IPv4 address** and a **CIDR** subnet written as `network/prefix`, determine whether the IP belongs to that subnet.

Two addresses are in the same block when their first `prefix` bits match the CIDR network address. Every address in the range counts—including the subnet's network and broadcast addresses for that prefix length.

## Rules

- Inputs are always valid: dotted IPv4 (`a.b.c.d`, each octet `0–255`) and CIDR `network/prefix` with `prefix` from `0` to `32`.
- Split the CIDR into `network` (IPv4 string) and integer `prefix`.
- Build a bitmask: the leftmost `prefix` bits are `1`, the remainder are `0`. When `prefix === 0`, the mask is all zeros (any IPv4 matches). When `prefix === 32`, only the exact `network` address matches.
- The IP is inside the block when `(ip & mask) === (network & mask)` using 32-bit unsigned arithmetic.

## Input

- `ip` — a valid IPv4 string.
- `cidr` — a valid CIDR string, e.g. `"192.168.0.0/24"`.

## Output

- `true` if `ip` falls within the CIDR range, `false` otherwise.

## Examples

| IP | CIDR | Output |
|----|------|--------|
| `"192.168.0.255"` | `"192.168.0.0/24"` | `true` |
| `"127.0.0.1"` | `"127.0.0.0/8"` | `true` |
| `"128.0.0.1"` | `"127.0.0.0/8"` | `false` |
| `"203.0.113.2"` | `"203.0.113.0/30"` | `true` |
| `"203.0.113.4"` | `"203.0.113.0/30"` | `false` |

```text
Input:  ip = "172.16.255.255", cidr = "172.16.0.0/12"
Output: true
```

```text
Input:  ip = "10.1.0.0", cidr = "10.0.0.0/16"
Output: false
```

```text
Input:  ip = "1.1.1.1", cidr = "1.1.1.1/32"
Output: true
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement this function in `php/cidr_contains.php`.

Call the solution with `Solution::solution(...)`.

```javascript
class Solution {
    static solution(...)
}
```

Implement this function in `js/cidr_contains.js`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`cidrContains`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/CidrContainsTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/CidrContainsTest.php</code></p>
