@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('uue') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="uue">Encode uue</label>
            <input type="text" class="form-control" id="uue" name="uue" placeholder="uue">
        </div>
        <button type="submit" class="btn btn-primary">Go</button>
        <div>answer</div>
    </form>

    <form method="POST" action="{{ route('uue') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="text_form2">Decode uue</label>
            <input type="text" class="form-control" id="text_form2" name="text_form2" placeholder="text">
        </div>
        <button type="submit" class="btn btn-primary">Go</button>
        <div>answer</div>
    </form>


    <div>
        <a href="{{ route('index_uue') }}">Decoder/encoder uue</a>
    </div>
    <div>
        <a href="{{ route('index_rot') }}">Decoder/encoder rotN</a>
    </div>
    <div>
        <a href="{{ route('index_base64') }}">Decoder/encoder base64</a>
    </div>
@endsection
