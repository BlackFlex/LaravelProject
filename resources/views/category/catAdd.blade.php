@extends ('layouts/app')
@section('content')
    <h2>Add Post</h2>

    {!! Form::open(['action'=>'CategoryController@store','method'=>'POST']) !!}
    <div class="form-group">
        {{ Form::label ('category_title','Title') }}
        {{ Form::text ('category_title','',['class'=>'form-control','placeholder'=>'Category Title']) }}

    </div>


    {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
    {!! Form::close() !!}


@endsection