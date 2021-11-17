<?php

namespace Hackathon\LevelC;

class RotationString
{
    /**
     * @TODO ! BAM
     *
     * @param $s1
     * @param $s2
     *
     * @return bool|int
     */
    public static function isRotation($s1, $s2)
    {
        $pivot = $s2[0];
        $array = explode($pivot, $s1, 2);
        $test = $pivot . $array[1] . $array[0];
        if (strcmp($test, $s2) === 0)
            return true;
        return false;
    }

    public static function isSubString($s1, $s2)
    {
        $pos = strpos($s1, $s2);

        return $pos;
    }
}
