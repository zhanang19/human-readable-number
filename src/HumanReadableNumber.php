<?php

namespace Zhanang19\HumanReadableNumber;

class HumanReadableNumber
{
    /**
     * Return human readable number.
     *
     * @param mixed $number
     * @return string
     */
    public static function format($number)
    {
        $number = (float)$number;
        if ($number >= 0 && $number < 1000) {
            $suffix = '';
            $number = floor($number);
        } elseif ($number >= 1000 && $number < 1000000) {
            $suffix = 'K+';
            $number = floor($number / 1000);
        } elseif ($number >= 1000000 && $number < 1000000000) {
            $suffix = 'M+';
            $number = floor($number / 1000000);
        } elseif ($number >= 1000000000 && $number < 1000000000000) {
            $suffix = 'B+';
            $number = floor($number / 1000000000);
        } else {
            $suffix = 'T+';
            $number = floor($number / 1000000000000);
        }

        return (string)$number . $suffix;
    }
}
