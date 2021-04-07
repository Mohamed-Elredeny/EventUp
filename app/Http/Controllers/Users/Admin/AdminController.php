<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function testadd(){
        return view('admin.sections.courses.create');

    }
    public function testview(){
        return view('admin.sections.courses.index');
    }
}
