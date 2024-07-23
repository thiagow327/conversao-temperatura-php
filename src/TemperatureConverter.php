<?php

namespace Thiagow327\ConverteTemperatura;

class ConverteTemperatura
{
    public function converter($temperatura, $unidade)
    {
        if ($unidade === 'C') {
            $fahrenheit = ($temperatura * 9 / 5) + 32;
            return $fahrenheit;
        } elseif ($unidade === 'F') {
            $celsius = ($temperatura - 32) * 5 / 9;
            return $celsius;
        } else {
            throw new \InvalidArgumentException('Unidade inválida, insira "C" para Celsius, ou "F" para Fahrenheit.');
        }
    }
}
