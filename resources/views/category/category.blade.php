@extends ('layouts/app')
@section('content')
    @foreach ($category as $cat)

        <h2>{{ $cat->category_title }}</h2> <a href="category/{{ $cat->id }}/edit">edit</a>

        {!! Form::open(['action'=>['CategoryController@destroy',$cat->id],'method'=>'POST']) !!}
        {{Form::hidden ('_method','DELETE') }}
        {{ Form::submit('DELETE',['class'=>'btn btn-danger']) }}
        {!! Form::close() !!}
    @endforeach

    {{ $category->links() }}

    <a href="category/create">
        <button> ADD </button>
    </a>



@endsection