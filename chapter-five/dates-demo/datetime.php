<?php

require_once 'vendor/autoload.php';

// $dateTime = new DateTime();
// dd($dateTime);
// dd($dateTime->format('Y-m-d'));

// $dateTime = new DateTime('2022-10-23');
// dd($dateTime->format('Y-m-d'));

// $dateTime = new DateTime('last day of May');
// dd($dateTime->format('Y-m-d'));

// $dateTime = new DateTime('last day of May');
// dd($dateTime->format(DateTime::ISO8601));

// $today = date_create('today');
// $nextWeek = date_create('next week');

// dd($nextWeek > $today);
// dd($nextWeek == $today);

// $dateTime = DateTime::createFromFormat('j-M-Y', '21-Jan-2020');
// dd($dateTime);

$past = date_create('1999-12-31');
$present = date_create();
$interval = $present->diff($past);
// dd($interval);
// dd($interval->days);

// $years = $interval->y;
// if ($interval->invert) {
//     $years = -$interval->y;
// }

// dd($years);

// dd((int) $interval->format('%r%Y'));

// $interval = date_diff($present, $past);
// dd("$interval->y years, $interval->m months, $interval->d days");

// $interval = new DateInterval('P21Y3M15D');
// dd($interval);
// dd($past->add($interval));

// $plusThreeDays = new DateInterval('P3D');
// $present->add($plusThreeDays);
// $present->sub($plusThreeDays);

// $plusThreeDays = new DateInterval('P3D');
// $plusThreeDays->invert = 1;
// $present->add($plusThreeDays);
// dd($present->format('Y-m-d'));

// $interval = date_interval_create_from_date_string('-5 days');
// dd($interval);

// $date = $present->modify('-15 days -3 hours')->format('ga jS M Y');
// dd($date);

$start = new DateTimeImmutable('2021-01-01');
$finish = $start->add(new DateInterval('P3D'));
// dd($start->format('Y-m-d'));

$bamako = new DateTime('now', new DateTimeZone('Asia/Chita'));
$utc = new DateTime('now', new DateTimeZone('UTC'));

dd($bamako, $utc);


?>