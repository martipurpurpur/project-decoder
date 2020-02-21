@extends('layouts.app')

@section('content')
   <div class="row">
       <div class="col-sm">
       <a href="{{ route('index_uue') }}">Decoder/encoder uue</a>
   </div>
   <div class="col-sm">
       <a href="{{ route('index_rot') }}">Decoder/encoder rotN</a>
   </div>
   <div class="col-sm">
       <a href="{{ route('index_base64') }}">Decoder/encoder base64</a>
   </div>
   </div>
@endsection
