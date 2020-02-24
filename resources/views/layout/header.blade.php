
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="{{ URL::action('UploadsController@login') }}">Admin Login</a></li>
      </ul>
    </nav>
  </div>
</div>
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <div id="logo" class="fl_left">
      <h1>Data Mahasiswa</h1>
    </div>
    <div class="fl_right">
       <form method="GET" class="clear">
              <fieldset>
          <legend>Search:</legend>
                <input type="text" name="search" placeholder="Search" value="{{ request()->get('search') }}">
                <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
            </form>
    </div>
  </header>
</div>


<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <ul class="clear">
        <li ><a href="{{ route('front.index') }}" >Beranda</a></li>
        <li ><a href="{{route('front.create')}}" >Tambah Data</a></li>
        <li><a href="#">Pengumuman</a></li>
      </ul>

    </nav>
  </div>
</div>