<?php

namespace Classes;

use Interfaces\RateInterface;

abstract class AbstractRate implements RateInterface
{
//    protected $priceDistance;
//    protected $priceTime;
    protected $age;
    protected $distance;
    protected $duration;
    protected $needDriver;
    protected $youngFactor;

//    public function __construct(int $age, int $distance, int $duration, bool $needDriver, int $priceDistance, int $priceTime)
    public function __construct(int $age, int $distance, int $duration, bool $needDriver)
    {
//        $this->priceDistance = $priceDistance;
//        $this->priceTime = $priceTime;
        $this->age = $age;
        $this->distance = $distance;
        $this->duration = $duration;
        $this->needDriver = $needDriver;
    }

    public function checkAge() {
        if ($this->age < self::MIN_AGE) {
            echo "Вы слишком молоды, вам нельзя за руль!";
            die;
        } elseif ($this->age > self::MAX_AGE) {
            echo "Вы слишком старый, вам нельзя за руль!";
            die;
        } elseif ($this->age < self::YOUNG_AGE) {
            $this->youngFactor = true;
        }
        echo "В добрый путь!";
    }
}