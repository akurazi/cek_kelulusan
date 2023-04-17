<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = School::latest()->first();
        return view('admin.school.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        $data = School::latest()->first();
        return view('admin.school.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school, $id)
    {
        $school = School::find($id);
        $validate = $request->validate([
            'nama_sekolah'          => 'required',
            'nama_dinas'            => 'required',
            'logo_dinas'            => 'image|file|max:2048',
            'nama_penandatangan'    => 'required',
            'jabatan_penandatangan'  => 'required',
            'tanda_tangan'          => 'image|file|max:2048'
        ]);
        $school->kop_nama_disdik =      $request->nama_dinas;
        $school->kop_nama_sekolah =     $request->nama_sekolah;
        $school->kop_th_pelajaran =     $request->kop_th_pelajaran;
        $school->kop_alamat =           $request->kop_alamat;
        $school->kop_telepon =          $request->kop_telepon;
        $school->kop_pos =              $request->kop_pos;
        $school->kop_website =          $request->kop_website;
        $school->kop_email =            $request->kop_email;
        $school->nama_surat =           $request->nama_surat;
        $school->no_surat =             $request->no_surat;
        $school->pembuka_surat =        $request->pembuka_surat;
        $school->penutup_surat =        $request->penutup_surat;
        $school->jabatan_penandatangan = $request->jabatan_penandatangan;
        $school->nama_penandatangan = $request->nama_penandatangan;
        $school->tempat = $request->tempat;
        $school->tanggal = $request->tanggal;


        if ($request->logo_dinas != null) {
            $kop_logo_dinas = $request->file('logo_dinas');
            $nama_dinas = str_replace(' ', '_', $request->nama_dinas);
            $nama_kop_logo_dinas =  $nama_dinas . "." . $request->logo_dinas->extension();

            $kop_logo_dinas->move('files/logo', $nama_kop_logo_dinas);
            $school->kop_logo_dinas = $nama_kop_logo_dinas;
        }

        if ($request->tanda_tangan != null) {
            $tanda_tangan = $request->file('tanda_tangan');
            $nama_tanda_tangan = str_replace(' ', '_', $request->nama_penandatangan);
            $nama_tanda =  $nama_tanda_tangan . "." . $request->tanda_tangan->extension();

            $tanda_tangan->move('files/logo', $nama_tanda);
            $school->tanda_tangan = $nama_tanda;
        }
        $school->save();

        return redirect('/skl')->with('success', 'Data Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }
}
