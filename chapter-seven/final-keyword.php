<?php

require_once './vendor/autoload.php';

class GeneralPurposeCalculator
{
    final public function calculatePercentage($part, $whole): float
    {
        return $part / $whole * 100;
    }
}

class FinanceCalculator extends GeneralPurposeCalculator
{
    // This method cannot be overwritten because final keyword in parent:
    // public function calculatePercentage($a, $b): float
    // {
    //     return $a / ($b * 100);
    // }
}

$financeCalculator = new FinanceCalculator();

$part = 5;
$whole = 15;

$result = $financeCalculator->calculatePercentage($part, $whole);

dd($result);

?>