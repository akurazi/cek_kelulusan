@extends('layouts.main')
@section('content')
<section class="section">
    <div class="section-header">
      {{-- <h1 align="center">List Siswa</h1> --}}
    </div>
    @if(session()->has('success'))
    <div class="card-body">
      <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
          <button class="close" data-dismiss="alert">
            <span>&times;</span>
          </button>
         {{session('success')}}
        </div>
      </div>
@endif
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h3 style="text-align: center">Detail Pengumuman</h3>
            </div>
            <div class="card-body">
              <a class="btn btn-icon icon-left btn-warning float-right" href="setting/edit"><i class="fa fa-edit"></i> Edit Pengumuman</a>
              <table>
                <tr>
                  <th width=100>Status</th>
                  <td>:</td>
                  <td>&nbsp;&nbsp;<span class="badge badge-danger"> {{ $setting->status }}</span></td>
                </tr>
                <tr>
                  <th>Tanggal</th>
                  <td>:</td>
                  <td>&nbsp;&nbsp;{{ $setting->tanggal }}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </section>
@endsection