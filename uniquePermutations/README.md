# Unique Permutations

## Task

Given a list of integers that may contain duplicates, produce every **distinct**
full-length rearrangement of that list.

Build the answer with **recursion and backtracking** (choose a next element,
recurse, then undo the choice). Do **not** call a built-in or library helper
that emits permutations for you.

Return the permutations in **lexicographical order**.

## Rules

- Each permutation must use every input value exactly once (same multiset).
- Duplicate values must not produce duplicate result rows.
- Sort the output lexicographically (sorting the input first is a common approach).
- Expected time complexity: **O(N!)**, where `N` is the length of `$nums`.
- Do not use PHP helpers such as permutations generators from external packages.

## Input

- `$nums` — array of integers (duplicates allowed).

## Output

- A list of all unique permutations of `$nums`, each of length `N`, ordered
  lexicographically.

## Example

```text
nums = [1, 1, 2]
```

```text
Output:
[
  [1, 1, 2],
  [1, 2, 1],
  [2, 1, 1],
]
```

```text
nums = [1, 2, 3]
```

```text
Output:
[
  [1, 2, 3],
  [1, 3, 2],
  [2, 1, 3],
  [2, 3, 1],
  [3, 1, 2],
  [3, 2, 1],
]
```

```text
nums = []
```

```text
Output: [[]]
```

## Function signature

```php
class Solution
{
    /**
     * @param list<int> $nums
     * @return list<list<int>>
     */
    public static function solution(array $nums): array
}
```

Implement this in `php/unique_permutations.php`.

Call the solution with `Solution::solution($nums)`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`uniquePermutations`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/UniquePermutationsTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/UniquePermutationsTest.php</code></p>
