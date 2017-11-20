<?php
/**
 * Created by PhpStorm.
 * User: yg
 * Date: 11/20/17
 * Time: 12:38 PM
 */

namespace PHPDIExample;


use DI\Annotation\Inject;

class TestClass1
{

    private $property1;

    /**
     * @Inject
     * @var InjectableClassExample
     */
    private $injectedClass;

    /**
     * @return mixed
     */
    public function getProperty1()
    {
        return $this->property1;
    }

    /**
     * @param mixed $property1
     */
    public function setProperty1($property1)
    {
        $this->property1 = $property1;
    }

    /**
     * @return InjectableClassExample
     */
    public function getInjectedClass(): InjectableClassExample
    {
        return $this->injectedClass;
    }

    /**
     * @param InjectableClassExample $injectedClass
     */
    public function setInjectedClass(InjectableClassExample $injectedClass)
    {
        $this->injectedClass = $injectedClass;
    }

}