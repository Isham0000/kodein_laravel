<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $month = ["Oktober", 'November', 'Desember'];
        $data = [
            'month' => $month
        ];
        return view("blog.index",  $data);
    }

    public function show($key = null) {
        if($key == null) {
            return redirect()->route('frontend_blog')->with('error', 'Key not found');
        }else {
            $_key = [1, 2, 3];
            
            if(!in_array($key, $_key)) {
                return redirect()->route('frontend_blog')->with('error', 'The key is invalid');
            }else {
                return view('blog.show', ['key' => $key]);
            }
        }
    }
}
