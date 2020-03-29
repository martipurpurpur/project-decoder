@extends('layouts.app')
@section('content')

    <form method="POST" action="{{ route('rot') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-2">
                <div class="form-group marti-forms">
                <input type="radio" id="lang" name="lang" value="eng" checked>
                <label for="lang">Eng</label>
                <input type="radio" id="lang" name="lang" value="rus">
                <label for="lang">Rus</label>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group marti-forms">
                    <input type="number" class="form-control" id="num" name="num" min="0" max="99" placeholder="N encode">
                </div>
                <div class="form-group marti-forms">
                    <input type="text" class="form-control" id="rot" name="rot" placeholder="rot">
                </div>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4">{{ $rotAnswer ?? '' }}</textarea>
                <span>
                    <button type="submit" class="badge-pill pills submit-pills">Submit</button>
                </span>
            </div>

            <div class="col-4">
                <div class="form-group marti-forms">
                    <input type="number" class="form-control" id="num-decode" name="num-decode" min="0" max="99" placeholder="N decode">
                    </div>
                <div class="form-group marti-forms">
                    <input type="text" class="form-control" id="text" name="text" placeholder="text">
                </div>

                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4">{{ $textAnswer ?? '' }}</textarea>


            </div>
        </div>
        <div class="col-2"></div>
    </form>


    <footer>
        <ul class="nav justify-content-center">
            <li class="nav-item">
            <li class="nav-item">
                <a class="nav-link marti-links" href="{{ route('index') }}">Home</a>
            </li>
            <a class="nav-link marti-links" href="{{ route('index_uue') }}">Uue</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled badge-pill pills" href="{{ route('index_rot') }}">rotN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link marti-links" href="{{ route('index_base64') }}">Base64</a>
            </li>
        </ul>
    </footer>
@endsection
