@extends('layout')

@section('title', 'บทความทั้งหมด')

@section('content')
    <h2 class="text text-center">
        บทความทั้งหมด </h2>
    <hr>
    <table class="table">
        <thead>
            <tr>

                <th scope="col">ชื่อบทความ</th>
                <th scope="col">เนื้อหา</th>
                <th scope="col">สถานะ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $item)
                <tr>

                    <th scope="row"> {{ $item['title'] }} </th>
                    <td>{{ $item['content'] }} </td>
                    <td>
                        @if ($item['status'] == 'true')
                            <p class="text text-success">เผยแพร่</p>
                        @else
                            <p class="text text-danger">ฉบับร่าง</p>
                        @endif
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
