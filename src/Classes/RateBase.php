<?php

namespace Classes;

class RateBase extends AbstractRate

{
//    protected $priceDistance = self::DISTANCE_PRICE_BASIC;
//    protected $priceTime = self::TIME_PRICE_BASIC;

    public function calculatePrice()
    {
//        $totalPrise = $this->distance * $this->priceDistance + $this->duration * $this->priceTime;

        $totalPrise = $this->distance * self::DISTANCE_PRICE_BASIC + $this->duration * self::TIME_PRICE_BASIC;
        if ($this->youngFactor) {
            $totalPrise *= self::YOUNG_INDEX;
        }
        if ($this->needDriver) {
            $totalPrise += self::DRIVER_PRICE;
        }
        echo 'Оплатите в кассу ' . $totalPrise . ' рублей.';
    }

}