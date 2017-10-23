@extends ('layouts/app')
@section('content')
    <h2>Edit Post</h2>

    {!! Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST']) !!}
    <div class="form-group">
        {{ Form::label ('post_title','Title') }}
        {{ Form::text ('post_title',$post->post_title,['class'=>'form-control','placeholder'=>'Post Title']) }}

    </div>
    <div class="form-group">
        {{ Form::label ('post_text','Text') }}
        {{ Form::textarea ('post_text',$post->post_text,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Post Text']) }}

    </div>
    {{Form::hidden('_method','PUT')}}
    {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
    {!! Form::close() !!}


@endsection




