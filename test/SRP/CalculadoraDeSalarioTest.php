<?php

require __DIR__ . "/../../vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use Amc\Solid\SRP\Funcionario;
use Amc\Solid\SRP\Desenvolvedor;
use Amc\Solid\SRP\Dba;
use Amc\Solid\SRP\DezOuVintePorcento;
use Amc\Solid\SRP\QuinzeOuVinteCincoPorcento;

class CalculadoraDeSalarioTest extends TestCase
{
    public function testCalculoDeSalario()
    {
        $funcionario = new Funcionario(1500, new Desenvolvedor(new DezOuVintePorcento()));
        $funcionario->setNome('Alex Moreno');
        $funcionario->setDataAdmisao(new \DateTime('now'));
        $this->assertEquals(1350,$funcionario->calcularSalario());

        $funcionario = new Funcionario(4000, new Desenvolvedor(new DezOuVintePorcento()));
        $funcionario->setNome('Alex Moreno');
        $funcionario->setDataAdmisao(new \DateTime('now'));
        $this->assertEquals(3200,$funcionario->calcularSalario());

        $funcionario = new Funcionario(1500, new Dba(new QuinzeOuVinteCincoPorcento()));
        $funcionario->setNome('Alex Moreno');
        $funcionario->setDataAdmisao(new \DateTime('now'));
        $this->assertEquals(1275,$funcionario->calcularSalario());

        $funcionario = new Funcionario(4000, new Dba(new QuinzeOuVinteCincoPorcento()));
        $funcionario->setNome('Alex Moreno');
        $funcionario->setDataAdmisao(new \DateTime('now'));
        $this->assertEquals(3000,$funcionario->calcularSalario());
    }
}