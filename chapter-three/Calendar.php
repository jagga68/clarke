<?php

define('YEAR', 2021);

class Calendar {

    public string $name;
    public $seasons = ['Spring', 'Summer', 'Autumn', 'Winter'];
    public float $weeksInTheYear = 365 / 7;
    public int $year = YEAR;

    public const MONTHS_IN_YEAR = 12;
    public static $daysInFebruary = 28;
    public static $count = 0;

    public function __construct(){
        self::$count++;
    }

    public function getMonthsInYear(){
        return self::MONTHS_IN_YEAR;
    }


}

$calendar = new Calendar();
$calendar2 = new Calendar();
$calendar3 = new Calendar();

$calendar->name = 'Year Planner';
// $calendar->year = 'dwa zero dwa jeden';  // this cause type error

print $calendar->name . '<br>';
print Calendar::$count  . '<br>';
print_r($calendar->seasons);
print $calendar->weeksInTheYear . '<br>';


?>