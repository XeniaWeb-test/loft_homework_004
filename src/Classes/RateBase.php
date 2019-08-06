<?php

namespace App\Classes;

use App\Interfaces\PriceDistance;
use App\Interfaces\PriceExtra;
use App\Interfaces\PriceTime;


class RateBase extends AbstractRate

{
    /**
     * @return float|int
     */

    public function calcPriceDistance()
    {
        $priceDistance = $this->distance * PriceDistance::BASIC;

        return $priceDistance;
    }

    /**
     * @return float|int
     */

    public function calcPriceTime()
    {
        $priceTime = $this->duration * PriceTime::BASIC;

        return $priceTime;
    }

    /**
     * @return float|int
     */

    public function calculatePrice()
    {
        if ($this->calcPriceDistance() > $this->calcPriceTime()) {
            $totalPrise = $this->calcPriceDistance();
        } else {
            $totalPrise = $this->calcPriceTime();
        }
        if ($this->youngFactor) {
            $totalPrise *= PriceExtra::YOUNG_INDEX;
        }
        if ($this->needDriver) {
            $totalPrise += PriceExtra::DRIVER;
        }
       return $totalPrise;
    }
}