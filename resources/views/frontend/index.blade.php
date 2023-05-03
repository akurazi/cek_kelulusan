<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{ $web->title }}</title>

   <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link rel="stylesheet" href="{{ asset('assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <nav class="navbar bg-primary">
        <img src="{{ asset('files/logo/'.$web->logo) }}" width="50" height="50">
        <a class="navbar-brand" href="">{{ $web->web_name }}</a>
        @if(Auth::guest())
        <a class="btn btn-warning" href="/login">Login</a>
        @else
        <a class="btn btn-warning" href="/logout">Logout</a>
          @endif
      </nav>
      <!-- Main Content -->
      <div class="main-content text-center">
        
        <section class="section">
          <div class="section-body">
            <h1>PENGUMUMAN KELULUSAN</h1>
        <h2>SMK Putra Anda Binjai<br>
          Tahun Pelajaran 2022/2023</h2>
          <br>

          
          @if($setting->status == 'Buka')
          <form method="get">
          <input type="text" class="form-control" name="search" placeholder="Masukkan Nomor Ujian" style="margin:0 auto;border-radius:5px; width:700px;" value="{{ $cari }}">
          <p>Masukkan Nomor Ujian Contoh : 204-0982-0000</p>
          <input type="submit" class="btn btn-primary" style="width:80px;" value="Cari">
          </form>
         @else
          <div class="alert alert-warning alert-has-icon" style="margin:0 auto; width:700px;">
            <div class="alert-icon">
              <i class="fas fa-exclamation-triangle"></i>
            </div>
            <div class="alert-body">
              <div class="alert-title">
                Belum Di Buka
              </div>
            </div>
            </div>
          
          </div>
          @endif

          <br>
          <br>
          {{-- {{ dd($siswa) }} --}}
          @if($cari != '')
            @if(isset($siswa))
              @if($siswa->status==1)
              <div class="alert" style="background-color: #DCF5E7;">
                  <h2 style="color:#205759;">SELAMAT! ANDA LULUS</h2>
                  <table cellpadding="10" style="color:black;font-size:16px;font-weight:bold;text-align:left;">
                    <tr>
                      <td>Nama</td>
                      <td>:</td>
                      <td>{{ $siswa->name }}</td>  
                    </tr>
                    <tr>
                      <td>Kelas</td>
                      <td>:</td>
                      <td>{{ $siswa->class }}</td>  
                    </tr>
                    <tr>
                      <td>No Ujian</td>
                      <td>:</td>
                      <td>{{ $siswa->no_exam }}</td>  
                    </tr>
                  </table>
                  <a href="/cetak/{{ $siswa->id }}" target="_blank" class="btn btn-md btn-info"><i class="fa fa-print"></i>  Cetak SKL</a>
              </div>
              @else 
              <div class="alert" style="background-color: #f5dcdc;">
                <h2 style="color:#205759;">MOHON MAAF! ANDA TIDAK LULUS</h2>
                <table cellpadding="10" style="color:black;font-size:16px;font-weight:bold;text-align:left;">
                  <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ $siswa->name }}</td>  
                  </tr>
                  <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>{{ $siswa->class }}</td>  
                  </tr>
                  <tr>
                    <td>No Ujian</td>
                    <td>:</td>
                    <td>{{ $siswa->no_exam }}</td>  
                  </tr>
                </table>
              </div> 
            @endif
            @else
             <div class="alert alert-warning">
              Data tidak Ditemukan
            </div>
            @endif
          @endif
          
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

   <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset(' assets/js/stisla.js')}}"></script>

  {{-- datatable --}}
  <script src="{{ asset('assets/node_modules/datatables/media/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('assets/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('assets/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js')}}"></script>

  <script src="{{ asset('assets/js/scripts.js')}}"></script>
  <script src="{{ asset('assets/js/custom.js')}}"></script>

  <script src="{{ asset('assets/js/page/modules-datatables.js')}}"></script>
</body>
</html>