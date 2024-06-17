<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index()
    {
        $blogs = Blog::paginate(5);
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
        Blog::insert($data);
        return redirect('/author/blog');
    }
    function delete($id)
    {
        Blog::find($id)->delete();
        return redirect()->back();
    }
    function change($id)
    {
        $blog = Blog::find($id);
        $data = [
            'status' => !$blog->status
        ];

        Blog::find($id)->update($data);
        return redirect()->back();
    }

    function edit($id)
    {
        $blogs = Blog::find($id);

        return view('edit', compact('blogs'));
    }
    function update(Request $request, $id)
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

        Blog::find($id)->update($data);
        return redirect()->back();
    }
}