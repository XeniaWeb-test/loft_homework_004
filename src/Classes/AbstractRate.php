<?php

namespace App\Classes;

use App\Interfaces\Age;
use App\Interfaces\RateInterface;
use Exception;

abstract class AbstractRate implements RateInterface
{
    protected $age;
    protected $distance;
    protected $duration;
    protected $needDriver;
    protected $youngFactor;
    public function __construct(int $age, int $distance, int $duration, bool $needDriver)
    {
        $this->age = $age;
        $this->checkAge();
        $this->distance = $distance;
        $this->duration = $duration;
        $this->needDriver = $needDriver;
    }


    /**
     * @throws Exception
     */
    protected function checkAge() {
        if ($this->age < Age::MIN) {
            throw new Exception('Вы слишком молоды, вам нельзя за руль!');
        }
        if ($this->age > Age::MAX) {
            throw new Exception('Вы слишком старый, вам нельзя за руль! Отдыхайте.');
        }
        if ($this->age < Age::YOUNG) {
            $this->youngFactor = true;
        }
    }
}