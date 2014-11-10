<?php
/**
 * Created by Erik Figueiredo.
 * Email: falecom@erikfigueiredo.com.br
 * Date: 10/11/14
 * Time: 12:46
 */

namespace Core\IoC;


class IoC1
{
    private $registro;

    public function registra($nome, $metodo)
    {
        $this->registro[$nome] = $metodo;
    }

    public function requisita($nome)
    {
        return $this->registro[$nome]();
    }

    public function registros()
    {
        return $this->registro;
    }
} 