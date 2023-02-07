@extends("template.sidebarAdmin")

@section('content')
<section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text">
            Topik utama
        </span>
    </div>

    <div class="main-section p-5">
        <div class="nav-crud">
            <div class="row pb-2">
                <div class="col">
                    <div class="submit d-flex justify-content-start align-items-center">
                        <a href="tambahTopikUtama" class="text-decoration-none">
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
                    <table>
                        <thead>
                            <tr>
                                <th class="p-2 fw-semibold" style="width:5%;">No</th>
                                <th class="p-2 fw-semibold" style="width: 37%;">Judul</th>
                                <th class="p-2 fw-semibold" style="width:15%;">Jam</th>
                                <th class="p-2 fw-semibold" style="width:25%;">Tanggal</th>
                                <th class="p-2 fw-semibold" style="width:30%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="p-2 fw-light">1</th>
                                <th class="p-2 fw-light">Lorem Ipsum</th>
                                <th class="p-2 fw-light">09.00</th>
                                <th class="p-2 fw-light">02 Februari 2023</th>
                                <th class="p-2 fw-light">detail | edit | delete</th>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</section>



<script>

</script>

@endsection