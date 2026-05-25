# CIDR Contains

## Task

Given a valid **IPv4 address** and a **CIDR** block (`network/prefix`), return whether the IP lies in that subnet.

Membership uses the **network prefix**: compare only the first `prefix` bits of the IP and the CIDR network address. All addresses in the block count as members (including the network and broadcast addresses of that prefix).

## Rules

- Inputs are guaranteed valid: dotted IPv4 (`a.b.c.d` with each octet `0–255`) and CIDR `network/prefix` with `prefix` from `0` to `32`.
- Parse the CIDR as `network` (IPv4) and integer `prefix`.
- Build a bitmask from `prefix`: the leftmost `prefix` bits are `1`, the rest are `0`. For `prefix === 0`, the mask is all zeros (every IPv4 matches). For `prefix === 32`, only the exact address `network` matches.
- The IP is in the block when `(ip & mask) === (network & mask)` using 32-bit unsigned logic.

## Input

- `ip` — a valid IPv4 string.
- `cidr` — a valid CIDR string, e.g. `"192.168.0.0/24"`.

## Output

- `true` if `ip` is in the CIDR range, `false` otherwise.

## Examples

| IP | CIDR | Output |
|----|------|--------|
| `"192.168.0.42"` | `"192.168.0.0/24"` | `true` |
| `"192.168.1.1"` | `"192.168.0.0/24"` | `false` |
| `"10.255.1.2"` | `"10.0.0.0/8"` | `true` |
| `"11.0.0.1"` | `"10.0.0.0/8"` | `false` |
| `"1.1.1.2"` | `"1.1.1.1/32"` | `false` |
| `"8.8.8.8"` | `"0.0.0.0/0"` | `true` |

```text
Input:  ip = "192.168.0.42", cidr = "192.168.0.0/24"
Output: true
```

```text
Input:  ip = "172.31.255.255", cidr = "172.16.0.0/12"
Output: true
```

(`172.16.0.0/12` spans `172.16.0.0` through `172.31.255.255`.)

```text
Input:  ip = "172.32.0.0", cidr = "172.16.0.0/12"
Output: false
```

## Function signature

```php
function cidrContains(string $ip, string $cidr): bool
```

Implement this function in `php/cidr_contains.php`.

```javascript
function cidrContains(ip, cidr)
```

Implement this function in `js/cidr_contains.js`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`cidrContains`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./CidrContainsTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./CidrContainsTest.php</code></p>
