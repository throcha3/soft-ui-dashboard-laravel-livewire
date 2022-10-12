<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$rules = [
    '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        'not_operator_with_successor_space' => true,
        'no_extra_blank_lines' => [
            'tokens' => [
                'curly_brace_block',
                'extra',
                'parenthesis_brace_block',
                'throw',
                'use',
            ],
        ],
        'no_unused_imports' => true,
        'ordered_imports' => true,
        'ternary_operator_spaces' => true,
        'single_blank_line_before_namespace' => true,

        // PSR-12
        'blank_line_after_opening_tag' => true,
        'braces' => ['allow_single_line_closure' => true],
        'compact_nullable_typehint' => true,
        'concat_space' => ['spacing' => 'one'],
        'declare_equal_normalize' => ['space' => 'none'],
        'function_typehint_space' => true,
        'new_with_braces' => true,
        'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'],
        'no_empty_statement' => true,
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_whitespace_in_blank_line' => true,
        'return_type_declaration' => ['space_before' => 'none'],
        'single_trait_insert_per_statement' => true,
        'align_multiline_comment' => true,
        'no_null_property_initialization' => true,
        'no_spaces_around_offset' => true,
        'single_space_after_construct' => true
];

$finder = new Finder();

$finder->in([
    __DIR__ . '/app',
    __DIR__ . '/database',
    __DIR__ . '/tests',
]);

$config = new Config();

$config->setIndent('    ');

$config
    ->setRiskyAllowed(false)
    ->setRules($rules)
    ->setFinder($finder);

return $config;