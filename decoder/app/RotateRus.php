<?php


namespace App;


class RotateRus extends Rotate
{
    public static function rotate($text, $num, $minus)
    {
        $alphaLow = ['а', 'б', 'в', 'г', 'д', 'е',
            'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о',
            'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш',
            'щ', 'ь', 'ы', 'ъ', 'э', 'ю', 'я'];
        $alphaHigh = ['А', 'Б', 'В', 'Г', 'Д', 'Е',
            'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р',
            'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ь', 'Ы', 'Ъ', 'Э', 'Ю', 'Я'];

        $rot = abs($num);
        while ($rot >= count($alphaLow) - 1) {
            $rot -= count($alphaLow) - 1;
        }
        //mb_regex_encoding('UTF-8');
        //mb_internal_encoding("UTF-8");
        $textArray = preg_split('/(?<!^)(?!$)/u', $text);

        if ($minus) {
        $result = parent::decode($rot, $textArray, $alphaLow, $alphaHigh);
        } else {
        $result = parent::encode($rot, $textArray, $alphaLow, $alphaHigh);
    }


        return implode('', $result);


    }
}
