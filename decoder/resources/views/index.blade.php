@extends('layouts.app')

@section('content')
   <div>
       <div>
       <a href="{{ route('index_uue') }}">Decoder/encoder uue</a>
   </div>
   <div>
       <a href="{{ route('index_rot') }}">Decoder/encoder rotN</a>
   </div>
   <div>
       <a href="{{ route('index_base64') }}">Decoder/encoder base64</a>
   </div>
   </div>
@endsection
