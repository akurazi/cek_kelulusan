@extends('layouts.main')
@section('content')
<section class="section">
    <div class="section-header">
      {{-- <h1 align="center">Tambah Siswa</h1> --}}
    </div>      
    <div class="section-body">
      <div class="row">
        <div class="col-12">
            <div class="card">
                <form method="post" action="/siswa" class="needs-validation" novalidate="">
                    @csrf
                  <div class="card-header bg-primary text-white">
                    <h4>Silahkan Isi Biodata Siswaa</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nama Lengkapa</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" required value="{{ old('nama') }}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Kelas</label>
                      <div class="col-sm-9">
                        <input type="text" name="kelas" class="form-control @error('kelas') is-invalid @enderror" required value="{{ old('kelas') }}">
                        @error('kelas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">NISN</label>
                        <div class="col-sm-9">
                          <input type="number" name="nisn" class="form-control @error('nisn') is-invalid @enderror" required value="{{ old('nisn') }}">
                          @error('nisn')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">No Ujian</label>
                        <div class="col-sm-9">
                          <input type="text" name="no_ujian" class="form-control @error('no_ujian') is-invalid @enderror" required value="{{ old('no_ujian') }}">
                          @error('no_ujian')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>
                      </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Status</label>
                      <div class="col-sm-9">
                        <select name="status" class="form-control">
                            <option value="1">Lulus</option>
                            <option value="0">Tidak Lulus</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group mb-0 row">
                      <label class="col-sm-3 col-form-label">Pesan</label>
                      <div class="col-sm-9">
                        <textarea name="pesan" class="form-control @error('pesan') is-invalid @enderror" required >{{ old('pesan') }}</textarea>
                        @error('pesan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
        </div>
      </div>
    
    </div>
  </section>
@endsection