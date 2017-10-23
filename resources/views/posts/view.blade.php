@extends('layouts/app')

@section('content')
        <h3><a href="/posts">POSTS</a></h3>
            <div class="well" >
                <h3>{{$post->post_title}}</h3>
                <h4>{!! $post->post_text !!}</h4>
                <smal>{!! $post->created_at !!} by {{ $post->user->name }}</smal>
            </div>
        <hr>
        <a href="/posts/{{$post->id}}/edit"><button class="btn btn-default btn-form">Edit</button></a>
        {!! Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST']) !!}
            {{Form::hidden('_method','DELETE')}}
            {{ Form::submit('Delete',['class'=>'btn btn-danger del-btn']) }}
        {!! Form::close() !!}

@endsection
