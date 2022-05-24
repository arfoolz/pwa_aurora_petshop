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
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand text-success logo h2 align-self-center" href="/beranda">
                Aurora
            </a>
        </div>
    </nav>
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
                
                <div class="mt-4">
                    <h4>Checkout</h4>
                    <hr>
                </div>

                {{-- Tab Kiri --}}
                <form class="row" action="{{ url('/add-checkout') }}" method="POST">

                    {{ csrf_field() }}
                    
                    <div class="mt-2 col-md-6">
                        <label class="form-label">Nama Penerima</label>
                        <input type="text" class="form-control" name="nama_penerima">
                    </div>
                    <div class="mt-2 col-md-6">
                        <label class="form-label">Nomor Hp</label>
                        <input type="text" class="form-control" name="no_tlpn">
                    </div>
                    <div class="mt-2 col-12">
                        <label class="form-label">Alamat</label>
                        <textarea type="text" class="form-control" style="height:100px" name="alamat"></textarea>
                    </div>
                    <div class="mt-2 col-md-4">
                        <label for="inputCity" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" name="provinsi">
                    </div>
                    <div class="mt-2 col-md-4">
                        <label for="inputCity" class="form-label">Kota</label>
                        <input type="text" class="form-control" name="kota">
                    </div>
                    <div class="mt-2 col-md-4">
                        <label for="inputCity" class="form-label">Kabupaten</label>
                        <input type="text" class="form-control" name="kabupaten">
                        </select>
                    </div>
                    <div class="mt-2 col-md-4">
                        <label for="inputCity" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan">
                        </select>
                    </div>
                    <div class="mt-2 col-md-2">
                        <label for="inputZip" class="form-label">Kode Pos</label>
                        <input type="text" class="form-control" name="kode_pos">
                    </div>
                    <div class="mt-2 col-md-6">
                        <label for="inputCity" class="form-label">Catatan Untuk Kurir</label>
                        <input type="text" class="form-control" name="catatan">
                        </select>
                    </div>
                    <hr class="mt-3">

                    <div class="col-lg-8 mt-2">
                        <div class="card border-light">
                            @foreach ($dtCart as $item)
                            <div class="row">
                            
                                <div class="col-5 col-md-2">
                                    <img src="{{ asset('img-Product/'. $item->product->gambar) }}" style="height: 140px" class="rounded img-fluid">
                                </div>

                                <div class="col-7 col-md-10" >

                                    <div class="row">
                                        <div class="col-9 col-md-11">
                                            <!-- Nama Barang -->
                                            <p class="text-uppercase fw-bold">{{ $item->product->nama_barang }}</p>
                                        </div>
                                        {{-- <div class="col-1 text-end">
                                            <a class="dropdown-item btn-close" type="button" href="{{ url('delete-cart', $item->id) }}}"></a>
                                        </div> --}}
                                        <!-- Kategori Barang -->
                                        <span>{{ $item->product->kategori->kategori}}</span>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-3">
                                            <p class="fs-6 fw-bold">Rp</p>
                                        </div>

                                        <div class="col-9 text-end">
                                            <p class="fs-6">Jumlah</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-7">
                                            <p class="fs-6 fw-bold">{{ number_format($item->product->harga_jual)}}</p>
                                        </div>

                                        <div class="col-5 text-end">
                                            <p class="fs-6">{{ $item->jumlah_barang}}</p>
                                        </div>
                                    </div>

                                </div>
                                <hr class="mt-3 mb-4">

                                <!-- Input Barang -->
                                <input type="hidden" type="number" name="product_id[]" value={{ $item->product_id }}>
                                <input type="hidden" type="number" name="nama_barang[]" value={{ $item->product->nama_barang }}>
                                <input type="hidden" type="number" name="harga_barang[]" value={{ $item->harga_barang }}>
                                <input type="hidden" type="number" name="total_item[]" value={{ $item->jumlah_barang }}>

                            </div> <!-- End isi Cart -->
                            @endforeach
                        </div>
                    </div>

                    {{-- Tab Kanan --}}
                    <div class="col-lg-4 mt-2">
                        <div class="card border-light" style="background-color: #F3F3F3; border-radius:20px">
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-12 mt-2">
                                        <p class="fs-5 fw-bold">Ringkasan Pembayaran</p class="">
                                    </div>
                                    <hr>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <p> Item </p>
                                    </div>
                                    <div class="col-6">
                                        <p> {{ $countCart }} </p>
                                    </div>
                                    <div class="col-6">
                                        <p> Total Harga </p>
                                    </div>
                                    <div class="col-6">
                                        <p> Rp {{ number_format($item->sum('total_harga')) }} </p>
                                    </div>
                                    <div class="col-6">
                                        <p>Kode Unik</p>
                                    </div>
                                    <div class="col-6">
                                        <p>Rp 550 </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <hr class="mt-1">
                                    <div class="col-6">
                                        <h5>Total Tagihan </h5>
                                    </div>
                                    <div class="col-6">
                                        <p class="fs-5 fw-bold">Rp {{ number_format($item->sum('total_harga')+550) }}<p>
                                        
                                    </div>
                                </div>

                                <p class="fs-6">Dengan ini saya menyatakan bahwa biaya ongkir ditanggung oleh pemesan.<p class="fs-5 fw-bold">
                                <div class="mt-1 d-grid center">
                                    <button type="button"  class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal"> Beli ({{ $item->sum('jumlah_barang') }}) </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Pemilihan Transfer -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        
                                        
                                        <div class="row mt-4">
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
                                                        @foreach ($dtCartItem as $item)
                                                        @endforeach
                                                        <input type="hidden" type="number" name="total_bayar" value={{ $item->sum('total_harga')+550 }}>
                                                        <p class="fs-6">Rp {{ number_format($item->sum('total_harga')+550) }}<p>
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
    <script src="https://kit.fontawesome.com/1c164f6dc6.js" crossorigin="anonymous"></script>
    <!-- End Script -->
</body>

</html>