# PHP Doc Transform

## Task

You receive a string that holds a **PHPDoc** comment block (possibly spanning several lines).

Within that block, **variable names** appear in `snake_case` and are always prefixed with `$`.

Return the same PHPDoc text with every such variable name rewritten in **camelCase**. All other content — whitespace, tags, punctuation, line breaks — must remain unchanged.

## Rules

- Transform only **variable names** (tokens matching `$` followed by `snake_case` letters, digits, and underscores).
- Retain the leading `$`.
- Input variable names are guaranteed to be `snake_case` (lowercase segments joined by `_`).
- Turn `word_word` into `wordWord` (the first segment stays lowercase; each later segment is capitalized and underscores are dropped).
- Leave tags, types, descriptions, and any non-variable text untouched.

## Input

- `phpDoc` — a string containing one PHPDoc block (may include `/**`, `*`, and closing `*/`).

## Output

- The original string with all PHPDoc variable names in camelCase.

## Examples

| Input (excerpt) | Output (excerpt) |
|-----------------|------------------|
| `@param string $user_name  Optional comment.` | `@param string $userName  Optional comment.` |
| `@param int $src_id @param int $dst_id` | `@param int $srcId @param int $dstId` |
| `@var string $api_v2_key` | `@var string $apiV2Key` |
| `@return void` (no variables) | `@return void` (unchanged) |
| `No variables here.` | `No variables here.` |

```text
Input:
/**
 * @param string $user_name  Optional comment.
 * @return bool
 */

Output:
/**
 * @param string $userName  Optional comment.
 * @return bool
 */
```

```text
Input:
/** @param int $src_id @param int $dst_id */

Output:
/** @param int $srcId @param int $dstId */
```

```text
Input:
/**
 * @var string $api_v2_key
 */

Output:
/**
 * @var string $apiV2Key
 */
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement this function in `php/phpDoc_transform.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`phpDocTransform`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/PhpDocTransformTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/PhpDocTransformTest.php</code></p>
