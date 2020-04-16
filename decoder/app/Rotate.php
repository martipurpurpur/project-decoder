<?php


namespace App;

use function Stringy\create as s;

class Rotate
{
    private $rotNum, $alphabet, $text;

    public function __construct($text, $rotNum, $lang, $minus = False)
    {
        if ($minus) {
            $this->rotNum = - $rotNum;
        }
        else {
            $this->rotNum = $rotNum;
        }
        $this->text = $text;

        switch ($lang) {
            case 'rus':
                $this->alphabet = new Russian();
                break;
            case 'eng':
                $this->alphabet = new English();
                break;
            default:
                break;
        }


    }

    public function decode()
    {
        $result = [];
        $alphabet = $this->alphabet;
        $textArray = s($this->text)->chars();
        $rot = $this->rotNum;
        $count = $alphabet->getCountAlphabet();
        $stateSymbol = False;

        for ($i = 0; $i < count ($textArray); $i++) {

            $useSymbol = s($textArray[$i]);

            if ($useSymbol->isUpperCase()) {
                $stateSymbol = True;
                $useSymbol = $useSymbol->toLowerCase();
            }
            $index = $alphabet->getIndexInAlphabet($useSymbol);

            if ($index === False) {
                $result[] = $textArray[$i];
                continue;
            }

            $newIndex = $rot + $index;

            if ($newIndex < 0) {
                $newIndex = $count - abs($newIndex % $count);
            }
            if ($newIndex >= $count) {
                $newIndex = $newIndex % $count;
            }


            $newSymbol = $alphabet->getCharFromAlphabet($newIndex);
            if ($stateSymbol) {
                $newSymbol = s($newSymbol)->toUpperCase();
                $stateSymbol = False;
            }

            $result[] = $newSymbol;
        }

        return implode('', $result);
    }

}
