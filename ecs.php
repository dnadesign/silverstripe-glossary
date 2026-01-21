<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\FunctionNotation\NativeFunctionInvocationFixer;
use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use PhpCsFixer\Fixer\Import\OrderedImportsFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withPaths([
        __DIR__ . '/_config.php',
        __DIR__ . '/src',
    ])
    ->withPhpCsFixerSets(perCS30: true)
    ->withConfiguredRule(OrderedImportsFixer::class, [])
    ->withConfiguredRule(NativeFunctionInvocationFixer::class, [])
    ->withRules([NoUnusedImportsFixer::class]);
