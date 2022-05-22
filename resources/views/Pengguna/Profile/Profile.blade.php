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
                
                <div class="col-lg-12 mt-2">
                    <div class="card border-light">

                        {{-- @foreach ($dtCart as $item) --}}

                            <div class="row">

                                <nav id="profile-table-tab" class="profile-table-tab app-nav-tabs nav shadow-sm flex-sm-row mb-4">
                                    <a  class="flex-sm-fill text-sm-center nav-link active" id="profile-biodata-tab" data-bs-toggle="tab"
                                        href="#profile-biodata" role="tab" aria-controls="profile-biodata" aria-selected="true">
                                        Biodata
                                    </a>
                                    <a class="flex-sm-fill text-sm-center nav-link" id="profile-order-history-tab" data-bs-toggle="tab"
                                        href="#profile-order-history" role="tab" aria-controls="profile-order-history" aria-selected="false">
                                        Order History
                                    </a>
                                    {{-- <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab"
                                        href="#orders-pending" role="tab" aria-controls="orders-pending"
                                        aria-selected="false">
                                        Pending
                                    </a>
                                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
                                        href="#orders-cancelled" role="tab" aria-controls="orders-cancelled"
                                        aria-selected="false">
                                        Cancelled
                                    </a> --}}
                                </nav>


                                <div class="tab-content" id="profile-table-tab-content">
                                    
                                    <div class="tab-pane fade show active" id="profile-biodata" role="tabpanel" aria-labelledby="profile-biodata-tab">
                                        <div class="app-card app-card-profile-table mb-5">
                                            <div class="app-card-body">
                                                
                                                <div>
                                                    <P class="fs-5 fw-bold">Ubah Biodata Diri</P>

                                                    <div class="row">
                                                        <div class="col-5 col-md-2">
                                                            <P class="fs-6">Nama</P>
                                                        </div>
                                                        <div class="col-6 col-md-6">
                                                            <P class="fs-6">Arya Yudha Reynardo</P>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-5 col-md-2">
                                                            <P class="fs-6">Jenis Kelamin</P>
                                                        </div>
                                                        <div class="col-6 col-md-6">
                                                            <P class="fs-6">Laki - Laki</P>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-5 col-md-2">
                                                            <P class="fs-6">Alamat</P>
                                                        </div>
                                                        <div class="col-6 col-md-6">
                                                            <P class="fs-6">Perumahan Griya Parungpanjang</P>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-5">
                                                    <P class="fs-5 fw-bold">Ubah Biodata Diri</P>

                                                    <div class="row">
                                                        <div class="col-5 col-md-2">
                                                            <P class="fs-6">Email</P>
                                                        </div>
                                                        <div class="col-6 col-md-6">
                                                            <P class="fs-6">arya@gmail.com</P>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-5 col-md-2">
                                                            <P class="fs-6">Nomor HP</P>
                                                        </div>
                                                        <div class="col-6 col-md-6">
                                                            <P class="fs-6">890478903412</P>
                                                        </div>
                                                    </div>
                                                </div>
                                    
                                            </div> <!--//app-card-body-->
                                        </div> <!--//app-card-->
                                    </div> <!--//tab-pane-->

                                    <div class="tab-pane fade" id="profile-order-history" role="tabpanel" aria-labelledby="profile-order-history-tab">
                                        <div class="app-card app-card-profile-table mb-5">
                                            <div class="app-card-body">
                                                <div class="table-responsive">

                                                    <table class="table mb-0 text-left">
                                                        <thead>
                                                            <tr>
                                                                <th class="cell">Order</th>
                                                                <th class="cell">Product</th>
                                                                <th class="cell">Customer</th>
                                                                <th class="cell">Date</th>
                                                                <th class="cell">Status</th>
                                                                <th class="cell">Total</th>
                                                                <th class="cell"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="cell">#15346</td>
                                                                <td class="cell"><span class="truncate">Lorem ipsum
                                                                        dolor sit amet eget volutpat erat</span></td>
                                                                <td class="cell">John Sanders</td>
                                                                <td class="cell"><span>17 Oct</span><span
                                                                        class="note">2:16 PM</span></td>
                                                                <td class="cell"><span class="badge bg-success">Paid</span>
                                                                </td>
                                                                <td class="cell">$259.35</td>
                                                                <td class="cell"><a class="btn-sm app-btn-secondary"
                                                                        href="#">View</a></td>
                                                            </tr>

                                                            <tr>
                                                                <td class="cell">#15344</td>
                                                                <td class="cell"><span class="truncate">Pellentesque
                                                                        diam imperdiet</span></td>
                                                                <td class="cell">Teresa Holland</td>
                                                                <td class="cell"><span class="cell-data">16
                                                                        Oct</span><span class="note">01:16 AM</span></td>
                                                                <td class="cell"><span class="badge bg-success">Paid</span>
                                                                </td>
                                                                <td class="cell">$123.00</td>
                                                                <td class="cell"><a class="btn-sm app-btn-secondary"
                                                                        href="#">View</a></td>
                                                            </tr>

                                                            <tr>
                                                                <td class="cell">#15343</td>
                                                                <td class="cell"><span class="truncate">Vestibulum a
                                                                        accumsan lectus sed mollis ipsum</span></td>
                                                                <td class="cell">Jayden Massey</td>
                                                                <td class="cell"><span class="cell-data">15
                                                                        Oct</span><span class="note">8:07 PM</span></td>
                                                                <td class="cell"><span class="badge bg-success">Paid</span>
                                                                </td>
                                                                <td class="cell">$199.00</td>
                                                                <td class="cell"><a class="btn-sm app-btn-secondary"
                                                                        href="#">View</a></td>
                                                            </tr>


                                                            <tr>
                                                                <td class="cell">#15341</td>
                                                                <td class="cell"><span class="truncate">Morbi
                                                                        vulputate lacinia neque et sollicitudin</span></td>
                                                                <td class="cell">Raymond Atkins</td>
                                                                <td class="cell"><span class="cell-data">11
                                                                        Oct</span><span class="note">11:18 AM</span></td>
                                                                <td class="cell"><span class="badge bg-success">Paid</span>
                                                                </td>
                                                                <td class="cell">$678.26</td>
                                                                <td class="cell"><a class="btn-sm app-btn-secondary"
                                                                        href="#">View</a></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div> <!--//table-responsive-->
                                            </div> <!--//app-card-body-->
                                        </div> <!--//app-card-->
                                    </div> <!--//tab-pane-->
                                </div><!--//tab-content-->
                            </div> <!-- End isi Cart -->
                        {{-- @endforeach --}}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Footer -->
    @include('Layout.Pengguna-Layout.Footer')
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