<?php

use App\Models\KisahInspiratif;
?>
@extends("template.sidebarAdmin")

@section('title')
Kisah Inspiratif
@endsection
@section('navbar-name')
Kisah Inspiratif
@endsection

@section('content')
<section class="home-section">
    @include('template.navbar')

    <div class="main-section p-5">
        <div class="nav-crud">
            <div class="row pb-2">
                <div class="col">
                    <div class="submit d-flex justify-content-start align-items-center">
                        <a href="tambahKisahInspiratif" class="text-decoration-none">
                            <button id="button-crud" class="button-crud fw-bold text-white btn" role="button" style="background-color:#1d1b31; width:100px">
                                tambah
                            </button>
                        </a>

                    </div>
                </div>
                <div class="col justify-content-end d-flex ">
                    <form class="form">
                        <label for="search">
                            <input required="" autocomplete="off" placeholder="cari data" id="search" type="text">
                            <div class="icon">
                                <i class="bx bx-search"></i>
                            </div>
                            <button type="reset" class="close-btn">
                                <svg viewBox="0 0 20 20" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </label>
                    </form>
                </div>
            </div>
        </div>
        <div class="mycard">
            <div class="content-part p-3">
                <div class="col">
                    <table class="">
                        <thead>
                            <tr>
                                <th class="p-2">No</th>
                                <th class="p-2" style="">
                                    Judul
                                </th>
                                <th class="p-2">
                                    Penulis
                                </th>
                                <th class="p-2">
                                    Created
                                </th>
                                <th class="p-2">
                                    Update
                                </th>
                                <th class="p-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse(KisahInspiratif::simplePaginate(5) as $post)
                            <tr style="padding: 15px;" class="mb-5">
                                <td class="p-2">{{$loop->iteration}}</td>
                                <td class="p-2">{{$post->judul}}</td>
                                <td class="p-2">{{$post->penulis}}</td>
                                <td class="p-2">{{\Carbon\Carbon::parse($post->created_at)->isoFormat('D MMM YYYY, hh:mm')}}</td>
                                <td class="p-2">{{\Carbon\Carbon::parse($post->updated_at)->isoFormat('D MMM YYYY, hh:mm')}}</td>
                                <td class="p-2 d-flex">
                                    <a href="/showTrendingIsu/{{$post->id}}" class="btn bx bxs-show"></a>
                                    <a href="/editTrendingIsu/{{$post->id}}" class="btn bx bxs-pencil"></a>
                                    <form action="/deleteTrendingIsu/{{$post->id}}" method="delete" class="">
                                        <div class="btn bx bxs-trash-alt"></div>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>Tidak ada data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <hr style="color:#1d1b31">
            </div>
            <div class="row" style="padding-left:10px;padding-right:10px">
                <div class="col fw-semibold" style="font-size: 0.8em;">Total {{KisahInspiratif::all()->count()}} data</div>
                <div class="col d-flex justify-content-end">
                    pagination
                </div>
            </div>
        </div>
    </div>

</section>


@endsection