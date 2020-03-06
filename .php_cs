<?php
$header = <<<EOF
This file is part of the leamiko/weather.

(c) leamiko <leamiko@qq.com>

This source file is subject to the MIT license that is bundled.
EOF;

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@Symfony' => true,
        'header_comment' => array('header' => $header),
        'array_syntax' => array('syntax' => 'short'),
        'ordered_imports' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'php_unit_construct' => true,
        'php_unit_strict' => true,
        'single_quote'                               => true, //简单字符串应该使用单引号代替双引号；
        'no_unused_imports'                          => true, //删除没用到的use
        'no_singleline_whitespace_before_semicolons' => true, //禁止只有单行空格和分号的写法；
        'self_accessor'                              => true, //在当前类中使用 self 代替类名；
        'no_empty_statement'                         => true, //多余的分号
        'no_extra_consecutive_blank_lines'           => true, //多余空白行
        'no_blank_lines_after_class_opening'         => true, //类开始标签后不应该有空白行；
        'include'                                    => true, //include 和文件路径之间需要有一个空格，文件路径不需要用括号括起来；
        'no_trailing_comma_in_list_call'             => true, //删除 list 语句中多余的逗号；
        'no_leading_namespace_whitespace'            => true, //命名空间前面不应该有空格；
        // 'binary_operator_spaces'                     => ['default' => 'align_single_space'] //等号对齐、数字箭头符号对齐
    ))
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('vendor')
            ->in(__DIR__)
    )
;