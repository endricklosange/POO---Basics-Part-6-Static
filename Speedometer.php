<?php


class Speedometer
{
    public const MILES = 1.609;
    public const KM = 0.6215;

    public static function kmconvert($number)
    {
        return $number * self::MILES;
    }
    public static function milesconvert($number)
    {
        return $number * self::KM;
    }
}

