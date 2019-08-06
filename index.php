<?php
include "src/Interfaces/AgeInterface.php";
include "src/Interfaces/PriceDistanceInterfaces.php";
include "src/Interfaces/PriceExtraInterface.php";
include "src/Interfaces/PriceTimeInterface.php";
include "src/Interfaces/RateInterface.php";
include "src/Classes/AbstractRate.php";
include "src/Classes/RateBase.php";

use App\Classes\RateBase;

$order = new RateBase(15, 20,2000, true);
$order->calculatePrice();
