<?php
/**
 * Created by Erik Figueiredo.
 * Email: falecom@erikfigueiredo.com.br
 * Date: 10/11/14
 * Time: 12:58
 */

namespace Core\IoC;


class IoC2
{
    private $registro;

    public function __set($nome, $metodo)
    {
        $this->registro[$nome] = $metodo;
    }

    public function __get($nome)
    {
        return $this->registro[$nome]();
    }

    public function registros()
    {
        return $this->registro;
    }
} 