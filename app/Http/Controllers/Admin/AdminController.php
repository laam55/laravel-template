<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use CommonHelper;

class AdminController extends Controller
{
    //trang chính trong admin
    public function index()
    {
        return view('admin.dashboard.index');
    }
}
