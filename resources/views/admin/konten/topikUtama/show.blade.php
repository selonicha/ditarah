@extends('template.master')


@section('value-body')
<div class="mycard p-4">
    <div class="container">
            <div class="row" style="padding-top:5px;padding-bottom:50px">
                <h2 class=" align-items-center justify-content-center d-flex">{{$topikUtama['judul']}}</h2>
            </div>
            <div class="row" style="display: flex; justify-content:center;padding-bottom:50px">
                <img src="{{asset('storage/'.$topikUtama['file'])}}" alt="" style="width:500px;height:500px" class="align-items-center justify-content-center d-flex" />
            </div>
            <div class="row">
                {{$topikUtama['penjelasan']}}
            </div>
            
        
    </div>
</div>
@endsection