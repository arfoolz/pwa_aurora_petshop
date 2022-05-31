<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Edit Pesanan Titipan</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="/AdminPortal/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="/AdminPortal/assets/css/portal.css">

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
                    <h1 class="app-page-title mb-0">Edit Payment Status Order Titipan</h1>
                </div>
              </div> <!--//row-->

              <div class="app-card form ">
                
                <div class="app-card-body p-4">
                    <form action="{{ url('update-pesanan-titipan', $dtPsnTtpn->id) }}" method="post">
                        {{ csrf_field() }}
        
                        <div class="row">
        
                        <div class="col-12 mb-4">
                            <div class="form-group">
                            <p>Kode Transaksi</p>
                            <input disabled type="text" id="kode_resi" name="kode_resi" class="form-control" value={{ $dtPsnTtpn->kode_resi }}>
                            </div>
                        </div>

                        <div class="col-12 mb-4">
                            <div class="form-group">
                            <p>Tanggal Transaksi</p>
                            <input disabled type="date" id="tanggal_transaksi" name="tanggal_transaksi" class="form-control" value={{ $dtPsnTtpn->tanggal_transaksi }}>
                            </div>
                        </div>

                        <div class="col-12 mb-4">
                            <div class="form-group">
                            <p>Nama Pemesan</p>
                            <input disabled type="text" id="nama_user" name="nama_user" class="form-control" value={{ $dtPsnTtpn->user->nama_user }}>
                            </div>
                        </div>
        
                        <div class="col-12 mb-4">
                            <div class="form-group">
                            <p>Payment Status</p>
                            {{-- <input disabled type="text" class="form-control" value={{ $dtPsnTtpn->paystat->paystat }}> --}}
                            <select type="text" id=paystat_id name=paystat_id class="form-control" aria-label="Default select example" style="height:50px">
                                @foreach ($dtPaystat as $item)
                                <option value="{{ $item->id }}">{{ $item->paystat }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
        
                        <div class="col-12 mb-4">
                            <div class="form-group">
                            <p>Total Kandang</p>
                            <input disabled type="text" id=total_kandang name=total_kandang class="form-control" value={{ $dtPsnTtpn->total_kandang }}>
                            </div>
                        </div>

                        <div class="col-12 mb-4">
                            <div class="form-group">
                            <p>Total Bayar</p>
                            <input disabled type="text" id=total_bayar name=total_bayar class="form-control" value={{ number_format($dtPsnTtpn->total_bayar) }}>
                            </div>
                        </div>

                        <div class="d-grid gap-2 mx-auto">
                        <button type="submit" class="btn btn-success" style="color:white">Submit</button>
                        </div>

                    </form>
                </div><!--//app-card-body-->
            </div><!--//app-card-->
            </div> <!--//container-fluid-->
        </div> <!--//app-content-->
    </div> <!--//app-wrapper-->
    
    <!-- Javascript -->
    <script src="/AdminPortal/assets/plugins/popper.min.js"></script>
    <script src="/AdminPortal/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Page Specific JS -->
    <script src="/AdminPortal/assets/js/app.js"></script>

</body>
</html>