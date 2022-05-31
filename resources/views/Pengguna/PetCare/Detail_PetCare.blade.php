<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aurora Petshop</title>

    @laravelPWA

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="/Zay/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Zay/assets/css/templatemo.css">
    <link rel="stylesheet" href="/Zay/assets/css/custom.css">
    
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="/Zay/assets/css/fontawesome.min.css">

</head>

<body style="background-color: #F9F9F9">
    <!-- Start Top Nav -->
    {{-- @include('Layout.Pengguna-Layout.TopNav') --}}
    <!-- Close Top Nav -->

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F9F9F9">
        <div class="container d-flex justify-content-between align-items-center">
    
            <a class="navbar-brand text-success logo h1 align-self-center" href="/beranda">
                Aurora
            </a>
    
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/shop">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/petcare">PetCare</a>
                        </li>
                    </ul>
                </div>
                
                <div class="navbar align-self-center d-flex">
    
                    <!-- Search Handphone View -->
                    {{-- <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div> --}}
    
                    <!-- Ikon Search -->
                    {{-- <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a> --}}
    
                    @if (Auth::guest())
                        <button type="button"  class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Masuk
                        </button>
                    @else
                        <div>
                            <a class="nav-icon position-relative text-decoration-none" href="/cart" role="button" aria-expanded="false">
                                <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                                <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-white text-dark"></span>
                            </a>
                        </div>
                        <div class="dropdown">
                            <a class="nav-icon position-relative text-decoration-none" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-fw fa-user text-dark mr-3"></i>
                                {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
                            </a>
                        
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            {{-- <li><a class="dropdown-item" href="#">Profil</a></li> --}}
                            <li><a class="dropdown-item" href="{{ route('postlogout_user') }}">Logout</a></li>
                            </ul>
                        </div>
                    @endif
      
                    <!-- Modal Login -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Masuk</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('postlogin_user') }}" method="post">
    
                                        {{ csrf_field() }}
                        
                                        <div class="form-group mb-3">
                                          <label for="email" class="sr-only">Email</label>
                                          <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                                        </div>
                                        <div class="form-group mb-3">
                                          <label for="password" class="sr-only">Password</label>
                                          <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                                        </div>
                                        <div class="d-grid mx-auto">
                                            <button class="btn btn-outline-success" type="submit">Submit</button>
                                        </div>
                                        <div class="d-grid mx-auto">
                                            <p class="fs-6">Belum Punya Akun? <a href="/register" class="fs-6">Daftar Disini</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal Search Bar -->
    {{-- <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div> --}}

    <!-- Start Body -->
    <section>
        <div class="container pb-5" style="background-color: #F9F9F9">
            <form action="{{ url('/add-order-petcare') }}" method="POST">

                {{ csrf_field() }}

                <div class="row">
                    
                    {{-- Tab Kiri --}}
                    
                    <div class="col-lg-5 mt-5" style="background-color: white">
                        <div class="card border-light mb-3">
                            <img class="card-img img-fluid" src="{{ asset('img-Cage/'. $siCage->gambar) }}" alt="Card image cap" id="product-detail">
                        </div>

                        {{-- <div class="row">

                            <!--Start Controls-->
                            <div class="col-1 align-self-center">
                                <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                    <i class="text-dark fas fa-chevron-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </div>
                            <!--End Controls-->

                            <!--Start Carousel Wrapper-->
                            <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                                <!--Start Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/Zay/assets/img/product_single_01.jpg" alt="Product Image 1">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/Zay/assets/img/product_single_02.jpg" alt="Product Image 2">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/Zay/assets/img/product_single_03.jpg" alt="Product Image 3">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/Zay/assets/img/product_single_04.jpg" alt="Product Image 4">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/Zay/assets/img/product_single_05.jpg" alt="Product Image 5">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/Zay/assets/img/product_single_06.jpg" alt="Product Image 6">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/Zay/assets/img/product_single_07.jpg" alt="Product Image 7">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/Zay/assets/img/product_single_08.jpg" alt="Product Image 8">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="/Zay/assets/img/product_single_09.jpg" alt="Product Image 9">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.Third slide-->
                                </div>
                                <!--End Slides-->
                            </div>
                            <!--End Carousel Wrapper-->

                            <!--Start Controls-->
                            <div class="col-1 align-self-center">
                                <a href="#multi-item-example" role="button" data-bs-slide="next">
                                    <i class="text-dark fas fa-chevron-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!--End Controls-->
                        </div> --}}
                    </div>
                    <!-- col end -->

                    {{-- Tab Kanan --}}
                    <div class="col-lg-7 mt-5">
                        <div class="card border-light">
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-6">
                                        <input type="hidden" type="number" name="cage_id" value={{ $siCage->id }}>
                                        
                                        <h1 class="h2">Kandang {{ $siCage->nama_kandang }}</h1>
                                        <input type="hidden" type="number" name="nama_kandang" value={{ $siCage->nama_kandang }}>
                                        
                                        <p class="fs-5 py-2">Ukuran {{ $siCage->size->size }}</p>
                                        <input type="hidden" type="text" name="ukuran_kandang" value={{ $siCage->size->size }}>
                                        
                                        <input type="hidden" type="number" name="harga_kandang" value={{ $siCage->size->harga }}>
                                        <input type="hidden" type="number" name="jumlah_kandang" value={{ 1 }}>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-end">
                                            <p class="fs-5 py-2">Rp {{ number_format($siCage->size->harga) }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <p class="fs-6 col-6 mt-2 text-left mt-1">Untuk Hewan</p>
                                    <p class="fs-6 col-6 text-left mt-1">
                                        <select type="text" id=jenis_hewan name=jenis_hewan class="form-control" aria-label="Default select example" style="height:40px">
                                            <option disabled value>Pilih Hewan</option>
                                            @foreach ($dtPet as $item)
                                            <option value="{{ $item->pet }}">{{ $item->pet }}</option>
                                            @endforeach
                                        </select>
                                    </p>
                                
                                {{-- Bintang --}}
                                {{-- <p class="py-2">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                                </p> --}}

                                {{-- Merek --}}
                                {{-- <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <h6>Brand:</h6>
                                    </li>
                                    <li class="list-inline-item">
                                        <p class="text-muted"><strong>Easy Wear</strong></p>
                                    </li>
                                </ul> --}}

                                <div class="row">
                                    <div class="col-12">                 
                                        {{-- <p>{{ $siPrdct->deskripsi }}</p> --}}
                                    </div>
                                </div>

                                {{-- <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <h6>Stok Tersedia :</h6>
                                    </li>
                                    <li class="list-inline-item">
                                        <p class="text-muted"><strong>{{ $prdct->stok }}</strong></p>
                                    </li>
                                </ul> --}}

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 mb-5" style="background-color: white; border-radius: 20px">

                    <h4 class="mt-2">Data Pesanan</h4>

                    <div class="col-6 mb-4 mt-4">
                        <div class="form-group">
                            <p>Nama</p>
                            <input type="text" id=nama_kontak name=nama_kontak class="form-control">
                        </div>
                    </div>

                    <div class="col-6 mb-4 mt-4">
                        <div class="form-group">
                            <p>No Handphone</p>
                            <input type="text" id=no_tlpn name=no_tlpn class="form-control">
                        </div>
                    </div>

                    <div class="col-6 mb-4 mt-4">
                        <div class="form-group">
                            <p>Tanggal Checkin</p>
                            <input type="date" id=tanggal_checkin name=tanggal_checkin class="form-control">
                        </div>
                    </div>

                    <div class="col-6 mb-4 mt-4">
                        <div class="form-group">
                            <p>Tanggal Checkout</p>
                            <input type="date" id=tanggal_checkout name=tanggal_checkout class="form-control">
                        </div>
                    </div>

                    <div class="col-6 mb-4 mt-4">
                        <div class="form-group">
                            <p>Jumlah Hari</p>
                            <input type="number" id=jumlah_hari name=jumlah_hari class="form-control">
                            <p class="fs-6">Pastikan Jumlah hari yang anda masukan sesuai dengan anda masukan untuk mempersingkat pengecekan</p>
                        </div>
                    </div>

                    <div class="col-6 mb-4 mt-4">
                        <div class="form-group">
                            <p id=total_hari>Total Hari = </p>
                            <input type="number" name="total_hari" id="total_hari" value="total_hari">
                        </div>
                    </div>

                    <button onclick="calculateDays()">Get Difference</button>
                    
                    <div class="col-12 mb-4 mt-4">
                        <div class="form-group">
                            <p>Alamat</p>
                            <textarea type="text" id=alamat name=alamat class="form-control" style="height: 100px"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row mb-5 mt-2" style="background-color: white; border-radius: 15px">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item mt-2 mb-2">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <i class="fa-solid fa-person-walking-arrow-loop-left"></i>Tidak Dapat di Refund
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Tidak bisa refund & reschedule
                                Pemesanan penitipan hewan ini tidak bisa di-refund atau di-reschedule. 
                                Jika tidak datang ke tempat untuk check-in, kamu akan dianggap no-show dan tidak diberikan pengembalian dana.</div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-5 mt-2" style="background-color: white; border-radius: 15px">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item mt-2 mb-2">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseOne">
                                <i class="fa-solid fa-money-check-pen"></i>Status Pemesanan
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Pastikan setelah anda melakukan pembayaran, mohon menghubungi admin 
                                atau segera datang ke petshop untuk melakukan verifikasi, jika saat datang kadang sudah terisi
                                kami memberikan kompensasi pengembalian uang dengan cara Cash to Carry.
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                {{-- <div class="row" role="button" data-bs-toggle="collapse" href="#collapseExample" style="background-color: white; border-radius: 20px">
                    <div class="col-6 mt-4 mb-3">
                        <h4>Total Harga</h4>
                    </div>
                    <div class="col-6 mt-4 text-end">
                        <p>Rp {{ $siCage->size->harga }}</p>
                    </div>
        
                    <div class="collapse" id="collapseExample" style="background-color: white; border-radius: 20px">
                        <div class="row mt-4">
                            <div class="col-6">
                                <p>Tanggal Checkin</p>
                            </div>
                            <div class="col-6 text-end">
                                <p></p>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-6">
                                <p>Tanggal Checkout</p>
                            </div>
                            <div class="col-6 text-end">
                                <p id="tanggal_checkout"></p>
                            </div>
                        </div>
                        <div class="row mt-4 mb-1">
                            <div class="col-6">
                                <p>Durasi</p>
                            </div>
                            <div class="col-6 text-end">
                                <p>{{ number_format($siCage->size->harga) }} X  Hari</p>
                            </div>
                        </div>
                    </div>
                </div> --}}

                

                <div class="mt-5 d-grid center">
                    <button type="button"  class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModalPayment"> Pesan </button>
                </div>

                <!-- Modal Pemilihan Transfer -->
                <div class="modal fade" id="exampleModalPayment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pilih Pembayaran</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="col-lg-12 mt-2">
                                
                                    @foreach ($dtBank as $item)
                                    <div class="row">
                                        
                                        <!-- Foto Bank -->
                                        {{-- <div class="col-5 col-md-4">
                                            <a href=""><img src="{{ asset('img-Product/'. $item->product->gambar) }}" class="rounded img-fluid"></a>
                                        </div> --}}
        
                                        <div class="col-12 col-md-12">
                                            <div class="row">
                                                <div class="col-10 col-md-10">
                                                    <!-- Nama Bank -->
                                                    <p class="text-uppercase fw-bold">{{ $item->bank }}</p>
                                                </div>
                                                <div class="col-2 col-md-2">
                                                    <input class="form-check-input" style="background-color:#03ac0e" type="radio" name="bank_id" id="bank_id" value="{{ $item->id }}">
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mt-3 mb-4">
                                    </div>
                                    @endforeach
                                    
                                    {{-- <div class="row mt-4">
                                        <div class="col-12 col-md-12">
                                            <div class="row">
                                                <div class="col-10 col-md-10">
                                                    <p class="fw-bold">Ringkasan Pembayaran</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-6">
                                                    <p class="fs-6">Total Bayar<p>
                                                </div>
                                                <div class="col-6 col-md-6 text-end">
                                                    <p class="fs-6">Rp {{ number_format(+550) }}<p>
                                                    <input type="hidden" type="number" name="total_bayar" value={{ $item->sum('jumlah_harga')+550 }}>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-6">
                                                    <p class="fs-6">Diskon<p>
                                                </div>
                                                <div class="col-6 col-md-6 text-end">
                                                    <p class="fs-6">{{ $item->diskon }}<p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="row">
                                        <div class="col-6 col-md-6">
                                            
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <div class="d-grid mx-auto">
                                                <button class="btn btn-outline-success" type="submit">Bayar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </section>

    <!-- Start Style -->
    <style>
        a{
            text-decoration: none;
            color: black
        }
        a:hover{
            color: black
        }
        .accordion-button:not(.collapsed) {
            color: black;
            background-color: white;
            border-color: #F2F2F2;
        }
    </style>
    <!-- End Style -->

    <!-- Start Footer -->
    @include('Layout.Pengguna-Layout.Footer')
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="https://kit.fontawesome.com/1c164f6dc6.js" crossorigin="anonymous"></script>
    <script src="/Zay/assets/js/jquery-1.11.0.min.js"></script>
    <script src="/Zay/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/Zay/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/Zay/assets/js/templatemo.js"></script>
    <script src="/Zay/assets/js/custom.js"></script>

    <script>
        function calculateDays() {
        var d1 = document.getElementById("tanggal_checkin").value;
        var d2 = document.getElementById("tanggal_checkout").value;    
        const dateOne = new Date(d1);
        const dateTwo = new Date(d2);
        const time = Math.abs(dateTwo - dateOne);
        const days = Math.ceil(time / (1000 * 60 * 60 * 24));
        document.getElementById("total_hari").innerHTML=days;    
        }    
    </script>

    {{-- <script>
        $('#tanggal_checkout').on('input',function(e){
            var tgl_checkin  = $('#tanggal_checkin');
            var tgl_checkout = $('#tanggal_checkout');

            var url         = "filephp/functionnya"

            $.ajax({
            method : "post",
            url    : url, // url nya arahin ke index dan function durasi, saya gatau agan pake framework apa hehe
            data   : {tanggal_pinjam : tgl_pinjam, tanggal_kembali : tgl_kembali},
            success : function(data){
                // coba console dsni berhasil apa engga nya
                // 
                $('#durasi').val(data);
            
            }
            })
        });
    </script> --}}
    <!-- End Script -->
</body>

</html>