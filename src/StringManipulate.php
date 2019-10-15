<?php


namespace desertbynight\telnumbernormalizer;


class StringManipulate
{
    public static function toHankaku(string $string)
    {
         return mb_convert_kana($string, 'kvrn');
    }

    public static function invertPlusAndDoubleZero(string $string, $doubleZero = true)
    {
        if ($doubleZero) return str_replace('+','00', $string);
        else return str_replace('00','+', $string);
    }

    public static function stripMinus(string $string)
    {
        return str_replace('-','', $string);
    }

    public static function sanitizeNumberInt(string $string)
    {
        return filter_var($string, FILTER_SANITIZE_NUMBER_INT);
    }

}
