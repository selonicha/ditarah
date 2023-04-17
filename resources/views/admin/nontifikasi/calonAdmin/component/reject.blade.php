<?php

use App\Models\CalonAdmin;



?>

@forelse(CalonAdmin::all() as $post)
<div class="modal fade" id="reject/{{$post->id}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" style="">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color:#e4e9f7">
            <div class="modalHeader p-2">
                <div class="row p-3">
                    <div class="col-10 justify-content-center align-items-center d-flex">
                        <h2 class="fw-bold d-flex justify-content-center" style="padding-left:50px">Reject</h2>
                    </div>
                    <div class="col-2 justify-content-end d-flex">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <div class="row">
                    <h6 class="fw-light text-center" style="padding-right:10px;">Apakah kamu yakin untuk menolak
                        <span class="unique-char fw-bold">{{$post->nama}}</span>
                        sebagai admin?
                    </h6>
                </div>
                <div class="modal-body">
                    <form action="/reject/{{$post->id}}" method="">
                        <!-- <div class="row">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="alasanTolak" aria-describedby="alasanTolaklHelp" name="alasanTolak" placeholder="berikan alasan...">
                            </div>
                        </div> -->
                        <div class="justify-content-center align-items-center d-flex">
                            <div class="submit d-flex justify-content-center align-items-center">
                                <button class="fw-bold text-white btn" role="button" style="background-color:#1d1b31; width:300px">iya</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
            </div> -->
        </div>
    </div>
</div>

@empty
<div>Tidak ada data</div>
@endforelse