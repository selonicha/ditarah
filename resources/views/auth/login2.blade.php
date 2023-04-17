<div class="modal fade" id="login" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" style="">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color:#e4e9f7">
            <div class="modalHeader p-2">
                <div class="row">
                    <div class="col-10 justify-content-center align-items-center d-flex">
                        <h2 class="fw-bold d-flex justify-content-center" style="padding-left:50px">login</h2>
                    </div>
                    <div class="col-2 justify-content-end d-flex">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <div class="row">
                    <h5 class="fw-semid=bold d-flex justify-content-center" style="padding-right:10px;">welcome back!</h5>
                </div>
            </div>
            <div class="modal-body justify-content-center align-items-center d-flex">
                <form action="authLogin" method="post" class="login-form" style="width: 300px; height:200px">
                    @csrf
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
                                <a href="#register" data-bs-target="#register" data-bs-toggle="modal" data-bs-dismiss="modal" style="text-decoration:none;">daftar sekarang</a>
                            </span></h6>
                    </div>
                    <div class="submit d-flex justify-content-center align-items-center">
                        <button class="fw-bold text-white btn" role="button" style="background-color:#1d1b31; width:100%">kirim</button>
                    </div>
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
            </div> -->
        </div>
    </div>
</div>