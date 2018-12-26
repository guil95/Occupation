<?php
namespace App\SalaryCalculation;

class FifteenOrTwentyFivePercent implements SalaryCalculationInterface
{
    public function calculate(float $salary): float
    {
        if($salary >= 3000){
            return $salary * 0.75;
        }

        return $salary* 0.85;
    }
}