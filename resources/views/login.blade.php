@extends('home')
@section('title', ' Masuk')
</head>
<body>
   @section('main')
    <div id="logreg-forms">
        <form class="form-signin" action="{{ URL::action('UserController@login') }}" method="post" >
            @csrf
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Masuk</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Masuk dengan Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Masuk dengan Google</span> </button>
            </div>
            <p style="text-align:center">Atau </p>
            @if(Session::has('msg'))
            <b class="text-success">{{ Session::get('msg')}}</b>
              
            @endif
             @if(Session::has('error'))
            <b class="text-danger">{{ Session::get('error')}}</b>
              
            @endif <br>
            <input type="email" name="email" class="form-control" placeholder="Email" required="" autofocus=""><br>
            <input type="password" name="password" class="form-control" placeholder="Password" required=""><br><br>
            
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i>Masuk</button>
            <hr>
            <!-- <p>Don't have an account!</p>  -->
            <a href="{{ URL::action('UploadsController@register') }}"> Daftar Akun Baru</a>
            </form>
        </div>
  @endsection
</body>
           
