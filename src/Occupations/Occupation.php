<?php
namespace App\Occupations;
use App\SalaryCalculation\SalaryCalculationInterface;

abstract class Occupation
{
    private $salary;
    public  $calc;

    public function __construct(SalaryCalculationInterface $calc)
    {
        $this->calc = $calc;
    }

    public function setSalaryBase(float $salary)
    {
        $this->salary = $salary;
    }

    public function getSalaryCalculate(): float
    {
        return $this->calc->calculate($this->salary);
    }
}