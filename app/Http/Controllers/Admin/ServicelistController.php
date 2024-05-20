<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicelistController extends Controller
{
    public function index()
    {
        return view('admin.service-list.index');
    }
}
