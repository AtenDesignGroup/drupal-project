<?php

$finder = (new PhpCsFixer\Finder())
  ->in(__DIR__)
  ->exclude('vendor')
  ->name('*.php')
  ->name('*.inc')
  ->name('*.module')
  ->path('./web/modules/custom')
  ->path('./web/themes/custom');

return (new PhpCsFixer\Config())
  ->setFinder($finder)
  ->setUsingCache(false)
  ->setRules([
    '@PSR12' => true,
    'array_syntax' => ['syntax' => 'short'],
    'binary_operator_spaces' => ['default' => 'align_single_space_minimal'],
    'braces' => true,
    'cast_spaces' => ['space' => 'single'],
    'concat_space' => ['spacing' => 'one'],
    'increment_style' => ['style' => 'post'],
    'linebreak_after_opening_tag' => true,
    'lowercase_keywords' => true,
    'no_trailing_whitespace' => true,
    'blank_lines_before_namespace' => true,
    'single_quote' => true,
    'trailing_comma_in_multiline' => true,
    'whitespace_after_comma_in_array' => true,
  ]);
