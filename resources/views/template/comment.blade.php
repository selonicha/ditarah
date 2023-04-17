<div class="mycard p-4" style="margin-top:20px">
    <div class="conatiner">
        <div class="row fw-semibold pb-4" style="padding-left:10px;">
            <div class="col">
                <span class="unique-char">10</span> Komentar
            </div>
        </div>
        <form action="createComment" method="POST">
            @csrf
            <div class="row">
                <div class="col-11">
                    <input type="text" class="form-control comment no-border" id="comment" name="comment" placeholder="Tambahkan tanggapan..." />
                </div>
                <div class="col justify-content-center align-items-center d-flex text-decoration-none">
                    <button type="submit"><i class='bx bxs-send'></i></button>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col"></div>
            <div class="col-11"></div>
        </div>
    </div>
</div>