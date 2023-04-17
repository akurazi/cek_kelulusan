<?php

namespace App\Http\Controllers;

use App\Models\web;
use App\Models\Siswa;
use App\Models\School;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index(Request  $request)
    {
        $cari = $request->query('search');
        $siswa = null;

        if ($cari != null) {
            $siswa = Siswa::query()->where('no_exam', $cari)->first();
            // dd($siswa);
        }
        $web = Web::latest()->first();
        $setting = Setting::latest()->first();
        return view('frontend.index', [
            'cari' => $cari,
            'web' => $web,
            'setting'   => $setting,
            'siswa' => $siswa
        ]);
    }

    public function cetak($id)
    {
        $web = Web::first();
        $student = Siswa::find($id);
        $school = School::first();
        return view('frontend.cetak', [
            'web' => $web,
            'student' => $student,
            'school' => $school,
        ]);
    }
    //
}
