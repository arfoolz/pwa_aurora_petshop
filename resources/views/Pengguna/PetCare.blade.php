<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aurora Petshop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="Zay/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Zay/assets/css/templatemo.css">
    <link rel="stylesheet" href="Zay/assets/css/custom.css">
    

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="Zay/assets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
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
                                <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-white text-dark">{{ $countCart }}</span>
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
    <div style="background-color: #F9F9F9">
        <form action="{{ url('/add-order') }}" method="POST">

            {{ csrf_field() }}

            <!-- Start Tabel 1 -->
            <section class="container  ">
                    <h4>Data Pesanan</h4>
                    <div class="row mb-5" style="background-color: white; border-radius: 20px">
                        <div class="col-12 mb-4 mt-4">
                        <div class="form-group">
                            <p>Nama Kontak</p>
                            <input type="text" id=nama_pemilik name=nama_pemilik class="form-control">
                        </div>
                        </div>

                        <div class="col-12 mb-4">
                            <div class="form-group">
                              <p>Jenis Hewan</p>
                              <select type="text" id=jenis_hewan name=jenis_hewan class="form-control" aria-label="Default select example" style="height:40px">
                                <option disabled value>Pilih Hewan</option>
                                  @foreach ($dtPet as $item)
                                  <option value="{{ $item->id }}">{{ $item->pet }}</option>
                                  @endforeach
                              </select>
                            </div>
                        </div>

                        <div class="col-6 mb-4">
                            <div class="form-group">
                              <p>Ukuran Hewan</p>
                              <select type="text" id=ukuran_hewan name=ukuran_hewan class="form-control" aria-label="Default select example" style="height:40px">
                                <option disabled value>Pilih Hewan</option>
                                  @foreach ($dtSize as $item)
                                  <option value="{{ $item->id }}">{{ $item->size }}</option>
                                  @endforeach
                              </select>
                            </div>
                        </div>

                        <div class="col-6 mb-4">
                            <div class="form-group">
                                <p>Jumlah Hewan</p>
                                <input type="text" id=jumlah_hewan name=jumlah_hewan class="form-control">
                            </div>
                            </div>
                        
                        <div class="col-6 mb-4">
                            <div class="form-group">
                            <p>Tanggal Checkin</p>
                            <input type="date" id=nama_admin name=nama_admin class="form-control">
                            </div>
                        </div>

                        <div class="col-6 mb-4">
                            <div class="form-group">
                            <p>Tanggal Checkout</p>
                            <input type="date" id=nama_admin name=nama_admin class="form-control">
                            </div>
                        </div>

                        <div class="col-12 mb-4">
                        <div class="form-group">
                            <p>No Telepon</p>
                            <input type="text" id=no_tlpn name=no_tlpn class="form-control">
                            <p class="fs-6">Pastikan nomor yang dimasukan dapat dihubungi.</p>
                        </div>
                        </div>

                        <div class="col-12 mb-5">
                        <div class="form-group">
                            <p>Alamat</p>
                            <textarea type="text" id=alamat name=alamat class="form-control" style="height:100px"></textarea>
                        </div>
                        </div>

                        {{-- <div class="col-3 mb-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                            </div>
                            <div>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Hewan Dalam Keadaan Sakit</label>
                            </div>
                        </div>

                        <div class="col-9 mb-4">
                            <div class="form-group">
                            <p>Keterangan Penyakit</p>
                            <textarea type="text" id=alamat name=alamat class="form-control" style="height:100px"></textarea>
                            </div>
                        </div> --}}
                    </div>
            </section>
            <!-- End Tabel 1 -->

            <!-- Start Tabel 2 -->
            <section class="container" >
                <div class="row mb-5" style="background-color: white; border-radius: 15px">
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
            </section>
            <!-- End Tabel 2 -->

            <!-- Start Tabel 3 -->
            <section class="container" >
                <div class="row disabled" role="button" data-bs-toggle="collapse" href="#collapseExample1" style="background-color: white; border-radius: 20px">
                    <div class="col-6 mt-4 mb-3">
                        <h4>Total Harga</h4>
                    </div>
                    <div class="col-6 mt-4 text-end">
                        <p>Rp 5000</p>
                    </div>
        
                    {{-- TIDAK USAH DIPAKE UNTUK SEMENTARA --}}
                    <div class="collapse col-12" id="collapseExample" style="background-color: white; border-radius: 20px"></div>
                </div>
            </section>
            <!-- End Tabel 3 -->

            <section class="container" >
                <div class="col-12 mt-4 mb-3 text-end">
                    <div class="mt-1 center">
                        <button type="button"  class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#PaymentModal">Pilih Pembayaran</button>
                    </div>
                </div>
            </section>

            <!-- Modal Pemilihan Transfer -->
            <div class="modal fade" id="PaymentModal" tabindex="-1" aria-labelledby="PaymentModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="PaymentModalLabel">Pilih Pembayaran</h5>
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
                                                <p class="text-uppercase fw-bold ps-4">{{ $item->bank}}</p>
                                            </div>
                                            <div class="col-2 col-md-2">
                                                <input class="form-check-input" style="background-color:#03ac0e" type="radio" name="bank_id" id="bank_id" value="{{ $item->id }}">
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mt-3 mb-4">
                                </div>
                                @endforeach
                                
                                <div class="row">
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
                                                <p class="fs-6">Rp {{ $item->total_harga }}<p>
                                            </div>
                                        </div>
                                        {{-- UNTUK DISKON NANTINYA --}}
                                        {{-- <div class="row">
                                            <div class="col-6 col-md-6">
                                                <p class="fs-6">Diskon<p>
                                            </div>
                                            <div class="col-6 col-md-6 text-end">
                                                <p class="fs-6">{{ $item->diskon }}<p>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="row">
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

    <!-- Start Style -->
    <style>
        /* a{
            text-decoration: none;
            color: black
        }
        a:hover{
            color: black
        } */
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
    <script src="Zay/assets/js/jquery-1.11.0.min.js"></script>
    <script src="Zay/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="Zay/assets/js/bootstrap.bundle.min.js"></script>
    <script src="Zay/assets/js/templatemo.js"></script>
    <script src="Zay/assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>