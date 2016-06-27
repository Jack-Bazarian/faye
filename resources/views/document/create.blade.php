@extends('app')

@section('content')
 <h1>New Document</h1>
 {{ Form::open(array('url' => 'documents','method' => 'post')) }}

 <div class="form-group">

  {{ Form::label('title', 'Title') }}
  {{ Form::text('title') }}
 </div>

 <div class="form-group">
  {{ Form::textarea('body') }}
 </div>


 {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

 {{ Form::close() }}



@endsection
