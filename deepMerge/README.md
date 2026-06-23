# Deep Merge

## Task

Combine two **nested arrays** into a brand-new array. When keys collide, values from the right-hand side take precedence, with special handling for nested maps versus lists.

## Rules

- Return a **new** array. Do **not** modify `$left` or `$right`.
- For each key in `$right`:
  - If that key already exists in the result and **both** stored values are arrays that are **not** lists (`array_is_list` is `false` for each), merge those inner arrays **recursively** using the same rules.
  - Otherwise the right-hand value replaces the result entry (scalars, lists, or when only one side is a non-list array).
- Keys that appear only in `$left` are copied into the result unchanged.
- Keys that appear only in `$right` are added to the result.
- A **list** is an array whose keys are consecutive integers starting at `0` (PHP `array_is_list`).

## Input

- `$left` — an array (possibly nested).
- `$right` — an array (possibly nested).

## Output

- A new deeply merged array.

## Examples

| Left | Right | Output |
|------|-------|--------|
| `[]` | `['a' => 1]` | `['a' => 1]` |
| `['a' => ['b' => ['c' => 1, 'd' => 2]]]` | `['a' => ['b' => ['d' => 3, 'e' => 4]]]` | `['a' => ['b' => ['c' => 1, 'd' => 3, 'e' => 4]]]` |
| `['mix' => [1, 2]]` | `['mix' => ['k' => 'v']]` | `['mix' => ['k' => 'v']]` |
| `['keep' => 1, 'shared' => ['x' => 1]]` | `['shared' => ['y' => 2]]` | `['keep' => 1, 'shared' => ['x' => 1, 'y' => 2]]` |

```text
Left:   ['a' => 1]
Right:  ['b' => ['x' => 10]]
Output: ['a' => 1, 'b' => ['x' => 10]]
```

```text
Left:   [0 => 'a', 1 => 'b']
Right:  [0 => 'c']
Output: [0 => 'c', 1 => 'b']
```

```text
Left:   ['a' => 1]
Right:  ['a' => null]
Output: ['a' => null]
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement this function in `php/deep_merge.php`.

Call the solution with `Solution::solution(...)`.

```javascript
class Solution {
    static solution(...)
}
```

Implement this function in `js/deep_merge.js`. Use plain objects `{}` for maps and arrays `[]` for lists.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`deepMerge`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/DeepMergeTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/DeepMergeTest.php</code></p>
