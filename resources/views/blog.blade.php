@extends('layout')

@section('title','บทความทั้งหมด')

@section('content')
    <hr>
@foreach ($blogs as $item)
       <h4> {{$item['title']}} </h4>
       <p> {{$item['content']}} </p>
       @if ($item['status']=='true')

       <p class="text text-success">เผยแพร่</p>
           
       @else
       <p class="text text-danger">ฉบับร่าง</p>

           
       @endif
@endforeach
@endsection
