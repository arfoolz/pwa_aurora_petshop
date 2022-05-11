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

    <!-- Open Content -->
    <section>
        <div class="container pb-5">
            <div class="row">
                <div class="mt-5">
                    <h4>Shopping Cart</h4>
                    <hr>
                </div>

                {{-- Tab Kiri --}}
                <div class="col-lg-8 mt-2">
                    <div class="card border-light">

                        <div class="row">
                            <div class="col-5 col-md-2">
                                <a href=""><img src="Zay/assets/img/category/category_img_02.jpg" style="height: 160px" class="rounded img-fluid"></a>
                            </div>
                            <div class="col-7 col-md-10" >
                                <div class="row">
                                    <div class="col-9 col-md-10">
                                        <p class="text-uppercase fw-bold">nama barang yang gokil</p>
                                    </div>
                                    <div class="col-2 text-end">
                                        <button type="button" class="btn btn-sm bi bi-x">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                        </button>
                                        
                                    </div>
                                    <span>Dog Food</span>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-5">
                                        <p class="fs-6 fw-bold">Rp 100000</p>
                                    </div>
                                    <div class="col-7 mt-2">
                                        <ul class="text-end list-inline ">
                                            <button type="button" class="btn btn-sm btn-outline-success" id="btn-minus">
                                                -
                                            </button>
                                            <span class="badge bg-secondary" id="var-value">1</span>
                                            <button type="button" class="btn btn-sm btn-outline-success" id="btn-plus">
                                                +
                                            </button>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-3 mb-4">
                        </div> <!-- End isi Cart -->
                    </div>
                </div>

                {{-- Tab Kanan --}}
                <div class="col-lg-4 mt-2">
                    <div class="card border-light" style="background-color: #F3F3F3">
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-12">
                                    <h4>Detail Pesanan</h4>
                                </div>
                                <hr class="mt-1">
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <p> Item</p>
                                </div>
                                <div class="col-6">
                                    <p> Rp </p>
                                </div>
                                <div class="col-6">
                                    <p>Ongkos Kirim</p>
                                </div>
                                <div class="col-6">
                                    <p>Rp </p>
                                </div>
                            </div>

                            <div class="row">
                                <hr class="mt-1">
                                <div class="col-6">
                                    <h5>Total Harga </h5>
                                </div>
                                <div class="col-6">
                                    <h5>Rp </h5>
                                </div>
                            </div>
                            
                            <div class="mt-2 col d-grid center">
                                <button type="submit" class="btn-outline-success btn-sm" name="submit" value="addtocard">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Footer -->
    {{-- @include('Layout.Pengguna-Layout.Footer') --}}
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="Zay/assets/js/jquery-1.11.0.min.js"></script>
    <script src="Zay/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="Zay/assets/js/bootstrap.bundle.min.js"></script>
    <script src="Zay/assets/js/templatemo.js"></script>
    <script src="Zay/assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>