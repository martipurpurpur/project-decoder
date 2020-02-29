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
                if ($searchLow >= $count) {
                    $searchLow -= $count;
                }
                $result[] = $alphaLow[$searchLow];
            } elseif ($searchHigh) {
                $searchHigh += $rot;
                if ($searchHigh >= $count) {
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
        $count = count($alphaLow) - 1;
        for ($i = 0; $i < count($textArray); $i++)
        {
            $searchLow = array_search($textArray[$i], $alphaLow);
            $searchHigh = array_search($textArray[$i], $alphaHigh);
            if ($searchLow) {
                $searchLow -= $rot;
                if ($searchLow >= $count) {
                    $searchLow -= $count;
                }
                $result[] = $alphaLow[$searchLow];
            } elseif ($searchHigh) {
                $searchHigh -= $rot;
                if ($searchHigh >= $count) {
                    $searchHigh -= $count;
                }
                $result[] = $alphaHigh[$searchHigh];
            } else {
                $result[] = $textArray[$i];
            }
        }
        return $result;
    }
}
