<?php

namespace App\Http\Controllers;

use App\Models\web;
use App\Models\User;
use App\Models\Siswa;
use App\Imports\SiswaImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $username = User::latest()->first();
        $siswa = Siswa::all();
        $web = Web::latest()->first();
        return view('admin.siswa.index', [
            'siswa' => $siswa,
            'web' => $web,
            'title' => 'Siswa',
            'nama'      => $username
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $username = User::latest()->first();
        $web = Web::latest()->first();
        return view('admin.siswa.tambah', [
            'web' => $web,
            'title' => 'Siswa',
            'nama'      => $username
        ]);
    }

    public function upload()
    {
        $username = User::latest()->first();
        $web = Web::latest()->first();
        return view('admin.siswa.upload', [
            'web' => $web,
            'title' => 'Siswa',
            'nama'      => $username
        ]);
    }

    public function import_excel(Request $request)
    {

        // validasi
        $this->validate($request, [
            'file_excel' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file_excel');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('files/excel', $nama_file);

        // import data
        Excel::import(new SiswaImport, 'files/excel/' . $nama_file);


        // alihkan halaman kembali
        return redirect('/siswas');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate = $this->validate(request(), [
            'nama'          => 'required',
            'nisn'          => 'required||unique:siswas',
            'kelas'         => 'required',
            'no_ujian'      => 'required',
            'status'        => 'required',
            'pesan'         => 'required'

        ]);

        $masuk = [
            'name' => $request->input('nama'),
            'class' => $request->input('kelas'),
            'nisn' => $request->input('nisn'),
            'no_exam' => $request->input('no_ujian'),
            'status' => $request->input('status'),
            'message' => $request->input('message')
        ];

        Siswa::create($masuk);

        return redirect('/siswas')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {

        $web = Web::latest()->first();
        $username = User::latest()->first();
        return view('admin.siswa.edit', [
            'web' => $web,
            'title' => 'Siswa',
            'siswa' => $siswa,
            'nama'      => $username
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa, $id)
    {
        $validate = $this->validate(request(), [
            'nama'          => 'required',
            'kelas'         => 'required',
            'no_ujian'      => 'required',
            'status'        => 'required',
            'pesan'         => 'required'
        ]);

        $cek = Siswa::where('nisn', $id)->first();

        $cek->update([
            'name' => $request->input('nama'),
            'class' => $request->input('kelas'),
            'no_exam' => $request->input('no_ujian'),
            'status' => $request->input('status'),
            'message' => $request->input('message')
        ]);

        return redirect('/siswas')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        Siswa::destroy($siswa->id);
        return redirect('/siswas')->with('success', 'Data Berhasil Dihapus');
    }

    public function hapusAll(Siswa $siswa)
    {
        Siswa::truncate();
        return redirect('/siswas')->with('success', 'Semua Data Berhasil Dihapus');
    }
}
