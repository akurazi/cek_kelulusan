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
              <h3 style="text-align: center">Setting Surat SKL</h3>
            </div>
            <div class="card-body">
              <a class="btn btn-icon icon-left btn-warning float-right" href="skl/edit"><i class="fa fa-edit"></i> Edit Surat</a><br><br>
              <div class="row">
                <div class="col-md-6"> 
                  <div class="card">
                    <div class="card-header bg-primary">
                      <h4 class="text-white text-center">KOP Surat SKL</h4>
                    </div>
                    <div class="card-body">
                      <table width=100% cellpadding=10>
                        <tr>
                          <th width=100>Nama Sekolah</th>
                          <th width=1>:</th>
                          <td>{{ $data->kop_nama_sekolah }}</td>
                        </tr>
                        <tr>
                          <th>Tahun Pelajaran</th>
                          <th>:</th>
                          <td>{{ $data->kop_th_pelajaran }}</td>
                        </tr>
                        <tr>
                          <th>Alamat</th>
                          <th>:</th>
                          <td>{{ $data->kop_alamat }}</td>
                        </tr>
                        <tr>
                          <th>Telepon</th>
                          <th>:</th>
                          <td>{{ $data->kop_telepon }}</td>
                        </tr>
                        <tr>
                          <th>Kode Pos</th>
                          <th>:</th>
                          <td>{{ $data->kop_pos }}</td>
                        </tr>
                        <tr>
                          <th>Website</th>
                          <th>:</th>
                          <td>{{ $data->kop_website }}</td>
                        </tr>
                        <tr>
                          <th>Email</th>
                          <th>:</th>
                          <td>{{ $data->kop_email }}</td>
                        </tr>
                        <tr>
                          <th>Nama Dinas</th>
                          <th>:</th>
                          <td>{{ $data->kop_nama_disdik }}</td>
                        </tr>
                        <tr>
                          <th>Logo Dinas</th>
                          <th>:</th>
                          <td><img src="{{ asset('files/logo/'.$data->kop_logo_dinas) }}" width="90"> </td>
                        </tr>
    
                      </table>
                    </div>
                  </div>
                 
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header bg-primary">
                      <h4 class="text-white text-center">Pembuka Surat</h4>
                    </div>
                    <div class="card-body">
                      <table style="table-layout: fixed; width: 100%" cellpadding=10>
                        <tr>
                          <th width=100>Nama Surat</th>
                          <th width=1>:</th>
                          <td>{{ $data->nama_surat }}</td>
                        </tr>
                        <tr>
                          <th>No Surat</th>
                          <th>:</th>
                          <td>{{ $data->no_surat }}</td>
                        </tr>
                        <tr>
                          <th>Pembuka Surat</th>
                          <th>:</th>
                          <td style="word-wrap: break-all">{{ $data->pembuka_surat }}</td>
                        </tr>    
                      </table>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header bg-primary">
                      <h4 class="text-white text-center">Penutup Surat</h4>
                    </div>
                    <div class="card-body">
                      <table style="table-layout: fixed; width: 100%" cellpadding=10>
                        <tr>
                          <th width=100>Penutup Surat</th>
                          <th width=1>:</th>
                          <td style="word-wrap: break-all">{{ $data->penutup_surat }}</td>
                        </tr>
                        <tr>
                          <th>Nama Penandatangan</th>
                          <th>:</th>
                          <td>{{ $data->nama_penandatangan }}</td>
                        </tr>
                        <tr>
                          <th>Jabatan Penandatangan</th>
                          <th>:</th>
                          <td>{{ $data->jabatan_penandatangan }}</td>
                        </tr>    
                        <tr>
                          <th>Tempat</th>
                          <th>:</th>
                          <td>{{ $data->tempat }}</td>
                        </tr>    
                        <tr>
                          <th>Tanggal</th>
                          <th>:</th>
                          <td>{{ $data->tanggal }}</td>
                        </tr>
                        <tr>
                          <th>Tanda Tangan</th>
                          <th>:</th>
                          <td><img src="{{ asset('files/logo/'.$data->tanda_tangan) }}" width="90"> </td>
                        </tr>        
                      </table>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </section>
@endsection