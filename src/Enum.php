<?php

namespace MichielKempen\LaravelEnum;

use ReflectionClass;
use ReflectionException;

abstract class Enum
{
    public static function all(): array
    {
        try {
            $reflectionClass = new ReflectionClass(get_called_class());
            return $reflectionClass->getConstants();
        } catch (ReflectionException $exception) {
            return [];
        }
    }
}
