<?php

namespace App;

class ObjectPro
{
    public static function separately(object $creature): array
    {
        $properties = get_object_vars($creature);
        ksort($properties);
        return [array_keys($properties), array_values($properties)];
    }
}