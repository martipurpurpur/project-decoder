<?php


namespace App;


class English
{
    private const ALPHABET = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h',
            'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r',
            's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    private const COUNT = 26;

    public function __construct()
    {

    }
    public function  getCountAlphabet ()
    {
        return self::COUNT;
    }

    public function getIndexInAlphabet ($symbol)
    {
        return array_search($symbol, self::ALPHABET);
    }

    public function getCharFromAlphabet ($index)
    {
        return self::ALPHABET[$index];
    }

}
