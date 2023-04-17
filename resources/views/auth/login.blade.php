@extends('template.master')

@push("style")
<link rel="stylesheet" href="{{asset('asset/css/auth/auth.css')}}">
@endpush


@section('body')

<body class="">
  <div class="login d-flex justify-content-center align-items-center">
    <form action="authLogin" method="post" class="login-form" style="width: 300px; height:200px">
      @csrf
      <div class="textLogin pb-4 align-items-center">
        <h2 class="fw-bold d-flex justify-content-center">login</h2>
        <h5 class="fw-semid=bold d-flex justify-content-center ">welcome back!</h5>
      </div>
      <div class="mb-3">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email" placeholder="email...">
      </div>
      @error('name')
      <div class="invalid-feedback">
        {{message}}
      </div>
      @enderror
      <div class="mb-3">
        <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" name="password" placeholder="password...">
      </div>
      <div class="help d-flex justify-content-center">
        <h6 class="fw-light">Tidak punya akun?<span class="fw-semibold">
            <a href="register" style="text-decoration:none;">daftar sekarang</a>
          </span></h6>
      </div>
      <div class="submit d-flex justify-content-center align-items-center">
        <button class="fw-bold text-white btn" role="button" style="background-color:#1d1b31; width:100%">kirim</button>
      </div>
    </form>
  </div>
</body>
@endsection