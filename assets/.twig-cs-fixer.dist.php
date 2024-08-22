<?php

use Drupal\Core\Template\TwigTransTokenParser;

$config = new TwigCsFixer\Config\Config();
$finder = (new TwigCsFixer\File\Finder())
  ->in('./web/themes/custom');

$config
  ->setFinder($finder)
  ->setCacheFile(null)
  ->addTokenParser(new TwigTransTokenParser())
  ->setRuleset(
    (new TwigCsFixer\Ruleset\Ruleset())
      ->addStandard(new TwigCsFixer\Standard\TwigCsFixer())
);

return $config;
