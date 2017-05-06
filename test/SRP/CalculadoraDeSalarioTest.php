<?php

require __DIR__ . "/../../vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use Amc\Solid\SRP\Funcionario;
use Amc\Solid\SRP\Desenvolvedor;
use Amc\Solid\SRP\CalculadoraDeSalario;
use Amc\Solid\SRP\Dba;

class CalculadoraDeSalarioTest extends TestCase
{
    public function testCalculoDeSalario()
    {
        $funcionario = new Funcionario();
        $funcionario->setNome('Alex Moreno');
        $funcionario->setDataAdmisao(new \DateTime('now'));

        $funcionario->setCargo(new Desenvolvedor());

        $funcionario->setSalario(1500);
        $valor = $this->calcularSalarioParaOFuncionario($funcionario);
        $this->assertEquals(1350,$valor);

        $funcionario->setSalario(4000);
        $valor = $this->calcularSalarioParaOFuncionario($funcionario);
        $this->assertEquals(3200,$valor);

        $funcionario->setCargo(new Dba());

        $funcionario->setSalario(1500);
        $valor = $this->calcularSalarioParaOFuncionario($funcionario);
        $this->assertEquals(1275,$valor);

        $funcionario->setSalario(4000);
        $valor = $this->calcularSalarioParaOFuncionario($funcionario);
        $this->assertEquals(3000,$valor);
    }

    private function calcularSalarioParaOFuncionario(Funcionario $funcionario)
    {
        $calculadora = new CalculadoraDeSalario();
        return $calculadora->calcula($funcionario);
    }
}