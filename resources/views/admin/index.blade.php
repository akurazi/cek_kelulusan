@extends('layouts.main')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Siswa</h4>
            </div>
            <div class="card-body">
              {{ $total_siswa }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-user-check"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Siswa Lulus</h4>
            </div>
            <div class="card-body">
              {{ $siswa_lulus }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-user-times"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Kelulusan Tertunda</h4>
            </div>
            <div class="card-body">
              {{ $siswa_tdklulus }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="fas fa-tools"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <a href="{{ route('web') }}"> <h4> Pengaturan Website</h4></a>
            </div>
            <div class="card-body">
             
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
  @endsection