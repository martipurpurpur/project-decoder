<?php


namespace App;


class RotateEng extends Rotate
{
    public static function rotate($text, $num, $minus)
    {
        $alphaLow = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h',
            'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r',
            's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        $alphaHigh = ['A', 'B', 'C', 'D', 'E', 'F',
            'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q',
            'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'P', ];

        $rot = abs($num);
        while ($rot >= count($alphaLow) - 1) {
            $rot -= count($alphaLow) - 1;
        }

        $textArray = str_split($text);

        if ($minus) {
            $result = parent::decode($rot, $textArray, $alphaLow, $alphaHigh);
        } else {
            $result = parent::encode($rot, $textArray, $alphaLow, $alphaHigh);
        }


        return implode('', $result);
    }


}
