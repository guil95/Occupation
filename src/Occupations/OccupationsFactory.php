<?php
namespace App\Occupations;
use App\SalaryCalculation\FifteenOrTwentyFivePercent;
use App\SalaryCalculation\TenOrTwentyPercent;

class OccupationsFactory
{
    public static function getOccupation(string $occupation)
    {
        switch ($occupation){
            case 'developer':
                return new Developer(new FifteenOrTwentyFivePercent());
            case 'tester':
                return new Tester(new TenOrTwentyPercent());
        }
    }
}