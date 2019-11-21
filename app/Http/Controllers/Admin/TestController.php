<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use CommonHelper;

class TestController extends Controller
{
    public function index()
    {
        return view('admin.test-view.index');
    }
    public function index123()
    {
        return view('admin.test-view.index123');
    }
    public function create()
    {
        return view('admin.test-view.create');
    }
    public function create123()
    {
        return view('admin.test-view.create123');
    }
    public function edit()
    {
        return view('admin.test-view.edit');
    }
    public function edit123()
    {
        return view('admin.test-view.edit123');
    }
}
