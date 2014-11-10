<?php
/**
 * Created by Erik Figueiredo.
 * Email: falecom@erikfigueiredo.com.br
 * Date: 10/11/14
 * Time: 12:38
 */

namespace Core\Classes;

class C
{
    private $a, $b;

    public function setA(A $a)
    {
        $this->a = $a;
    }

    public function setB(B $b)
    {
        $this->b = $b;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return 'Esta é a classe C';
    }
}