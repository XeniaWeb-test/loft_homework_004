<?php


namespace Interfaces;


interface RateInterface
{
    public const MIN_AGE = 18;
    public const MAX_AGE = 65;
    public const STUDENT_AGE = 25;
    public const YOUNG_AGE = 21;
    public const DRIVER_PRICE = 100;
    public const YOUNG_INDEX = 1.1;

    public function calculatePrice();
}