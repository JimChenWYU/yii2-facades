<?php
$header = <<<EOF

Facades for Yii 2

(c) JimChen <imjimchen@163.com>

@see       https://github.com/JimChenWYU/yii2-facades
@copyright Copyright (c) 2016-2017 Sergey Makinen (https://makinen.ru)
@license   https://github.com/JimChenWYU/yii2-facades/blob/master/LICENSE The MIT License
EOF;

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@Psr2' => true,
        'header_comment' => array('header' => $header),
        'array_syntax' => array('syntax' => 'short'),
        'ordered_imports' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'php_unit_construct' => true,
        'php_unit_strict' => true,
    ))
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('vendor')
            ->in(__DIR__)
    )
;