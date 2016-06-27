@extends('app')

@section('content')

 <h1>Documents</h1>

 <ul>
  @foreach ($documents as $document)
   <li><a href="documents\{{ $document->id }}"> {{ $document->title}}</a></li>
  @endforeach


 </ul>



@endsection
