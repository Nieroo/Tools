<?php

namespace Nieroo\Tools\Math;

/**
 * Class Math
 * @package Nieroo\Tools\Math
 */
class Math
{
    /**
     * @param mixed $value
     * @return bool
     */
    public static function isPositiveInteger($value)
    {
        return is_int($value) && $value > 0;
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isPositiveNumeric($value)
    {
        return is_numeric($value) && $value > 0;
    }
}
