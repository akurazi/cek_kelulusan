<?php

namespace App\Http\Controllers;

use App\Models\web;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $web = Web::latest()->first();
        return view('admin.index', [
            'title' => 'Dashboard',
            'web' => $web
        ]);
    }
}
