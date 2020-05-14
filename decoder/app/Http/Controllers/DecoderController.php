<?php

namespace App\Http\Controllers;

use App\Rotate;
use Illuminate\Http\Request;

class DecoderController extends Controller
{

    public function base64(Request $request)
    {
        $this->validate($request, [
            'base' => 'max:1255',
            'text' => 'max:1255'
        ]);
        $base = $request->get('base');
        $baseAnswer = base64_encode($request->get('text'));
        $textAnswer = base64_decode($request->get('base'));

        if (!$textAnswer) {
            $textAnswer = $base;
        }

        return view('base64', ['textAnswer' => $textAnswer, 'baseAnswer' => $baseAnswer]);
    }
    public function uue(Request $request)
    {
        $this->validate($request, [
            'uue' => 'max:1255',
            'text' => 'max:1255'
        ]);
        $uue = $request->get('uue');
        $uueAnswer = convert_uuencode($request->get('text'));
        $textAnswer = @convert_uudecode($uue);

        if (!$textAnswer) {
            $textAnswer = $uue;
        }



        return view('uue', ['textAnswer' => $textAnswer, 'uueAnswer' => $uueAnswer]);
    }
    public function rot(Request $request)
    {
        $this->validate($request, [
            'num' => 'max:99',
            'num-decode' => 'max:99',
            'rot' => 'max:1255',
            'text' => 'max:1255',
        ]);

        $num = $request->get('num');
        $num_decode = $request->get('num-decode');
        $lang = $request->get('lang');

        $rotAnswer = new Rotate($request->get('rot'), $num, $lang);
        $textAnswer = new Rotate($request->get('text'), $num_decode, $lang, True);

        return view('rot', ['textAnswer' => $textAnswer->decode(), 'rotAnswer' => $rotAnswer->decode()]);
    }

}
