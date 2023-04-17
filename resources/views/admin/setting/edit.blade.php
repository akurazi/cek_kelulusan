@extends('layouts.main')
@section('content')
<section class="section">
    <div class="section-header">
      {{-- <h1 align="center">List Siswa</h1> --}}
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h3 style="text-align: center">Ubah Pengumuman</h3>
            </div>
            <div class="card-body">
              <form action="/setting/store" method="post">
                @csrf
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                  <select name="status" class="form-control">
                      <option value="Buka">Buka</option>
                      <option value="Tutup">Tutup</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tanggal</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}">
                  @error('tanggal')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Waktu</label>
                <div class="col-sm-9">
                  <input type="time" class="form-control @error('waktu') is-invalid @enderror" name="waktu" value="{{ old('waktu') }}">
                  @error('waktu')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <input type="submit" value="Ubah" class="btn btn-primary btn-block">
              </form>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </section>
@endsection