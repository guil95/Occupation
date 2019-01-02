<?php
require_once("../vendor/autoload.php");

use App\Occupations\OccupationsFactory;


$developer = OccupationsFactory::getOccupation(\App\Occupations\Occupation::DEVELOPER);
$developer->setSalaryBase(2900);

$tester = OccupationsFactory::getOccupation(\App\Occupations\Occupation::TESTER);
$tester->setSalaryBase(2500);

$dba = OccupationsFactory::getOccupation(\App\Occupations\Occupation::DBA);
$dba->setSalaryBase(4500);

die("<pre>" . __FILE__ . " - " . __LINE__ . "\n" . print_r([
    'Developer Salary' => $developer->getSalaryCalculate(),
    'Tester Salary' => $tester->getSalaryCalculate(),
    'DBA Salary' => $dba->getSalaryCalculate(),
        ], true) . "</pre>");