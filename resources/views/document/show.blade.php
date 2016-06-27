@extends('app')

@section('content')

 <div class="jumbotron text-center">
  <h1>{{ $document->title }}</h1>
  <p>{{ $document->body }}</p>
 </div>



@endsection
