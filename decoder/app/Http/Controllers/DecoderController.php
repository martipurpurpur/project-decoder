<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RotateEng;
use App\RotateRus;

class DecoderController extends Controller
{

    public function base64(Request $request)
    {
        $this->validate($request, [
            'base' => 'max:1255',
            'text' => 'max:1255'
        ]);
        $textAnswer = base64_decode($request->get('base'));
        $baseAnswer = base64_encode($request->get('text'));

       return view('base64', ['textAnswer' => $textAnswer, 'baseAnswer' => $baseAnswer]);
    }
    public function uue(Request $request)
    {
        $this->validate($request, [
            'uue' => 'max:1255',
            'text' => 'max:1255'
        ]);
        $textAnswer = convert_uudecode($request->get('uue'));
        $uueAnswer = convert_uuencode($request->get('text'));

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
if ($lang == 'eng') {
    $textAnswer = RotateEng::rotate($request->get('rot'), $num, False);
    $rotAnswer = RotateEng::rotate($request->get('text'), $num_decode, True);
}
if ($lang == 'rus') {
    $textAnswer = RotateRus::rotate($request->get('rot'), $num, False);
    $rotAnswer = RotateRus::rotate($request->get('text'), $num_decode, True);
}
        return view('rot', ['textAnswer' => $textAnswer, 'rotAnswer' => $rotAnswer]);
    }

}
