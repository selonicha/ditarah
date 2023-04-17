<div class="modal fade" id="register" aria-hidden="true" tabindex="-1" style="">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color:#e4e9f7">
            <div class="modalHeader p-2">
                <div class="row">
                    <div class="col-10 justify-content-center align-items-center d-flex">
                        <h2 class="fw-bold d-flex justify-content-center" style="padding-left:50px">register</h2>
                    </div>
                    <div class="col-2 justify-content-end d-flex">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <div class="row">
                    <h5 class="fw-semid=bold d-flex justify-content-center" style="padding-right:40px;">Hi! Pengguna baru</h5>
                </div>
            </div>
            <div class="modal-body justify-content-center align-items-center d-flex">
                <form action="authRegister" method="post" class="login-form ">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" id="text" aria-describedby="nameHelp" name="nama" placeholder="nama...">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="email...">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" name="password" placeholder="password...">
                    </div>
                    <div class="help justify-content-center align-items-center d-flex">
                        <h6 class="fw-light">Sudah punya akun? <span class="fw-semibold">
                                <a href="#login" data-bs-target="#login" data-bs-toggle="modal" data-bs-dismiss="modal" style="text-decoration:none;">login sekarang</a>
                            </span></h6>
                    </div>
                    <div class="submit d-flex justify-content-center align-items-center">
                        <button class="fw-bold text-white btn" role="button" style="background-color:#1d1b31; width:100%">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>