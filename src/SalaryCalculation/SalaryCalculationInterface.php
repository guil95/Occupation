<?php
namespace App\SalaryCalculation;

interface SalaryCalculationInterface
{
    public function calculate(float $salary):float;
}