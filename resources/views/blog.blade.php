@extends('layout')

@section('title','บทความทั้งหมด')

@section('content')
    <hr>
@foreach ($blogs as $item)
       <h4> {{$item['title']}} </h4>
       <p> {{$item['content']}} </p>
@endforeach
@endsection
