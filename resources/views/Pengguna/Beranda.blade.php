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

    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" style="margin-left: 20%" src="Zay//assets/img/carousel/pet_01_black.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Aurora</b> Petshop</h1>
                                <h3 class="h2">Tempat Aman dan Nyaman untuk hewan kesayangan anda </h3>
                                <p>
                                    Aurora Petshop sudah berdiri sejak tahun 2018. Sudah banyak yang puas atas kinerja kami.

                                    Anda dapat mencari kami dangan cara, menghubungi <a rel="sponsored" class="text-success" target="_blank">0857-1578-0142</a> 
                                    Atau dapat mengujingi kami langsung <a rel="sponsored" class="text-success" href="https://goo.gl/maps/srJLoywY6FRVPrRx9" target="_blank">Disini</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="Zay/assets/img/carousel/pet_0311.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Banyak Pelanggan Puas!</h1>
                                <h3 class="h2">Pengerjaan Sepenuh Hati</h3>
                                <p>
                                    Sejak petshop ini berdiri kami bertekad untuk menjaga dan memelihara binatang dengan sepenuh hati. 
                                    You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" style="margin-left: 60%" width="55%" src="Zay/assets/img/carousel/pet_02.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">OH IYA!!!</h1>
                                <h3 class="h2">KITA JUGA MEMBUKA TEMPAT PENITIPAN HEWAN LHO!</h3>
                                <p>
                                    Jangan ragu untuk menitipkan anabul anda kepada kami.
                                </p>
        
                                <a href="/petcare" class="btn btn-outline-success" role="button">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->

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