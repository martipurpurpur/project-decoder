<?php


namespace App;


class Rotate
{

    protected static function encode($rot, $textArray, $alphaLow, $alphaHigh)
    {
        $result = [];
        $count = count($alphaLow) - 1;
        for ($i = 0; $i < count($textArray); $i++)
        {
            $searchLow = array_search($textArray[$i], $alphaLow);
            $searchHigh = array_search($textArray[$i], $alphaHigh);
            if ($searchLow) {
                $searchLow += $rot;
                while ($searchLow >= $count) {
                    $searchLow -= $count;
                }
                $result[] = $alphaLow[$searchLow];
            } elseif ($searchHigh) {
                $searchHigh += $rot;
                while ($searchHigh >= $count) {
                    $searchHigh -= $count;
                }
                $result[] = $alphaHigh[$searchHigh];
            } else {
                $result[] = $textArray[$i];
            }
        }
        return $result;
    }
    protected static function decode($rot, $textArray, $alphaLow, $alphaHigh)
    {
        $result = [];
        $count = count($alphaLow);
        for ($i = 0; $i < count($textArray); $i++)
        {
            $searchLow = array_search($textArray[$i], $alphaLow);
            $searchHigh = array_search($textArray[$i], $alphaHigh);
            if ($searchLow) {
                $searchLow -= abs($rot);
                while ($searchLow < 0) {
                    $searchLow += $count;
                }
                $result[] = $alphaLow[$searchLow];
            } elseif ($searchHigh) {
                $searchHigh -= abs($rot);
                while ($searchHigh < 0) {
                    $searchHigh += $count;
                }
                $result[] = $alphaHigh[$searchHigh];
            } else {
                $result[] = $textArray[$i];
            }
        }
        return $result;
    }
}
