  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>
</head>

<body>
   @if(Session::has('msg'))
  <b class="text-success">{{ Session::get('msg')}}</b>

    
  @endif
  <div id="app">
    <div class="main-wrapper">
      @include('layout.navbar')
      @include('layout.sidebar')
      <div class="main-content">
        <section class="section">
             <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                 @yield('main')
                </div>
            </div>
</div>

</div>
</div>
