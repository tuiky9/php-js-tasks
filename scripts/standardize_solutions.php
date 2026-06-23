<?php

/**
 * Standardize task solutions to class Solution with static method solution().
 */

declare(strict_types=1);

$root = dirname(__DIR__);

$taskDirs = [];
$xml = file_get_contents($root . '/phpunit.xml');
preg_match_all('#<directory suffix="Test\.php">([^<]+)</directory>#', $xml, $matches);
foreach ($matches[1] as $dir) {
    $taskDirs[] = $dir;
}

function findPhpFile(string $taskDir): ?string
{
    $phpDir = $taskDir . '/php';
    if (!is_dir($phpDir)) {
        return null;
    }

    $files = glob($phpDir . '/*.php');
    if ($files === false || $files === []) {
        return null;
    }

    if (count($files) === 1) {
        return $files[0];
    }

    foreach ($files as $file) {
        if (str_contains(basename($file), 'solution')) {
            return $file;
        }
    }

    return $files[0];
}

function findJsFile(string $taskDir): ?string
{
    $jsDir = $taskDir . '/js';
    if (!is_dir($jsDir)) {
        return null;
    }

    $files = glob($jsDir . '/*.js');
    if ($files === false || $files === []) {
        return null;
    }

    if (count($files) === 1) {
        return $files[0];
    }

    foreach ($files as $file) {
        if (str_contains(basename($file), 'solution')) {
            return $file;
        }
    }

    return $files[0];
}

function convertPhpToSolution(string $code): string
{
    if (preg_match('/class\s+Solution\b/', $code)) {
        $code = preg_replace(
            '/public\s+static\s+function\s+\w+\s*\(/',
            'public static function solution(',
            $code,
            1
        );
        $code = preg_replace(
            '/public\s+function\s+\w+\s*\(/',
            'public static function solution(',
            $code,
            1
        );

        return $code;
    }

    if (!preg_match('/function\s+(\w+)\s*\(([^)]*)\)\s*(\{)/s', $code, $match, PREG_OFFSET_CAPTURE)) {
        return $code;
    }

    $funcStart = $match[0][1];
    $params = $match[2][0];
    $bodyStart = $match[3][1] + 1;

    $braceDepth = 1;
    $len = strlen($code);
    $i = $bodyStart;

    while ($i < $len && $braceDepth > 0) {
        $char = $code[$i];
        if ($char === '{') {
            $braceDepth++;
        } elseif ($char === '}') {
            $braceDepth--;
        }
        $i++;
    }

    $body = substr($code, $bodyStart, $i - $bodyStart - 1);
    $before = trim(substr($code, 0, $funcStart));

    $header = "<?php\n\nclass Solution\n{\n    public static function solution($params)\n    {";
    if ($before !== '' && $before !== '<?php') {
        $comment = trim(preg_replace('/^<\?php\s*/', '', $before));
        if ($comment !== '') {
            $header = "<?php\n\n/*\n" . trim($comment, "/* \n") . "\n*/\n\nclass Solution\n{\n    public static function solution($params)\n    {";
        }
    }

    return $header . $body . "\n    }\n}\n";
}

function convertJsToSolution(string $code): string
{
    if (preg_match('/class\s+Solution\b/', $code)) {
        $code = preg_replace(
            '/static\s+\w+\s*\(/',
            'static solution(',
            $code,
            1
        );
        $code = preg_replace(
            '/^\s*\w+\s*\([^)]*\)\s*\{/m',
            '    static solution(',
            $code,
            1
        );

        if (!preg_match('/module\.exports/', $code)) {
            $code = rtrim($code) . "\n\nif (typeof module !== 'undefined' && module.exports) {\n    module.exports = { Solution };\n}\n";
        } else {
            $code = preg_replace(
                '/module\.exports\s*=\s*\{[^}]+\}/',
                'module.exports = { Solution }',
                $code
            );
        }

        return $code;
    }

    if (!preg_match('/function\s+(\w+)\s*\(([^)]*)\)\s*\{/', $code, $match, PREG_OFFSET_CAPTURE)) {
        return $code;
    }

    $mainName = $match[1][0];
    $funcStart = $match[0][1];
    $params = $match[2][0];
    $bodyStart = $match[0][1] + strlen($match[0][0]);

    $braceDepth = 1;
    $len = strlen($code);
    $i = $bodyStart;

    while ($i < $len && $braceDepth > 0) {
        $char = $code[$i];
        if ($char === '{') {
            $braceDepth++;
        } elseif ($char === '}') {
            $braceDepth--;
        }
        $i++;
    }

    $mainBody = substr($code, $bodyStart, $i - $bodyStart - 1);
    $rest = trim(substr($code, $i));

    $helpers = '';
    if ($rest !== '') {
        $helpers = "\n" . $rest . "\n";
    }

    $result = "class Solution {\n    static solution($params) {" . $mainBody . "}\n";
    if ($helpers !== '') {
        $result .= preg_replace_callback(
            '/function\s+(\w+)\s*\(([^)]*)\)\s*\{/',
            static function (array $m): string {
                return '    static ' . $m[1] . '(' . $m[2] . ') {';
            },
            $helpers
        );
    }
    $result .= "}\n\nif (typeof module !== 'undefined' && module.exports) {\n    module.exports = { Solution };\n}\n";

    return $result;
}

function updateTestFile(string $path): void
{
    $code = file_get_contents($path);
    if ($code === false) {
        return;
    }

    $original = $code;

    $code = preg_replace(
        '/require_once __DIR__ \. \'\/\.\.\/tests\/Support\/FunctionLoader\.php\';\s*/',
        '',
        $code
    );

    $code = preg_replace(
        '/\s*public static function setUpBeforeClass\(\): void\s*\{\s*FunctionLoader::load\([^;]+;\s*\}\s*/',
        "\n",
        $code
    );

    if (!str_contains($code, "require_once __DIR__ . '/php/")) {
        $taskDir = dirname($path);
        $phpFile = findPhpFile($taskDir);
        if ($phpFile !== null) {
            $relative = '__DIR__ . \'/php/' . basename($phpFile) . '\'';
            $code = preg_replace(
                '/(declare\(strict_types=1\);\s*\n\s*use[^;]+;\s*\n)/',
                "$1\nrequire_once $relative;\n",
                $code,
                1
            );
            if (!str_contains($code, 'require_once')) {
                $code = preg_replace(
                    '/(<\?php\s*\n\s*declare\(strict_types=1\);\s*\n)/',
                    "$1\nrequire_once $relative;\n",
                    $code,
                    1
                );
            }
        }
    }

    $code = preg_replace('/\(new Solution\(\)\)->solution\(/', 'Solution::solution(', $code);
    $code = preg_replace('/\$this->solution->solution\(/', 'Solution::solution(', $code);
    $code = preg_replace('/\$this->solution->removeCommonElements\(/', 'Solution::solution(', $code);

    $replacements = [
        'binarySearch(' => 'Solution::solution(',
        'deepMerge(' => 'Solution::solution(',
        'cidrContains(' => 'Solution::solution(',
        'firstDigit(' => 'Solution::solution(',
        'arrayMaximalAdjacentDifference(' => 'Solution::solution(',
        'matrixElementsSum(' => 'Solution::solution(',
        'absoluteValuesSumMinimization(' => 'Solution::solution(',
        'areSimilar(' => 'Solution::solution(',
        'reverseInParentheses(' => 'Solution::solution(',
        'arrayMaxConsecutiveSum(' => 'Solution::solution(',
        'areEquallyStrong(' => 'Solution::solution(',
        'formatBytes(' => 'Solution::solution(',
        'checkPalindrome(' => 'Solution::solution(',
        'isDigit(' => 'Solution::solution(',
        'alphabeticShift(' => 'Solution::solution(',
        'stringsRearrangement(' => 'Solution::solution(',
        'solve(' => 'Solution::solution(',
        'addBorder(' => 'Solution::solution(',
        'bishopAndPawn(' => 'Solution::solution(',
        'centuryFromYear(' => 'Solution::solution(',
        'knapsackLight(' => 'Solution::solution(',
        'isIPv4Address(' => 'Solution::solution(',
        'isMAC48Address(' => 'Solution::solution(',
        'palindromeRearranging(' => 'Solution::solution(',
        'longestDigitsPrefix(' => 'Solution::solution(',
        'dedupePreserveOrder(' => 'Solution::solution(',
        'arrayChange(' => 'Solution::solution(',
        'shapeArea(' => 'Solution::solution(',
        'variableName(' => 'Solution::solution(',
        'isBeautifulString(' => 'Solution::solution(',
        'fileNaming(' => 'Solution::solution(',
        'chessBoardCellColor(' => 'Solution::solution(',
        'validTime(' => 'Solution::solution(',
        'lineEncoding(' => 'Solution::solution(',
        'isLucky(' => 'Solution::solution(',
        'commonCharacterCount(' => 'Solution::solution(',
        'longestWord(' => 'Solution::solution(',
        'growingPlant(' => 'Solution::solution(',
        'parseQueryString(' => 'Solution::solution(',
        'alternatingSums(' => 'Solution::solution(',
        'evenDigitsOnly(' => 'Solution::solution(',
        'circleOfNumbers(' => 'Solution::solution(',
        'allLongestStrings(' => 'Solution::solution(',
        'almostIncreasingSequence(' => 'Solution::solution(',
        'differentSymbolsNaive(' => 'Solution::solution(',
        'findEmailDomain(' => 'Solution::solution(',
        'arrayReplace(' => 'Solution::solution(',
        'depositProfit(' => 'Solution::solution(',
        'messageFromBinaryCode(' => 'Solution::solution(',
        'sumUpNumbers(' => 'Solution::solution(',
        'electionsWinners(' => 'Solution::solution(',
        'transformPhpDocVariables(' => 'Solution::solution(',
        'sortByHeight(' => 'Solution::solution(',
        'slugifyTitle(' => 'Solution::solution(',
        'makeArrayConsecutive2(' => 'Solution::solution(',
        'buildPalindrome(' => 'Solution::solution(',
        'isToeplitzMatrix(' => 'Solution::solution(',
        'countLessThan(' => 'Solution::solution(',
        'secondaryDiagonalMinMax(' => 'Solution::solution(',
        'mergeNSortedArrays(' => 'Solution::solution(',
        'removeCommonElements(' => 'Solution::solution(',
    ];

    foreach ($replacements as $from => $to) {
        $code = str_replace($from, $to, $code);
    }

    $code = preg_replace(
        '/private Solution \$solution;\s*\n\s*protected function setUp\(\): void\s*\{\s*\$this->solution = new Solution\(\);\s*\}\s*\n/',
        '',
        $code
    );

    if ($code !== $original) {
        file_put_contents($path, $code);
    }
}

function updateReadme(string $path): void
{
    $code = file_get_contents($path);
    if ($code === false) {
        return;
    }

    $original = $code;

    $code = preg_replace(
        '/```php\s*\n(?:class Solution \{[^`]+|function\s+\w+\([^`]+)```/s',
        "```php\nclass Solution {\n    public static function solution(...)\n}\n```",
        $code
    );

    $code = preg_replace(
        '/```javascript\s*\nfunction\s+\w+\([^`]+```/s',
        "```javascript\nclass Solution {\n    static solution(...)\n}\n```",
        $code
    );

    if (preg_match('/## Function signature/', $code) && !str_contains($code, 'Solution::solution')) {
        $code = preg_replace(
            '/(Implement[^\n]+\n)/',
            "$1\nCall the solution with `Solution::solution(...)`.\n",
            $code,
            1
        );
    }

    if ($code !== $original) {
        file_put_contents($path, $code);
    }
}

$phpConverted = 0;
$jsConverted = 0;
$testsUpdated = 0;
$readmesUpdated = 0;

foreach ($taskDirs as $task) {
    $taskDir = $root . '/' . $task;
    $phpFile = findPhpFile($taskDir);
    if ($phpFile !== null) {
        $phpCode = file_get_contents($phpFile);
        if ($phpCode !== false) {
            $newPhp = convertPhpToSolution($phpCode);
            if ($newPhp !== $phpCode) {
                file_put_contents($phpFile, $newPhp);
                $phpConverted++;
            }
        }
    }

    $jsFile = findJsFile($taskDir);
    if ($jsFile !== null) {
        $jsCode = file_get_contents($jsFile);
        if ($jsCode !== false) {
            $newJs = convertJsToSolution($jsCode);
            if ($newJs !== $jsCode) {
                file_put_contents($jsFile, $newJs);
                $jsConverted++;
            }
        }
    }

    foreach (glob($taskDir . '/*Test.php') ?: [] as $testFile) {
        updateTestFile($testFile);
        $testsUpdated++;
    }

    $readme = $taskDir . '/README.md';
    if (is_file($readme)) {
        updateReadme($readme);
        $readmesUpdated++;
    }
}

echo "PHP converted: $phpConverted\n";
echo "JS converted: $jsConverted\n";
echo "Tests touched: $testsUpdated\n";
echo "READMEs touched: $readmesUpdated\n";
