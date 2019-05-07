<?php

namespace GeekDC\Hello;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        dd("hello world");
    }
}
