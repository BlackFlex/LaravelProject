@extends ('layouts/app')
@section('content')
    <h2>Add Post</h2>

    {!! Form::open(['action'=>['CategoryController@update',$ankap->id],'method'=>'POST']) !!}
    <div class="form-group">
        {{ Form::label ('category_title','Title') }}
        {{ Form::text ('category_title',$ankap->category_title,['class'=>'form-control','placeholder'=>'Category Title']) }}
        {{ Form::hidden ('_method','PUT') }}

    </div>


{{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
    {!! Form::close() !!}


@endsection