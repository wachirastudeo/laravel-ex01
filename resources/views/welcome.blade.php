@extends('layouts.app')
@section('title', 'หน้าแรกเว็บไซต์')


@section('content')
    <h2>บทความล่าสุด</h2>
    <hr>
    @foreach ($blogs as $item)
        <h2>{{ $item->title }}</h2>
        <p>{!! Str::limit($item->content, 30) !!}</p>
        <a href="/detail/{{ $item->id }}">อ่านเพิ่มเติม</a>
        <hr>
    @endforeach
@endsection
