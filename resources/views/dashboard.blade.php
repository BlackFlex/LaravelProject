@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="/posts/create"><button class="btn btn-primary">Create Post</button></a>
                    <h3> {{$user}} Posts</h3>
                        @if(count($posts)>0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->post_title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit"><button class="btn btn-success">Edit</button></a></td>
                                <td>{!! Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST']) !!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{ Form::submit('Delete',['class'=>'btn btn-danger del-btn']) }}
                                    {!! Form::close() !!}
                                </td>
                            </tr>

                        @endforeach
                    </table>
                        @else
                        <h3> You Have No Post</h3>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
