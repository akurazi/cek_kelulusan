@extends('layouts.main')
@section('content')
<section class="section">
    <div class="section-header">
      {{-- <h1 align="center">List Siswa</h1> --}}
    </div>
    <div class="callout callout-primary alert-dismissible fade show">
        <h4><i class="fas fa-fw fa-info-circle"></i> Upload Data Siswa !</h4>
        Silahkan Upload Data siswa dengan Format File Ini : <a href="/files/format/EXEL-IMPORT-SISWA.xlsx" class="btn btn-sm btn-success">Download Format Excel</a> </p>
      </div>
      
    <div class="section-body">
      <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="/siswa/import_excel" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">
                  <div class="card-header">
                    <h4>Upload Data Siswa</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                        @csrf
                      <label>Import Excel</label>
                        <input type="file" name="file_excel" class="form-control">
                        @error('file_excel')
                        {{ $message }}
                        @enderror
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