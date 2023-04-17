<?php

use App\Models\CalonAdmin;

?>

@extends('template.sidebarAdmin')

@section('title')
Calon Admin
@endsection
@section('navbar-name')
Calon Admin
@endsection

@section('content')
<section class="home-section">
    @include('template.navbar')
    <div class="main-section p-5">
        <div class="nav-crud">
            <div class="row pb-2">
                <div class="col">
                    <select name="" id="" class="form-select rounded-md outline-none cursor-pointer text-white" style="width:60px">
                        <option selected="5" value="5">5</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="col justify-content-end d-flex ">
                    <form class="form">
                        <label for="search">
                            <input required="" autocomplete="off" placeholder="search..." id="search" type="text">
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
                    <table>
                        <thead>
                            <tr>
                                <th class="p-2">No</th>
                                <th class="p-2">Nama</th>
                                <th class="p-2">Email</th>
                                <th class="p-2">Created</th>
                                <th class="p-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse(CalonAdmin::all() as $post)
                            <tr>
                                <td class="p-2">{{$loop->iteration}}</td>
                                <td class="p-2">{{$post->nama}}</td>
                                <td class="p-2">{{$post->email}}</td>
                                <td class="p-2">{{\Carbon\Carbon::parse($post->created_at)->isoFormat('D MMM YYYY, hh:mm')}}</td>
                                <td class="p-2">
                                    <div class="row">
                                        <div class="col">
                                            <a href="#accept/{{$post->id}}" class="btn btn-primary text-white" data-bs-toggle="modal">accept</a>
                                        </div>
                                        <div class="col" style="padding-left:0px;">
                                            <a href="#reject/{{$post->id}}" class="btn btn-outline-primary" data-bs-toggle="modal">reject</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>Tidak ada data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <hr style="color:#1d1b31">
                </div>
                <div class="row" style="padding-left:10px;padding-right:10px">
                    <div class="col fw-semibold" style="font-size: 0.8em;">Total {{CalonAdmin::count()}} data</div>
                    <div class="col d-flex justify-content-end">
                        pagination
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@include('admin.nontifikasi.calonAdmin.component.accept')
@include('admin.nontifikasi.calonAdmin.component.reject')

@endsection