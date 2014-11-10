<?php

header('Content-type: text/html; charset=UTF-8');

define('ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

include ROOT.DS.'vendor'.DS.'autoload.php';

use Zend\Di\Di as Di;

$di = new Di();

$di->configure(
    new Zend\Di\Config([
        'definition'=>[
            'class'=>[
                'Core\Classes\C'=>[
                    'setA'=>['required'=>true],
                    'setB'=>['required'=>true],
                ]
            ]
        ]
    ])
);


$c = $di->get('Core\Classes\C');

/*$c = new Core\Classes\C();
$a = new A();
$b = new B($a);
$c->setA($a);
$c->setB($b)*/

echo '<pre>';
var_dump($c->getB()->getB());
var_dump($c->getA()->getA());
var_dump($c->getC());