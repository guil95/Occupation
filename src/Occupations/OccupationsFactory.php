<?php
namespace App\Occupations;
use App\SalaryCalculation\FifteenOrTwentyFivePercent;
use App\SalaryCalculation\SalaryCalculationInterface;
use App\SalaryCalculation\TenOrTwentyPercent;
use App\SalaryCalculation\TwentyOrTwentyFivePercent;

class OccupationsFactory
{
    public static function getOccupation(string $occupation)
    {
        switch ($occupation){
            case 'developer':
                return new Developer(new FifteenOrTwentyFivePercent());
            case 'tester':
                return new Tester(new TenOrTwentyPercent());
            case 'DBA':
                return new DBA(new TwentyOrTwentyFivePercent());
        }
    }
}