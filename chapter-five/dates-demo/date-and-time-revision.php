<?php

const HTML_BR = '<br>';

echo date('Y') . HTML_BR;
echo date('H:i') . HTML_BR;
echo date('d F Y, h:i:s A') . HTML_BR;

echo time() . HTML_BR;

$timestamp = strtotime('last day of December');
echo date('Y-m-d', $timestamp) . HTML_BR;
echo date('Y-m-d', strtotime('+ 2 days')) . HTML_BR;

$tz = date_default_timezone_get();
echo $tz . HTML_BR;

echo 'The time in ' . date_default_timezone_get() . ' is ' . date('H:i:s') . HTML_BR;
date_default_timezone_set('Asia/Damascus');
echo 'The time in ' . date_default_timezone_get() . ' is ' . date('H:i:s') . HTML_BR;

$time = mktime(0, 0, 0, 4, 15, 2021);
echo date('Y-m-d H:i:s', $time) . HTML_BR;

?>