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

<div class="callout callout-primary alert-dismissible fade show">
  <h4><i class="fas fa-fw fa-info-circle"></i> Edit Data ?</h4>
  Silahkan Klik Edit Untuk Mengedit : <a href="{{ route('web') }}/edit" class="btn btn-md btn-icon icon-left btn-warning"><i class="fas fa-edit"></i>  Edit </a> </p>
</div>
    <div class="section-body">
      <div class="row">
        <div class="col-8">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h3 style="text-align: center">Pengaturan Web</h3>
            </div>
            <div class="card-body">
              <table>
                <tr>
                  <th width=100>Judul Web</th>
                  <td>:</td>
                  <td>{{ $web->title }}</td>
                </tr>
                <tr>
                  <th>Nama Web</th>
                  <td>:</td>
                  <td>{{ $web->web_name }}</td>
                </tr>
                <tr>
                  <th>Footer</th>
                  <td>:</td>
                  <td>{{ $web->footer }}</td>
                </tr>
                <tr>
                  <th>About</th>
                  <td>:</td>
                  <td>{{ $web->about }}</td>
                </tr>
                
              </table>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h3 style="text-align: center">Logo</h3>
            </div>
            <?php

            if($web->logo != null){
              $image = $web->logo;
            }else{
              $image = "no_image.jpg";
            }
            ?>
              <img src="{{ asset('files/logo/'.$image) }}" width="200" height="200" style="margin: 5px auto; ">
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </section>
@endsection