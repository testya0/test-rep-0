<?php


namespace TestYa0;

/**
 * Class Helper
 * @deprecated
 * @package TestYa0
 */
class Helper
{
    const VERSION = '0.0.4';

    public static function show($text)
    {
        echo $text;
    }

    public static function version()
    {
        return self::VERSION;
    }
}