@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('base64') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="base64">Decode base64</label>
            <input type="text" class="form-control" id="base64" name="base64" placeholder="base64">
        </div>
        <button type="submit" class="btn btn-primary">Go</button>
        <div>answer</div>
    </form>

    <form method="POST" action="{{ route('base64') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="text_form">Encode base64</label>
            <input type="text" class="form-control" id="text_form" name="text_form" placeholder="text">
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
    <div>
        <a href="{{ route('index') }}">Home</a>
    </div>
@endsection
