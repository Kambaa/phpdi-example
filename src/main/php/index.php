<?php
/**
 * Created by PhpStorm.
 * User: yg
 * Date: 11/20/17
 * Time: 12:38 PM
 */

use PHPDIExample\TestClass1;

require_once __DIR__ . '/../../../vendor/autoload.php';


$builder = new \DI\ContainerBuilder();
$builder->useAutowiring(false);
$builder->useAnnotations(true);
$builder->setDefinitionCache(new Doctrine\Common\Cache\ArrayCache());
$container = $builder->build();

$t1 = $container->get(TestClass1::class);
var_dump($t1->getInjectedClass());