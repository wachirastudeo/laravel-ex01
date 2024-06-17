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
                {{-- <th scope="col">เนื้อหา</th> --}}
                <th scope="col">สถานะ</th>
                <th scope="col"> ลบทบความ</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $item)
                <tr>

                    <th scope="row"> {{ $item->title }} </th>
                    {{-- <td>{{ Str::limit($item->content, 25) }} </td> --}}
                    <td>
                        @if ($item->status == true)
                            <p class="btn btn-success">เผยแพร่</p>
                        @else
                            <p class="btn btn-warning">ฉบับร่าง</p>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('delete', $item->id) }}" class="btn btn-danger"
                            onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่ ?')">ลบ</a>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
