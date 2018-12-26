<?php
require_once("../vendor/autoload.php");
use App\Occupations\OccupationsFactory;

$developer = OccupationsFactory::getOccupation('developer');
$developer->setSalaryBase(3100);

$tester = OccupationsFactory::getOccupation('tester');
$tester->setSalaryBase(3500);

print_r([
    'Developer Salary' => $developer->getSalaryCalculate(),
    'Tester Salary' => $tester->getSalaryCalculate(),
]);