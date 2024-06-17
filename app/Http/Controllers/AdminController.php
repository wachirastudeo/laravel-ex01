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
                'title' => 'required|max 50',
                'content' => 'required'
            ],
            [
                'title.required' => 'กรุณากรอกชื่อบทความ',
                'title.max' => 'ชื่อบทความไม่ควรเกิน 50 ตัวอักษร',
                'content.required' => 'กรุณากรอกเนื้อหาบทความ'

            ]
        );
    }
}