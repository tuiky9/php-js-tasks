<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tests/Support/FunctionLoader.php';

final class PhpDocTransformTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        FunctionLoader::load(__DIR__ . '/php/phpDoc_transform.php', 'transformPhpDocVariables');
    }

    #[DataProvider('provideCases')]
    public function testTransformPhpDocVariables(string $input, string $expected): void
    {
        self::assertSame($expected, transformPhpDocVariables($input));
    }

    public static function provideCases(): array
    {
        return [
            'readme single param' => [
                "/**\n * @param string \$user_name\n * @return void\n */",
                "/**\n * @param string \$userName\n * @return void\n */",
            ],
            'readme multiple tags' => [
                "/**\n * @param int \$order_id\n * @param string \$customer_email\n * @var array \$line_items\n */",
                "/**\n * @param int \$orderId\n * @param string \$customerEmail\n * @var array \$lineItems\n */",
            ],
            'readme description variables' => [
                "/**\n * Compare \$old_value with \$new_value.\n */",
                "/**\n * Compare \$oldValue with \$newValue.\n */",
            ],
            'no underscores unchanged' => [
                "/**\n * @param string \$name\n */",
                "/**\n * @param string \$name\n */",
            ],
            'multi segment snake case' => [
                "/**\n * @param string \$http_request_id\n */",
                "/**\n * @param string \$httpRequestId\n */",
            ],
            'preserves spacing and trailing comment' => [
                "/**\n * @param string \$user_name  Optional comment.\n * @return bool\n */",
                "/**\n * @param string \$userName  Optional comment.\n * @return bool\n */",
            ],
            'multiple variables one line' => [
                "/** @param int \$src_id @param int \$dst_id */",
                "/** @param int \$srcId @param int \$dstId */",
            ],
            'digits inside segments' => [
                "/**\n * @var string \$api_v2_key\n */",
                "/**\n * @var string \$apiV2Key\n */",
            ],
            'empty docblock unchanged' => [
                "/**\n * @return void\n */",
                "/**\n * @return void\n */",
            ],
            'plain string without variables' => [
                'No variables here.',
                'No variables here.',
            ],
        ];
    }
}
