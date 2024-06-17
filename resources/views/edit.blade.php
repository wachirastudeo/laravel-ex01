@extends('layouts.app')

@section('title', 'แก้ไขบทความ')

@section('content')
    <h3 class="text text-center"> แก้ไขบทความ</h3>
    <form method="POST" action="{{ route('update', $blogs->id) }}">
        @csrf
        <div class="mb-3 form-group">
            <label for="title" class="form-label">ชื่อบทความ</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $blogs->title }}">
            @error('title')
                <div>
                    <span class="text text-danger">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <div class="mb-3 form-group">
            <label for="content" class="form-label">เนื้อหาบทความ </label>
            <textarea class="form-control" id="content" rows="3" name="content">{{ $blogs->content }}</textarea>
            @error('content')
                <div>
                    <span class="text text-danger">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <div class="d-flex justify-content-end">
            <input type="submit" class="btn btn-primary my-3  " value="แก้ไข"> </input>
            <a href="/blog " class="btn btn-success m-3">บทความทั้งหมด</a>
        </div>
    </form>
@endsection
