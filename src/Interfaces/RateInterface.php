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
    public const DISTANCE_PRICE_BASIC = 100;
    public const DISTANCE_PRICE_HOUR = 0;
    public const DISTANCE_PRICE_DAY = 1;
    public const DISTANCE_PRICE_STUDENT = 4;
    public const TIME_PRICE_BASIC = 3;
    public const TIME_PRICE_HOUR = 200;
    public const TIME_PRICE_DAY = 1000;
    public const TIME_PRICE_STUDENT = 1;


    public function calculatePrice();
}