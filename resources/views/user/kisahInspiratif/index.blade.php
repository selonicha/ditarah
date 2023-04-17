<?php

use App\Models\KisahInspiratif;

?>

@push('style')
<link rel="stylesheet" href="{{asset('asset/css/template/cardPreview.css')}}">
@endpush

@extends("template.sidebarUser")

@section('navbar-name')
Sejarah
@endsection
@section('content')

<section class="home-section">
    @include('template.navbar')

    <div id="topik-utama" class="" style="padding-bottom:60px">
        @forelse(KisahInpiratif::orderBy('created_at','desc')->paginate(1) as $post)
        <a class="text-decoration-none" style="color:black" href="/showSejarah/{{$post->id}}">
            <div class="mycard p-5">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <h3>{{$post->judul}}</h3>
                        </div>
                        <div class="row">
                            <h6 class="fw-light" style="font-size:0.8em;overflow:hidden;height:300px">{{$post->penjelasan}}</h6>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        <img src="{{asset('storage/'.$post['file'])}}" alt="" style="height:300px !important;width:600px !important;" class="img-fluid">
                    </div>
                </div>
            </div>
        </a>
        @empty
        <div class="justify-content-center">
            Data kosong
        </div>
        @endforelse
    </div>
    </div>

    <div class="trending-topik" style="padding-top:40px;">
        <div class="row">
            <div class="col" style="font-size:1.5em;margin-left:15px">
                <span class="unique-char fw-semibold">#</span> Trending Isu
            </div>
        </div>
        <div class="row">
            @forelse(KisahInpiratif::all() as $post)
            <div class="col-lg-4 pb-2">
                <div class="card h-90" style="">
                    <img class="card-img-top img-fluid" src="{{asset('storage/'.$post['file'])}}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">{{$post->judul}}</h5>
                        <p class="card-text " style="overflow:hidden;width:250px;height:205px;font-size: 0.8em;">
                            {{$post->penjelasan}}
                        </p>
                        <a href="/showSejarah/{{$post->id}}" class="btn btn-outline-primary" style="">Read more</a>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
      <div class="col">
        <div class="card" style="width:300px">
          <div class="card-img">
            <img src="{{asset('storage/'.$post['file'])}}" alt="" style="width:600px;height:250px;z-index:100px" class="rounded img-thumbnail p-2">
        </div>
        <div class="card-info">
          <p class="text-title">{{$post->judul}}</p>
          <p class="text-body">{{$post->penjelasan}}</p>
          <a href="/showTrendingIsuUser/{{$post->id}}" class="text-decoration-none">
            <button class="card-button">Read More</button>
          </a>
        </div>
      </div>
    </div>
  </div> -->
            @empty
            <div>Data kosong</div>

            @endforelse
        </div>



</section>

@endsection