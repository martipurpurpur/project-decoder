<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DecoderController extends Controller
{
  /*  public function decoder(Request $request)
    {
        $this->validate($request, [
            'base64' => 'max:255',
        ]);

        $base64 = $request->get('base64');
        $text = base64_decode($base64);

        $text_form = $request->get('text_form');
        $base = base64_encode($text_form);

        $uue = $request->get('uue');
        $text2 = convert_uudecode($uue);

        $text_form2 = $request->get('text_form2');
        $uue_answer = convert_uuencode($text_form2);
        return view('index', ['text' => $text, 'base' => $base, 'text2' => $text2, 'uue_answer' => $uue_answer]);
    }
*/
}
