@extends('layouts.main')
@section('content')
<section class="section">
    <div class="section-header">
      <h1 align="center">Edit Siswa</h1>
    </div>      
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="section-body">
      <div class="row">
        <div class="col-12">
            <div class="card">
                <form method="post" action="/siswa/{{ $siswa->nisn }}" class="needs-validation" novalidate="">
                    @csrf
                    @method('put')
                  <div class="card-header">
                    <h4>Silahkan Isi Biodata Siswa</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" required value="{{ old('nama',$siswa->name) }}">
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
                        <input type="text" name="kelas" class="form-control @error('kelas') is-invalid @enderror" required value="{{ old('kelas',$siswa->class) }}">
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
                          <input type="number" readonly name="nisn" class="form-control @error('nisn') is-invalid @enderror" required value="{{ old('nisn',$siswa->nisn) }}">
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
                          <input type="text" name="no_ujian" class="form-control @error('no_ujian') is-invalid @enderror" required value="{{ old('no_ujian',$siswa->no_exam) }}">
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
                            <option value="1" {{ $siswa->status == 1 ? "selected" : "" }}>Lulus</option>
                            <option value="0" {{ $siswa->status == 0 ? "selected" : "" }}>Tidak Lulus</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group mb-0 row">
                      <label class="col-sm-3 col-form-label">Pesan</label>
                      <div class="col-sm-9">
                        <textarea name="pesan" class="form-control @error('pesan') is-invalid @enderror" required >{{ old('pesan',$siswa->message) }}</textarea>
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