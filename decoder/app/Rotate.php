<?php


namespace App;

use function Stringy\create as s;

class Rotate
{
    private $rotNum, $alphabet, $text, $minus;

    public function __construct($text, $rotNum, $lang, $minus = False)
    {
        $this->rotNum = $rotNum;
        $this->text = $text;
        $this->minus = $minus;

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
    private function rotateNum()
    {
        $count = $this->alphabet->getCountAlphabet();
        if ($this->minus) {
            return $count - $this->rotNum;
        }
        else {
            return $this->rotNum;
        }
    }

    public function decode()
    {
        $result = [];
        $alphabet = $this->alphabet;
        $textArray = s($this->text)->chars();
        $rot = $this->rotateNum();
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
