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
              <h3 style="text-align: center">Ubah Format SKL</h3>
            </div>
            <div class="card-body">
              <form action="/skl/update/1" method="post" enctype="multipart/form-data">
                @csrf
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Sekolah</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control @error('nama_sekolah') is-invalid @enderror" name="nama_sekolah" value="{{ $data->kop_nama_sekolah }}">
                  @error('nama_sekolah')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tahun Pelajaran</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="kop_th_pelajaran" value="{{ $data->kop_th_pelajaran }}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Alamat Sekolah</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="kop_alamat" value="{{ $data->kop_alamat }}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Telepon</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="kop_telepon" value="{{ $data->kop_telepon }}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Website</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="kop_website" value="{{ $data->kop_website }}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" name="kop_email" value="{{ $data->kop_email }}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Dinas</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control @error('nama_dinas') is-invalid @enderror" name="nama_dinas" value="{{ $data->kop_nama_disdik }}">
                  @error('nama_dinas')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Logo Dinas</label>
                <div class="col-sm-9">
                  <input type="file" class="form-control @error('logo_dinas') is-invalid @enderror" name="logo_dinas">
                  @error('logo_dinas')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Surat</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="nama_surat" value="{{ $data->nama_surat }}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">No Surat</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="no_surat" value="{{ $data->no_surat }}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Pembuka Surat</label>
                <div class="col-sm-9">
                  <textarea class="form-control" name="pembuka_surat" style="height:100px;">{{ $data->pembuka_surat }}</textarea>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Penutup Surat</label>
                <div class="col-sm-9">
                  <textarea class="form-control" name="penutup_surat" style="height:100px;">{{ $data->penutup_surat }}</textarea>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Penandatangan</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="nama_penandatangan" value="{{ $data->nama_penandatangan }}">
                </div>
              </div>            
                            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Jabatan Penandatangan</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="jabatan_penandatangan" value="{{ $data->jabatan_penandatangan }}">
                </div>
              </div>
                            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tempat</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="tempat" value="{{ $data->tempat }}">
                </div>
                <label class="col-sm-1 col-form-label">Tanggal</label>
                <div class="col-sm-4">
                  <input type="date" class="form-control" name="tanggal" value="{{ $data->tanggal }}">
                </div>
              </div>
                            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tanda Tangan</label>
                <div class="col-sm-9">
                  <input type="file" class="form-control" name="tanda_tangan">
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