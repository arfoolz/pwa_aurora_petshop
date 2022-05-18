<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aurora Petshop</title>
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
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand text-success logo h2 align-self-center" href="/beranda">
                Aurora
            </a>
        </div>
    </nav>
    <!-- Close Header -->

    <!-- Open Content -->
    <section>
        <div class="container pb-5">
            <div class="row">
                <hr>
                <div class="mt-5">
                    <h4>Checkout</h4>
                </div>
                <div class="mt-5">
                    <h5>Kirim Ke Mana?</h5>
                    <hr>
                </div>

                <div class="col-lg-12 mt-2">
                    <div class="card border-light">

                        <form class="row g-3">
                            <div class="col-md-6">
                              <label class="form-label">Nama Penerima</label>
                              <input type="text" class="form-control" name="nama_penerima">
                            </div>
                            <div class="col-md-6">
                              <label class="form-label">Nomor Hp</label>
                              <input type="text" class="form-control" name="nomor_penerima">
                            </div>
                            <div class="col-12">
                              <label class="form-label">Alamat</label>
                              <textarea type="text" class="form-control" style="height:100px" name="alamat_penerima"></textarea>
                            </div>
                            <div class="col-md-4">
                              <label for="inputCity" class="form-label">Kota</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="inputCity" class="form-label">Kabupaten</label>
                                <input type="text" class="form-control">
                              </select>
                            </div>
                            <div class="col-md-4">
                                <label for="inputCity" class="form-label">Kecamatan</label>
                                <input type="text" class="form-control">
                              </select>
                            </div>
                            <div class="col-md-2">
                              <label for="inputZip" class="form-label">Zip</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="col-md-10">
                                <label for="inputCity" class="form-label">Catatan Untuk Kurir</label>
                                <input type="text" class="form-control">
                              </select>
                            </div>
                            <hr>
                    </div>
                </div>

                {{-- Tab Kiri --}}
                <div class="col-lg-7 mt-2">
                    <div class="card border-light">

                        <div class="row">
                            <div class="col-5 col-md-3">
                                <a href=""><img src="/Zay/assets/img/category/category_img_02.jpg" style="height: 160px" class="rounded img-fluid"></a>
                            </div>
                            <div class="col-7 col-md-9" >
                                <div class="row">
                                    <div class="col-9 col-md-11">
                                        <!-- Nama Barang -->
                                        <p class="text-uppercase fw-bold"></p>
                                    </div>
                                    <div class="col-1 text-end">
                                        <a class="dropdown-item btn-close" type="button" href=""></a>
                                    </div>
                                    <!-- Kategori Barang -->
                                    <span></span>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-5">
                                        <!-- Harga Barang Barang -->
                                        <p class="fs-6 fw-bold">Rp 100000</p>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-3 mb-4">
                        </div> <!-- End isi Cart -->
                        {{-- @php $total_harga += $item->produk                        @endphp --}}
                       
                    </div>
                </div>

                {{-- Tab Kanan --}}
                <div class="col-lg-5 mt-2">
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
                                    <p> Item </p>
                                </div>
                                <div class="col-6">
                                    <p>  </p>
                                </div>
                                <div class="col-6">
                                    <p>Ongkos Kirim</p>
                                </div>
                                <div class="col-6">
                                    <p>Rp  </p>
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
                                <button type="submit" class="btn-outline-success btn-sm" name="submit" value="addtocard">Pilih Metode Pembayaran</button>
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
    {{-- @include('Layout.Pengguna-Layout.Footer') --}}
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="/Zay/assets/js/jquery-1.11.0.min.js"></script>
    <script src="/Zay/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/Zay/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/Zay/assets/js/templatemo.js"></script>
    <script src="/Zay/assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>