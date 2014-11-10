<?php

header('Content-type: text/html; charset=UTF-8');

define('ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

include ROOT.DS.'vendor'.DS.'autoload.php';

use Core\IoC\IoC2 as Di;

$di = new Di();

$di->b = function(){
    $b = new \Core\Classes\B(new \Core\Classes\A());
    return $b;
};

$di->c = function() {
    $c = new \Core\Classes\C();
    $c->setA(new \Core\Classes\A);
    $c->setB(new \Core\Classes\B(new \Core\Classes\A));

    return $c;
};

$b = $di->b;
$c = $di->c;

echo '<pre>';
var_dump($b->getA()->getA());
var_dump($b->getB());
var_dump($c->getB()->getB());
var_dump($c->getA()->getA());
var_dump($c->getC());