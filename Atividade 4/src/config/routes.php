<?php

use Daoo\Aula03\controller\api\Atividade;
use Daoo\Aula03\controller\api\Propriedade;
use Daoo\Aula03\controller\api\Animal;

$routes = [
    'api' => [
        'atividade' => Atividade::class,
        'propriedade' => Propriedade::class,
        'animal' => Animal::class
    ]
];
