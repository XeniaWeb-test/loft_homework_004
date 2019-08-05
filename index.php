<?php
include "src/Interfaces/RateInterface.php";
include "src/Classes/AbstractRate.php";
include "src/Classes/RateBase.php";

use Classes\RateBase;

$order = new RateBase(19, 20,20, true);
$order->checkAge();
$order->calculatePrice();
//$order->setPriceTime(10);
$order->calculatePrice();
