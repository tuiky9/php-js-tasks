# File Naming

## Task

You are creating files one after another. Each entry in the input array is the **desired** name for the next file.

Two files cannot share the same name. When a desired name is already taken, append `(k)` to the end, where `k` is the smallest positive integer that makes the name unused. If that new name is also taken, append `(k)` again, and so on.

Return the list of **actual** filenames assigned, in creation order.

## Rules

- Process names left to right.
- The suffix `(k)` is appended directly to the current candidate string (e.g. `"doc(1)"` plus another collision becomes `"doc(1)(1)"`).
- Names in the input may already contain `(k)` suffixes.

## Input

- `names` — array of desired filename strings (`5 ≤ names.length ≤ 1000`, `1 ≤ names[i].length ≤ 15`).

## Output

An array of strings: the final filename for each file, in order.

## Examples

| names | Output |
|-------|--------|
| `["a", "a", "a", "a"]` | `["a", "a(1)", "a(2)", "a(3)"]` |
| `["dd", "dd(1)", "dd", "dd(1)"]` | `["dd", "dd(1)", "dd(2)", "dd(1)(1)"]` |
| `["file"]` | `["file"]` |
| `["x", "x(1)", "x(1)", "x"]` | `["x", "x(1)", "x(1)(1)", "x(2)"]` |

```text
Input:  names = ["a", "a", "a", "a"]
Output: ["a", "a(1)", "a(2)", "a(3)"]
```

```text
Input:  names = ["dd", "dd(1)", "dd", "dd(1)"]
Output: ["dd", "dd(1)", "dd(2)", "dd(1)(1)"]
```

```text
Input:  names = ["x", "x(1)", "x(1)", "x"]
Output: ["x", "x(1)", "x(1)(1)", "x(2)"]
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement in `php/file_naming.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`fileNaming`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/FileNamingTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/FileNamingTest.php</code></p>
