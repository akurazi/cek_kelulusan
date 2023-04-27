<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\web;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $siswa_lulus = Siswa::where('status', 1)->count();
        $siswa_tdklulus = Siswa::where('status', 0)->count();
        $total_siswa = Siswa::count();
        $web = Web::latest()->first();
        return view('admin.index', [
            'title' => 'Dashboard',
            'web' => $web,
            'siswa_lulus'   => $siswa_lulus,
            'siswa_tdklulus'    => $siswa_tdklulus,
            'total_siswa'   => $total_siswa
        ]);
    }
}
