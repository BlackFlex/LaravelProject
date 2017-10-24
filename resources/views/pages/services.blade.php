@extends('layouts.app')

@section ('content')
    <center><h1><a href="/services">Services</a></h1></center>
    @if(count($services)>0)
      @foreach($services as $service)
          <div class="col-md-4 services-box">
             <h2>{{$service->service_title}}</h2>
              <p>{{$service->service_text}}</p>
              <p>{{$service->category->category_title}}</p>
          </div>
      @endforeach
    @endif

 @endsection
