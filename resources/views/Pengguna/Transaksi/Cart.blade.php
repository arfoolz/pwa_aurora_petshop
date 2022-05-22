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
    @include('Layout.Pengguna-Layout.TopNav')
    <!-- Close Top Nav -->

    <!-- Header -->
    @include('Layout.Pengguna-Layout.Navbar')
    <!-- Close Header -->

    <!-- Modal -->
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

    {{-- @php
        $total_harga = DB::table('carts')
                        ->select(DB::raw('(jumlah_barang * harga_barang)'))
                        ->get();
    @endphp --}}

    

    <!-- Open Content -->
    <section>
        <div class="container pb-5">
            <div class="row">
                
                <div class="mt-4">
                    <h4>Shopping Cart</h4>
                    <hr>
                </div>

                {{-- Tab Kiri --}}
                <form class="row" action="{{ url('/add-cart') }}" method="POST">
                    <div class="col-lg-8 mt-2">
                        <div class="card border-light">

                            @foreach ($dtCart as $item)

                            <div class="row">
                                <div class="col-5 col-md-2">
                                    <a href="{{ url('detail-shop', $item->id) }}}"><img src="{{ asset('img-Product/'. $item->product->gambar) }}" style="height: 140px" class="rounded img-fluid"></a>
                                </div>
                                <div class="col-7 col-md-10" >

                                    <div class="row">
                                        <div class="col-9 col-md-11">
                                            <!-- Nama Barang -->
                                            <a href="{{ url('detail-shop', $item->id) }}}"><p class="text-uppercase fw-bold">{{ $item->product->nama_barang}}</p></a>
                                        </div>
                                        <div class="col-1 text-end">
                                            <a class="dropdown-item btn-close" type="button" href="{{ url('delete-cart', $item->id) }}}"></a>
                                        </div>
                                        <!-- Kategori Barang -->
                                        <span>{{ $item->product->kategori->kategori}}</span>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-5">
                                            <!-- Harga Jual Barang -->
                                            <p class="fs-6 fw-bold">Rp {{ $item->product->harga_jual}}</p>
                                        </div>

                                        <div class="col-7 mt-2">
                                            <ul class="text-end list-inline ">
                                                <button type="button" class="btn btn-sm btn-outline-success" id="btn-minus">
                                                    -
                                                </button>
                                                <span class="badge bg-secondary" id="var-value">{{ $item->jumlah_barang }}</span>
                                                <button type="button" class="btn btn-sm btn-outline-success" id="btn-plus">
                                                    +
                                                </button>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <hr class="mt-3 mb-4">
                            </div> <!-- End isi Cart -->
                            @endforeach
                        </div>
                    </div>

                    {{-- Tab Kanan --}}
                    <div class="col-lg-4 mt-2">
                        <div class="card border-light" style="background-color: #F3F3F3; border-radius:20px">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h4>Detail Pesanan</h4>
                                    </div>
                                    <hr class="mt-1">
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <p> Item </p>
                                    </div>
                                    <div class="col-6">
                                        {{-- <p> {{ $item->total_item }} </p> --}}
                                    </div>
                                    {{-- <div class="col-6">
                                        <p>Ongkos Kirim</p>
                                    </div>
                                    <div class="col-6">
                                        <p>Rp {{ $item->total_harga}} </p>
                                    </div> --}}
                                </div>

                                <div class="row">
                                    <hr class="mt-1">
                                    <div class="col-6">
                                        <h5>Total Harga </h5>
                                    </div>
                                    <div class="col-6">
                                        {{-- <h5>Rp {{ $total_harga }}</h5> --}}
                                    </div>
                                </div>
                                
                                <div class="mt-2 d-grid center">
                                    <a class="btn btn-sm btn-outline-success" type="button" href="/cart/shipment">Lanjut</a>
                                    {{-- <button type="submit" class="btn-outline-success btn-sm" name="submit" value="addtocard">Lanjut</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Footer -->
    {{-- @include('Layout.Pengguna-Layout.Footer') --}}
    <!-- End Footer -->

    <!-- Start Style -->
    <style>
        a{
            text-decoration: none;
            color: black
        }
        a:hover{
            color: #59ab6e
        }
    </style>
    <!-- End Style -->

    <!-- Start Script -->
    <script src="Zay/assets/js/jquery-1.11.0.min.js"></script>
    <script src="Zay/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="Zay/assets/js/bootstrap.bundle.min.js"></script>
    <script src="Zay/assets/js/templatemo.js"></script>
    <script src="Zay/assets/js/custom.js"></script>
    <script src="https://kit.fontawesome.com/1c164f6dc6.js" crossorigin="anonymous"></script>
    <!-- End Script -->
</body>

</html>