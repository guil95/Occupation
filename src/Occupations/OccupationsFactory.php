<?php
namespace App\Occupations;
use App\SalaryCalculation\FifteenOrTwentyFivePercent;
use App\SalaryCalculation\TenOrTwentyPercent;
use App\SalaryCalculation\TwentyOrTwentyFivePercent;

class OccupationsFactory
{
    public static function getOccupation(string $occupation)
    {
        switch ($occupation){
            case Occupation::DEVELOPER:
                return new Developer(new FifteenOrTwentyFivePercent());
            case Occupation::TESTER:
                return new Tester(new TenOrTwentyPercent());
            case Occupation::DBA:
                return new DBA(new TwentyOrTwentyFivePercent());
        }
    }
}