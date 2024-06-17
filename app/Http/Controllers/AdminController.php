<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    function index()
    {
        $blogs = DB::table('blogs')->get();
        return view('blog', compact('blogs'));
    }
    function create()
    {
        return view('form');
    }
    function insert(Request $request)

    {
        $request->validate(
            [
                'title' => 'required|max:50',
                'content' => 'required'
            ],
            [
                'title.required' => 'กรุณากรอกชื่อบทความ',
                'title.max' => 'ชื่อบทความไม่ควรเกิน 50 ตัวอักษร',
                'content.required' => 'กรุณากรอกเนื้อหาบทความ'

            ]
        );
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        DB::table('blogs')->insert($data);
        return redirect('/blog');
    }
    function delete($id)
    {
        DB::table('blogs')->where('id', $id)->delete();
        return redirect('/blog');
    }
    function change($id)
    {
        $blog = DB::table('blogs')->where('id', $id)->first();
        $data = [
            'status' => !$blog->status
        ];

        DB::table('blogs')->where('id', $id)->update($data);
        return redirect('/blog');
    }

    function edit($id)
    {
        $blogs = DB::table('blogs')->where('id', $id)->first();

        return view('edit', compact('blogs'));
    }
}