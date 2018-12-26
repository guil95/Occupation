<?php
namespace App\SalaryCalculation;

class TenOrTwentyPercent implements SalaryCalculationInterface
{
    public function calculate(float $salary): float
    {
        if($salary >= 3000){
            return $salary * 0.8;
        }

        return $salary * 0.9;
    }
}