@extends('layout')

@section('title', 'เขียนบทความ')

@section('content')
    <h3 class="text text-center"> เขียนบทความ</h3>
    <div class="mb-3">
        <label for="title" class="form-label">ชื่อบทความ</label>
        <input type="text" class="form-control" id="title">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">เนื้อหาบทความ </label>
        <textarea class="form-control" id="content" rows="3"></textarea>
    </div>
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary my-3  ">บันทึก </button>
        <a href="/blog " class="btn btn-success m-3">บทความทั้งหมด</a>
    </div>

@endsection
