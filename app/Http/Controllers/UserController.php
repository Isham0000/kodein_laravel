<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function manage() {
        return view('user'); // resources/views/user.blade.php
    }
}
