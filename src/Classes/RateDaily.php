<?php

namespace App\Classes;

use App\Interfaces\PriceDistance;
use App\Interfaces\PriceExtra;
use App\Interfaces\PriceTime;

class RateDaily extends AbstractRate
{

    public function calculatePrice()
    {
        $totalPrise = ($this->distance * PriceDistance::DAILY) + ($this->duration * PriceTime::DAILY);
        if ($this->youngFactor) {
            $totalPrise *= PriceExtra::YOUNG_INDEX;
        }
        if ($this->needDriver) {
            $totalPrise += PriceExtra::DRIVER;
        }
        echo 'Оплатите в кассу ' . $totalPrise . ' рублей.';
    }
}