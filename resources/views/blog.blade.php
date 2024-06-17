@extends('layout')

@section('title', 'บทความทั้งหมด')

@section('content')
    <h2 class="text text-center">
        บทความทั้งหมด </h2>
    <hr>
    @if (count($blogs) > 0)
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
                        <td> <a href="{{ route('change', $item->id) }}">
                                @if ($item->status == true)
                                    <p class="btn btn-success">เผยแพร่</p>
                                @else
                                    <p class="btn btn-secondary">ฉบับร่าง</p>
                                @endif
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('edit', $item->id) }}" class="btn btn-warning">แก้ไข</a>
                        </td>
                        <td>
                            <a href="{{ route('delete', $item->id) }}" class="btn btn-danger"
                                onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่ ?')">ลบ</a>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
        {{ $blogs->links() }}
    @else
        <h2 class="text text-center py-2">ไม่มีข้อมูลในระบบ</h2>
    @endif
@endsection
