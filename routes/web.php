<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('blog', function () {
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
})->name('blog');