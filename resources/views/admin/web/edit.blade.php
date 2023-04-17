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
              <form action="/web/update/{{ $web->id }}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Judul Web</label>
                <div class="col-sm-9">
                    <input type="text" name="title" class="form-control" value="{{ $web->title }}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Web</label>
                <div class="col-sm-9">
                    <input type="text" name="web_name" class="form-control" value="{{ $web->web_name }}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Footer</label>
                <div class="col-sm-9">
                    <input type="text" name="footer" class="form-control" value="{{ $web->footer }}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tentang</label>
                <div class="col-sm-9">
                    <textarea name="about" class="form-control">{{ $web->about }}</textarea>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Logo</label>
                <div class="col-sm-9">
                    <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror">
                    @error('logo')
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