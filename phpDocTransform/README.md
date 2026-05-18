# PHP Doc Transform

## Task

You are given a string containing a **PHPDoc** block (a doc comment that may span multiple lines).

Inside the PHPDoc, **variable names** are written in `snake_case` and always start with `$`.

Write a function that returns the same PHPDoc string with every such variable name converted to **camelCase**. Everything else in the string must stay exactly as it was (spacing, tags, punctuation, line breaks).

## Rules

- Only **variable names** are transformed (tokens that match `$` followed by `snake_case` letters, digits, and underscores).
- The `$` prefix is kept.
- Variable names are guaranteed to use `snake_case` (lowercase words separated by `_`).
- Convert `word_word` → `wordWord` (first segment stays lowercase; each following segment is capitalized and joined with no underscores).
- Do not change tags, types, descriptions, or any text that is not a `$variable` name.

## Input

- `phpDoc` — a string containing one PHPDoc block (may include `/**`, `*`, and closing `*/`).

## Output

- The same string with all PHPDoc variable names in camelCase.

## Examples

| Input (excerpt) | Output (excerpt) |
|-----------------|------------------|
| `@param string $user_name` | `@param string $userName` |
| `@param int $order_id` and `@param string $customer_email` | `@param int $orderId` and `@param string $customerEmail` |
| `Compare $old_value with $new_value.` | `Compare $oldValue with $newValue.` |
| `@param string $name` | `@param string $name` (no underscores — unchanged) |
| `@param string $http_request_id` | `@param string $httpRequestId` |

```text
Input:
/**
 * @param string $user_name
 * @return void
 */

Output:
/**
 * @param string $userName
 * @return void
 */
```

```text
Input:
/**
 * @param int $order_id
 * @param string $customer_email
 * @var array $line_items
 */

Output:
/**
 * @param int $orderId
 * @param string $customerEmail
 * @var array $lineItems
 */
```

```text
Input:
/**
 * Compare $old_value with $new_value.
 */

Output:
/**
 * Compare $oldValue with $newValue.
 */
```

## Function signature

```php
function transformPhpDocVariables(string $phpDoc): string
```

Implement this function in `phpDoc_transform.php`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`phpDocTransform`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml ./PhpDocTransformTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml ./PhpDocTransformTest.php</code></p>
