 <html>
<head>
<title></title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">
</head>
<body>
 <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Biodata Mahasiswa</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            
              <li class="menu-header">Halaman Awal</li>
              <li class="nav-item dropdown ">
                <a href="{{ route('upload.index') }}"  ><i class="fas fa-fire"></i><span>Lihat Data</span></a>
            
              </li>
              <li class="menu-header">Starter</li>
              <li class="nav-item dropdown ">
                <a href="{{route('upload.create')}}"  ><i class="fas fa-columns"></i> <span>Tambah Data</span></a>
              </li>
              
          
              <li class="menu-header">Akun</li>
              <li class="nav-item dropdown">
                <a href="#" ><i class="far fa-user"></i> <span>Akun Saya</span></a>
              </li>
             
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="{{ URL::action('UserController@logout') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Keluar
              </a>
            </div>
        </aside>
      </div>

      @yield('sidebar')

    </body>
    </html>