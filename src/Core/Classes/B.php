<?php
/**
 * Created by Erik Figueiredo.
 * Email: falecom@erikfigueiredo.com.br
 * Date: 10/11/14
 * Time: 12:29
 */

namespace Core\Classes;

class B
{
    private $a;

    public function __construct(A $a)
    {
        $this->a = new $a;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return 'Esta é a classe B';
    }
} 