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

    <div style="background-color: white">

        <!-- Start Tabel 1 -->
        <section class="container py-5" >
            <div class="row text-center pt-3 mb-5">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Categories of The Month</h1>
                    <p>
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>

            <h4>Data Pemesan</h4>
            <div class="row mb-5" style="background-color: #F2F2F2; border-radius: 20px">
                <div class="col-12 mb-4 mt-4">
                <div class="form-group">
                    <p>Nama Kontak</p>
                    <input type="text" id=nama_admin name=nama_admin class="form-control">
                </div>
                </div>

                {{-- <div class="col-6 mb-4">
                    <div class="form-group">
                    </div>
                </div> --}}
                
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
                    <p>Pastikan nomor yang dimasukan dapat dihubungi.</p>
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
            <div class="row mb-5" role="button" data-bs-toggle="collapse" href="#collapseExample1" style="background-color: #F8F8F8; border-radius: 20px">
                <div class="col-6 mt-2">
                    <h4>Kebijakan Pemesanan</h4>
                </div>
                <div class="col-6 mt-2 text-end">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
                      </svg>
                </div>
    
                <div class="collapse" id="collapseExample1" style="background-color: #F8F8F8; border-radius: 20px">
                    <div class="mt-2">
                        <div class="form-group">
                            <p>Pembatalan</p>
                            <input type="text" id=nama_admin name=nama_admin class="form-control" disabled style="background-color: white"
                            value="Dengan ini menyatakan pemesanan tidak bisa di cancel maupun di-refund.">
                        </div>
                    </div>
                    <div class="col-12 mb-4 mt-4">
                        <div class="form-group">
                            <p>Reschedule</p>
                            <input type="text" id=nama_admin name=nama_admin class="form-control" disabled style="background-color: white"
                            value="Dengan ini menyatakan pemesanan tidak bisa di Reschedule.">
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- End Tabel 2 -->

        <!-- Start Tabel 3 -->
        <section class="container" >
            <div class="row mb-5" role="button" data-bs-toggle="collapse" href="#collapseExample1" style="background-color: #F8F8F8; border-radius: 20px">
                <div class="col-6 mt-2">
                    <h4>Total Harga</h4>
                </div>
                <div class="col-6 mt-2 text-end">
                    <p>Rp 5000</p>
                </div>
    
                <div class="collapse" id="collapseExample1" style="background-color: #F8F8F8; border-radius: 20px">
                    <div class="mt-2">
                        <div class="form-group">
                            <p>Pembatalan</p>
                            <input type="text" id=nama_admin name=nama_admin class="form-control" disabled style="background-color: white"
                            value="Dengan ini menyatakan pemesanan tidak bisa di cancel maupun di-refund.">
                        </div>
                    </div>
                    <div class="col-12 mb-4 mt-4">
                        <div class="form-group">
                            <p>Reschedule</p>
                            <input type="text" id=nama_admin name=nama_admin class="form-control" disabled style="background-color: white"
                            value="Dengan ini menyatakan pemesanan tidak bisa di Reschedule.">
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- End Tabel 3 -->

    </div>

    <!-- Start Footer -->
    @include('Layout.Pengguna-Layout.Footer')
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