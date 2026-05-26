# Deep Merge

## Task

Merge two **nested arrays** into a new array. The right-hand array wins on conflicts, with special rules for nested maps vs lists.

## Rules

- Return a **new** array. Do **not** mutate `$left` or `$right`.
- For each key in `$right`:
  - If the key exists in the result, and **both** values are arrays that are **not** lists (`array_is_list` is `false` for both), merge those two values **recursively** with the same rules.
  - Otherwise the value from `$right` replaces the value in the result (scalars, lists, or when only one side is a non-list array).
- Keys present only in `$left` are kept unchanged in the result.
- Keys present only in `$right` are added to the result.
- A **list** is an array with consecutive integer keys starting at `0` (PHP `array_is_list`).

## Input

- `$left` — an array (may be nested).
- `$right` — an array (may be nested).

## Output

- A new deeply merged array.

## Examples

| Left | Right | Output |
|------|-------|--------|
| `['a' => 1]` | `['b' => 2]` | `['a' => 1, 'b' => 2]` |
| `['a' => 1]` | `['a' => 2]` | `['a' => 2]` |
| `['x' => ['a' => 1]]` | `['x' => ['b' => 2]]` | `['x' => ['a' => 1, 'b' => 2]]` |
| `['items' => [1, 2]]` | `['items' => [3]]` | `['items' => [3]]` |

```text
Left:   ['config' => ['debug' => true, 'ttl' => 60]]
Right:  ['config' => ['ttl' => 120, 'env' => 'prod']]
Output: ['config' => ['debug' => true, 'ttl' => 120, 'env' => 'prod']]
```

```text
Left:   ['tags' => ['php', 'test']]
Right:  ['tags' => ['merge']]
Output: ['tags' => ['merge']]
```

(List values are replaced, not concatenated.)

## Function signature

```php
function deepMerge(array $left, array $right): array
```

Implement this function in `php/deep_merge.php`.

```javascript
function deepMerge(left, right)
```

Implement this function in `js/deep_merge.js`. Use plain objects `{}` for maps and arrays `[]` for lists.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`deepMerge`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./DeepMergeTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./DeepMergeTest.php</code></p>
