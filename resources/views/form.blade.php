@extends('layouts.app')

@section('title', 'เขียนบทความ')

@section('content')
    <h3 class="text text-center"> เขียนบทความ</h3>
    <form method="POST" action="/author/insert">
        @csrf
        <div class="mb-3 form-group">
            <label for="title" class="form-label">ชื่อบทความ</label>
            <input type="text" class="form-control" id="title" name="title">
            @error('title')
                <div>
                    <span class="text text-danger">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <div class="mb-3 form-group">
            <label for="content" class="form-label">เนื้อหาบทความ </label>
            <textarea class="form-control" id="content" rows="3" name="content"></textarea>
            @error('content')
                <div>
                    <span class="text text-danger">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <div class="d-flex justify-content-end">
            <input type="submit" class="btn btn-primary my-3  " value="บันทึก"> </input>
            <a href="/blog " class="btn btn-success m-3">บทความทั้งหมด</a>
        </div>
    </form>
@endsection
