@extends('layouts.main')
@section('content')
<section class="section">
    <div class="section-header">
      <h1 align="center">List Siswa</h1>
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
            <div class="card-header">
              <h4></h4>
              <div class="card-header-action">
                <a href="siswa/tambah" class="btn btn-icon icon-left btn-primary"><i class="fa fa-plus"></i> Tambah Siswa</a>
                <a href="siswa/upload" class="btn btn-icon icon-left btn-warning"><i class="fa fa-upload"></i> Upload Siswa</a>
                <a href="#" class="btn btn-icon icon-left btn-danger"><i class="fa fa-trash"></i> Hapus Siswa</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                      </th>
                      <th>Nama Lengkap</th>
                      <th>Kelas</th>
                      <th>NISN</th>
                      <th>No Ujian</th>
                      <th>Status</th>
                      <th>Pesan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $no =1;  
                    @endphp
                    @foreach ($siswa as $item)
                       <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['class'] }}</td>
                        <td>{{ $item['nisn'] }}</td>
                        <td>{{ $item['no_exam'] }}</td>
                        <td>{{ $item['status'] }}</td>
                        <td>{{ $item['message'] }}</td>
                        <td>koosng</td>
                       </tr>
                      @php
                          $no++;
                      @endphp 
                   @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </section>
@endsection