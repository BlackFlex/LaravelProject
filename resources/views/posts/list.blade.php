@extends('layouts/app')

@section('content')
<h3>POSTS</h3>
    @if(count($posts)>0)
        @foreach ($posts as $post)
           <div class="well posts" >
               <h3><a href="posts/{{$post->id}}" >{{$post->post_title}}</a></h3>
               <h4>{!! $post->post_text !!}</h4>
           </div>
        @endforeach
        {{$posts->links()}}
    @endif

@if(!auth::guest())
    <a href="posts/create"><button class="btn btn-success add-post-btn">Add Post</button></a>
@endif
@endsection
