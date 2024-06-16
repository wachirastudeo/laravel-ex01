<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    function index()
    {
        $blogs = [
            [
                'title' => 'บทความที่ 1',
                'content' => 'เนื้อหาบทความที่ 1',
                'status' => true
            ],
            [
                'title' => 'บทความที่ 2',
                'content' => 'เนื้อหาบทความที่ 2',
                'status' => true
            ],
            [
                'title' => 'บทความที่ 3',
                'content' => 'เนื้อหาบทความที่ 3',
                'status' => false
            ],
        ];
        return view('blog', compact('blogs'));
    }
    function create()
    {
        return view('form');
    }
    function insert(Request $request)

    {
        $request->validate([
            'title' => 'required|max 50',
            'content' => 'required'
        ]);
    }
}