<?php

use Zhanang19\HumanReadableNumber\HumanReadableNumber;

if (!function_exists('readableNumber')) {
    /**
     * Return a human readable number.
     * @param mixed $number
     * @return string
     */
    function readableNumber($number)
    {
        return HumanReadableNumber::format($number);
    }
}
