@extends('layouts.app')

@section('content')

   <div class="row">

       <div class="col">

           <div class="card text-white marti-cards mb-3" style="max-width: 18rem;">
               <div class="card-header text-center">
                   <h3><a href="{{ route('index_uue') }}" class="marti-links">UUE</a></h3>
               </div>
               <div class="card-body">
                   <p class="card-text">
                       Uuencoding is a form of binary-to-text encoding
                       for encoding binary data for transmission in email systems.
                   </p>
               </div>
           </div>

       </div>
       <div class="col">

           <div class="card text-white marti-cards mb-3" style="max-width: 18rem;">
               <div class="card-header text-center">
                   <h3><a href="{{ route('index_rot') }}" class="marti-links">ROT N</a></h3>
               </div>
               <div class="card-body">
                   <p class="card-text">
                       Is a simple letter substitution cipher that replaces a letter with the N letter after it,
                       in the alphabet.
                   </p>
               </div>
           </div>

       </div>
       <div class="col">

       <div class="card text-white marti-cards mb-3" style="max-width: 18rem;">
           <div class="card-header text-center">
               <h3><a href="{{ route('index_base64') }}" class="marti-links">BASE64</a></h3>
           </div>
           <div class="card-body">
               <p class="card-text">
                   A group of binary-to-text encoding schemes that represent binary data
                   in an ASCII string format by translating it into a radix-64 representation.
               </p>
           </div>
       </div>

   </div>

@endsection
