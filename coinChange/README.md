# Coin Change

## Task

Given a collection of unique coin denominations and a target amount, calculate
how many **distinct combinations** of coins produce exactly that amount.

Each denomination may be selected any number of times. The order in which coins
are selected does not create a new combination: `1 + 2` and `2 + 1` count as
the same way.

Use dynamic programming to solve the problem.

## Rules

- Every coin denomination must be a positive integer.
- Coin denominations are unique.
- `$amount` must be non-negative.
- Each coin may be used an unlimited number of times.
- Return `0` when the target cannot be formed.
- There is exactly one way to form amount `0`: choose no coins.
- Expected time complexity:
  **O(amount × count(coins))**.
- Expected additional memory: **O(amount)**.

## Input

- `$coins` — array of unique positive coin denominations.
- `$amount` — non-negative target amount.

## Output

- Number of distinct unordered combinations that sum to `$amount`.

## Example

For coins `[1, 2, 3]` and amount `4`, there are four combinations:

```text
1 + 1 + 1 + 1
1 + 1 + 2
1 + 3
2 + 2
```

```text
Input:  coins = [1, 2, 3], amount = 4
Output: 4
```

```text
Input:  coins = [3, 5], amount = 7
Output: 0
```

```text
Input:  coins = [], amount = 0
Output: 1
```

## Function signature

```php
class Solution
{
    public static function coinChange(array $coins, int $amount): int
}
```

Implement this in `php/coin_change.php`.

Call the solution with `Solution::coinChange($coins, $amount)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`coinChange`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/CoinChangeTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/CoinChangeTest.php</code></p>
