@extends('template.master')

@push("style")
<link rel="stylesheet" href="{{asset('asset/css/auth/auth.css')}}">
@endpush
@section('body')

<body class="d-flex justify-content-center align-items-center">
    <div class="login d-flex justify-content-center align-items-center">
        <form action="authLogin" method="post" class="login-form ">
            @csrf
            <div class="textLogin">
                <h1>register</h1>
                <h5>hi! new member</h5>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="text" aria-describedby="nameHelp" name="name" placeholder="name...">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="email...">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" name="password" placeholder="password...">
            </div>
            <div class="help">
                <h6 class="fw-light">Sudah punya akun? <span class="fw-semibold">
                        <a href="login" style="text-decoration:none;">login sekarang</a>
                    </span></h6>
            </div>
            <div class="submit d-flex justify-content-center align-items-center">
                <button class="fw-bold text-white btn" role="button" style="background-color:#1d1b31; width:100%">submit</button>
            </div>
        </form>
    </div>
</body>
@endsection