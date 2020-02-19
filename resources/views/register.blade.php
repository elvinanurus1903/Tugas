

   @extends('home')
   @section('title', ' Daftar Akun')
<body>
   
@section('main')
    <div id="logreg-forms">
        <form class="form-signin" action="{{ URL::action('UserController@store') }}" method="post" >

            @csrf
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Daftar</h1>
           
            @if(Session::has('error'))
        <b class="text-danger">{{ Session::get('error')}}</b>
          
        @endif
            <input type="text" name="name" class="form-control" placeholder="Nama" required="" autofocus=""><br>
            <input type="email" name="email" class="form-control" placeholder="Email" required="" autofocus=""><br>
            <input type="password" name="password" class="form-control" placeholder="Password" required=""><br>
            <input type="password" name="cpassword" class="form-control" placeholder="Konfirmasi Password" required=""><br>
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i>Daftar</button>
            <hr>
            <!-- <p>Don't have an account!</p>  -->
            <a href="{{ URL::action('UploadsController@login') }}"> Masuk dengan akun yang ada</a>
            </form>
</div>
@endsection
</body>
</html>

           
