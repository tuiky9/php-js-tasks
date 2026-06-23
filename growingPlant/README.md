# Growing Plant

## Task

You grow a plant from a seed. It starts at height **0**.

Each **day** it grows by `upSpeed`. Each **night** it shrinks by `downSpeed` (because of less sunlight). Net growth per full day–night cycle is `upSpeed - downSpeed`.

Given `upSpeed`, `downSpeed`, and a target `desiredHeight`, return how many **days** it takes for the plant to reach or exceed `desiredHeight`. Height is checked **after** the daytime growth on that day.

## Input

- `upSpeed` — daily growth (`3 ≤ upSpeed ≤ 100`).
- `downSpeed` — nightly shrink (`2 ≤ downSpeed < upSpeed`).
- `desiredHeight` — target height (`4 ≤ desiredHeight ≤ 1000`).

## Output

An integer: the number of days until the plant's height is at least `desiredHeight` after daytime growth.

## Examples

| upSpeed | downSpeed | desiredHeight | Output |
|---------|-----------|---------------|--------|
| `10` | `9` | `4` | `1` (day 1: 0 → 10) |
| `5` | `2` | `7` | `2` (day 1: 5, day 2: 5 + 5 = 10) |
| `3` | `1` | `10` | `5` |
| `7` | `3` | `21` | `5` |

```text
Input:  upSpeed = 10, downSpeed = 9, desiredHeight = 4
Output: 1
```

```text
Input:  upSpeed = 5, downSpeed = 2, desiredHeight = 7
Output: 2
```

```text
Input:  upSpeed = 3, downSpeed = 1, desiredHeight = 10
Output: 5
```

## Function signature

```php
class Solution {
    public static function solution(...)
}
```

Implement in `php/growing_plant.php`.

Call the solution with `Solution::solution(...)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`growingPlant`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/GrowingPlantTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/GrowingPlantTest.php</code></p>
