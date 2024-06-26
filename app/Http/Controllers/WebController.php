<?php

namespace App\Http\Controllers;

use App\Models\web;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $web = Web::latest()->first();
        // dd($web);
        return view('admin.web.index', [
            'web' => $web,
            'title' => 'set'
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
     * @param  \App\Models\web  $web
     * @return \Illuminate\Http\Response
     */
    public function show(web $web)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\web  $web
     * @return \Illuminate\Http\Response
     */
    public function edit(web $web)
    {
        $web = Web::latest()->first();
        // dd($web);
        return view('admin.web.edit', [
            'web' => $web
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\web  $web
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, web $web, $id)
    {
        $web = Web::find($id);
        $web->title = $request->title;
        $web->web_name = $request->web_name;
        $web->footer = $request->footer;
        $web->about = $request->about;


        if ($request->logo != null) {
            $this->validate($request, [
                'logo' => 'image|file|max:2048'
            ]);
            $logo = $request->file('logo');
            $nama_logo =  "Logo." . $request->logo->extension();
            $logo->move('files/logo', $nama_logo);
            $web->logo = $nama_logo;
        }

        $web->save();

        return redirect('/web')->with('success', 'Data Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\web  $web
     * @return \Illuminate\Http\Response
     */
    public function destroy(web $web)
    {
        //
    }
}
