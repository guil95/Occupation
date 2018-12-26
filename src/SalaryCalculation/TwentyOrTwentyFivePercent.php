<?php
namespace App\SalaryCalculation;

class TwentyOrTwentyFivePercent implements SalaryCalculationInterface
{
    public function calculate(float $salary): float
    {
        if($salary >= 4000){
            return $salary * 0.75;
        }

        return $salary* 0.80;
    }
}