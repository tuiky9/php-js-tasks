# Elections Winners

## Task

An election is underway. You know how many votes each candidate has received so far, and how many voters (`k`) have not voted yet.

Return how many candidates could still become the **sole winner** after the remaining votes are cast.

## Rules

- A candidate wins only if they finish with **strictly more** votes than every other candidate.
- If two or more candidates tie for the highest vote count, there is **no winner**.
- For each candidate, assume all remaining votes could go to them (best case) or be distributed in the worst way for them (worst case). If they can reach a strict majority under some valid assignment of the `k` votes, count them.

## Input

- `votes` — non-empty array of non-negative integers; `votes[i]` is the current tally for candidate `i` (`4 ≤ votes.length ≤ 10⁵`, `0 ≤ votes[i] ≤ 10⁴`).
- `k` — number of voters who have not voted yet (`0 ≤ k ≤ 10⁵`).

## Output

An integer: how many candidates still have a path to winning outright.

## Examples

| votes | k | Output |
|-------|---|--------|
| `[1, 3, 3, 1, 1]` | `0` | `0` (two candidates tied at 3 — no sole winner possible) |
| `[5, 1, 3, 4, 1]` | `0` | `1` (candidate 0 already has 5, the highest) |
| `[1, 1, 1, 1]` | `1` | `4` (any candidate can reach 2 while others stay at 1) |
| `[10]` | `0` | `1` |

```text
Input:  votes = [1, 3, 3, 1, 1], k = 0
Output: 0
```

```text
Input:  votes = [5, 1, 3, 4, 1], k = 0
Output: 1
```

```text
Input:  votes = [1, 1, 1, 1], k = 1
Output: 4
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement in `php/elections_winners.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`electionsWinners`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/ElectionsWinnersTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/ElectionsWinnersTest.php</code></p>
