<?php


namespace Classes;


class RateDay extends AbstractRate
{

    public function calculatePrice()
    {
        $totalPrise = $this->distance * self::DISTANCE_PRICE_DAY + $this->duration * self::TIME_PRICE_DAY;
        if ($this->youngFactor) {
            $totalPrise *= self::YOUNG_INDEX;
        }
        if ($this->needDriver) {
            $totalPrise += self::DRIVER_PRICE;
        }
        echo 'Оплатите в кассу ' . $totalPrise . ' рублей.';
    }
}