@extends("template.sidebarAdmin")

@section('title')
Event Login
@endsection

@section('navbar-name')
Event Login
@endsection

@section('column2')
Nama
@endsection

@section('column3')
Email
@endsection

@section('column4')
Jam
@endsection

@section('column5')
Tanggal
@endsection

@section('content')

<section class="home-section">
    @include('template.navbar')
    @include('template.crudPartNotCreate')
</section>



@endsection