<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Stok Barang</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="AdminPortal/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="AdminPortal/assets/css/portal.css">

    <!-- Simbol -->
    <script src="https://kit.fontawesome.com/1c164f6dc6.js" crossorigin="anonymous"></script>
</head>

<body class="app">
    <header class="app-header fixed-top">
        @include('Layout.Admin-Layout.Navbar')
        <!-- Navbar -->
        @include('Layout.Admin-Layout.Sidebar')
        <!-- Sidebar -->
    </header>

    {{-- UTAMA --}}
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Halaman User Pengguna</h1>
                    </div>
                    <div class="col-auto">
                        <div class="page-utilities">
                            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                                <div class="col-auto">
                                    <form class="table-search-form row gx-1 align-items-center">
                                        <div class="col-auto">
                                            <a href="create-admin" class="btn app-btn-secondary">
                                                <i class="fa-solid fa-plus"></i> Tambah User 
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div> <!--//row-->
                        </div> <!--//table-utilities-->
                    </div> <!--//col-auto-->
                </div> <!--//row-->


                {{-- <nav id="orders-table-tab"
                    class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
                    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab"
                        href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab"
                        href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Paid</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab"
                        href="#orders-pending" role="tab" aria-controls="orders-pending"
                        aria-selected="false">Pending</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
                        href="#orders-cancelled" role="tab" aria-controls="orders-cancelled"
                        aria-selected="false">Cancelled</a>
                </nav> --}}

                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto"></div>
                    <div class="col-auto">
                        <div class="page-utilities">
                            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                                <div class="col-auto">
                                    <form class="table-search-form row gx-1 align-items-center">
                                        <div class="col-auto">
                                            <input type="text" id="search-orders" name="searchorders"
                                                class="form-control search-orders" placeholder="Search">
                                        </div>                                    
                                    </form>
                                </div>                       
                            </div> <!--//row-->

                            
                        </div> <!--//table-utilities-->
                    </div> <!--//col-auto-->
                </div> <!--//row-->


                <div class="tab-content" id="orders-table-tab-content">
                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel"
                        aria-labelledby="orders-all-tab">
                        <div class="app-card app-card-orders-table shadow-sm mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive rounded">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Nama</th>
                                                <th class="cell">Jenis Kelamin</th>
                                                <th class="cell">Email</th>
                                                <th class="cell">Alamat</th>
                                                <th class="cell">Nommor Telepon</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dtUser as $item)
                                            <tr>
                                                <th class="cell">{{ $item->nama }}</th>
                                                <th class="cell">{{ $item->jenis_kelamin }}</th>
                                                <th class="cell">{{ $item->email }}</th>
                                                <th class="cell">{{ $item->alamat }}</th>
                                                <th class="cell">{{ $item->no_tlpn }}</th>
                                                
                                                <th>
                                                    <div class="dropdown">
                                                        <a class="btn-sm app-btn-secondary" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                          ..
                                                        </a>
                                                      
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                          <li><a class="dropdown-item" href="#">Edit</a></li>
                                                          <li><a class="dropdown-item" href="#">Delete</a></li>
                                                        </ul>
                                                      </div>
                                                </th>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div> <!--//table-responsive-->
                            </div> <!--//app-card-body-->
                        </div> <!--//app-card-->

                        <nav class="app-pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav> <!--//app-pagination-->
                       

                    </div> <!--//tab-pane-->
                </div> <!--//tab-content-->
            </div> <!--//container-fluid-->
        </div> <!--//app-content-->
    </div> <!--//app-wrapper-->
    
    <!-- Javascript -->
    <script src="AdminPortal/assets/plugins/popper.min.js"></script>
    <script src="AdminPortal/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Page Specific JS -->
    <script src="AdminPortal/assets/js/app.js"></script>

</body>

</html>
