<?php

namespace GustavoSantarosa\EnumBasicsExtension;

abstract class BaseEnum
{
    private static $constCacheArray;

    public static function getConstants()
    {
        if (null == self::$constCacheArray) {
            self::$constCacheArray = [];
        }
        $calledClass = get_called_class();
        if (!array_key_exists($calledClass, self::$constCacheArray)) {
            $reflect                             = new \ReflectionClass($calledClass);
            self::$constCacheArray[$calledClass] = $reflect->getConstants();
        }

        return self::$constCacheArray[$calledClass];
    }

    public static function isValidName($name, $strict = false)
    {
        $constants = self::getConstants();

        if ($strict) {
            return array_key_exists($name, $constants);
        }

        $keys = array_map('strtolower', array_keys($constants));

        return in_array(strtolower($name), $keys);
    }

    public static function isValidValue($value, $strict = true)
    {
        $values = array_values(self::getConstants());

        return in_array($value, $values, $strict);
    }

    /**
     * Filters constants that start with string.
     */
    public static function filterConstants(string $startWithStr): array
    {
        return array_filter(static::getConstants(), static fn($key) => 0 === mb_strpos($key, $startWithStr), \ARRAY_FILTER_USE_KEY);
    }

    /**
     * Return available types.
     */
    public static function types(): array
    {
        return static::filterConstants('TYPE');
    }

    /**
     * Return available statuses.
     */
    public static function statuses(): array
    {
        return static::filterConstants('STATUS');
    }

    /**
     * Return available sources.
     */
    public static function sources(): array
    {
        return static::filterConstants('SOURCE');
    }
}
