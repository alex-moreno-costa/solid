<?php

namespace Amc\Solid\SRP;

use Amc\Solid\SRP\Funcionario;

interface CalcularImpostoInterface
{
    public function calcular(Funcionario $funcionario);
}