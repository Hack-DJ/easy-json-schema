<?php

namespace Djx\EasyJsonSchema\Manager;


class Util
{
    public static function isAssocArray(array $arr)
    {
        if (array() === $arr) return false;
        return array_keys($arr) !== range(0, count($arr) - 1);
    }
}
