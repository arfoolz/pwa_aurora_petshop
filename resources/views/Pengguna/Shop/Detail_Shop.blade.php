<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aurora Petshop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="/assets/img/apple-icon.png">
    <link rel="shortcut icon" type="/image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="/Zay/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Zay/assets/css/templatemo.css">
    <link rel="stylesheet" href="/Zay/assets/css/custom.css">
    

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="/Zay/assets/css/fontawesome.min.css">
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

    <!-- Open Content -->
    <section>
        <div class="container pb-5">
            <div class="row">
                
                {{-- Tab Kiri --}}
                
                <div class="col-lg-5 mt-5">
                    <div class="card border-light mb-3">
                        <img class="card-img img-fluid" src="{{ asset('img-Product/'. $siPrdct->gambar) }}" alt="Card image cap" id="product-detail">
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
                                    <h1 class="h2">{{ $siPrdct->nama_barang }}</h1>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <p class="h3 py-2">Rp {{ $siPrdct->harga_jual }}</p>
                                    </div>
                                </div>
                            </div>
                            
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
                                    <p>{{ $siPrdct->deskripsi }}</p>
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

                            <form action="{{ url('/add-cart') }}" method="POST">

                                {{-- @php
                                    $a = 2;
                                    $b = (int)$siPrdct->$harga_jual
                                    $total_harga = $a * $b;
                                @endphp --}}

                                @csrf                                
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="text-center list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                <input type="hidden" name="produk_id" value={{ $siPrdct->id }}>
                                                <input type="hidden" type="number" name="harga_barang" value={{ $siPrdct->harga_jual }}>
                                            </li>
                                            {{-- <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li> --}}
                                            {{-- <li class="list-inline-item"><span style="width: 150px" name="jumlah_barang" class="badge bg-secondary" id="var-value">1</span></li> --}}
                                            <input class="list-inline-item text-center" id="jumlah_barang" type="number" style="width: 150px" name="jumlah_barang" value="1">         
                                            {{-- <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li> --}}
                                        </ul>
                                        {{-- <input type="text" name="jumlah_barang" id="jumlah_barang" class="form-control"> --}}
                                        {{-- <input type="hidden" name="produk_id" class="form-control" value="1"> --}}
                                    </div>
                                </div>

                                <div class="row pb-3">
                                    <div class="col d-grid center">
                                        <button type="submit" class="btn-outline-success btn-sm" name="submit" value="addtocard">Add To Cart</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Footer -->
    @include('Layout.Pengguna-Layout.Footer')
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="/Zay/assets/js/jquery-1.11.0.min.js"></script>
    <script src="/Zay/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/Zay/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/Zay/assets/js/templatemo.js"></script>
    <script src="/Zay/assets/js/custom.js"></script>

    <script>
        function SubTotal(){                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
            jlh_brg = document.getElementById("jumlah_barang").value;
            hrg_brg = document.getElementById("harga_jual").value;
            SubTotal = jlh_brg * hrg_brg;; 
        }
    </script>
    <!-- End Script -->
</body>

</html>