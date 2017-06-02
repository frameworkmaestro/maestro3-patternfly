<?php

return [
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'PatternFly Demo App',
    'import' => [
        'models.*'
    ],
    'options' => [
        'srcPath' => '/src',
        'templateEngine' => 'latte'
    ],
    'theme' => [
        'name' => 'patternfly',
        'template' => 'index'
    ],
    'login' => [
        'module' => "",
        'class' => "MAuthDbMd5",
        'check' => false
    ],
    'db' => [
    ],
    
];
