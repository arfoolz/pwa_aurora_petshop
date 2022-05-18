<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Tambah Product</title>

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
                    <h1 class="app-page-title mb-0">Tambah Stok Barang</h1>
                </div>
              </div> <!--//row-->

              <div class="app-card form ">
                
                <div class="app-card-body p-4">
                  <form action="simpan-create-product" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
      
                    <div class="row">
                      {{-- <div class="col-12 mb-4">
                        <div class="form-group">
                          <p>Kode Barang</p>
                          <input type="text" id=kode_barang name=kode_barang class="form-control">
                        </div>
                      </div> --}}

                      <div class="col-12 mb-4">
                        <div class="form-group">
                          <p>Nama Barang</p>
                          <input type="text" id=nama_barang name=nama_barang class="form-control">
                        </div>
                      </div>
      
                      <div class="col-12 mb-4">
                        <div class="form-group">
                          <p>Kategori Barang</p>
                          <select type="text" id=kategori_id name=kategori_id class="form-control" aria-label="Default select example" style="height:50px">
                            <option disabled value>Pilih Kategori</option>
                              @foreach ($dtKtgr as $item)
                              <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                              @endforeach
                          </select>
                        </div>
                      </div>
                      
                      <div class="col-12 mb-4">
                        <div class="form-group">
                          <p>Satuan Barang</p>
                          <div class="form-group">
                            <select type="text" id=satuan_id name=satuan_id class="form-control" aria-label="Default select example" style="height:50px">
                              <option disabled value>Pilih Satuan</option>
                                @foreach ($dtStn as $item)
                                <option value="{{ $item->id }}">{{ $item->satuan }}</option>
                                @endforeach
                            </select>
                          </div>
                        </div>
                      </div>
      
                      <div class="col-12 mb-4">
                        <div class="form-group">
                          <p>Stok Barang</p>
                          <input type="text" id=stok name=stok class="form-control" onkeypress="return isNumber(event)">
                        </div>
                      </div>
 
                      <div class="col-12 mb-4">
                        <div class="form-group">
                          <p>Harga Jual</p>
                          <input type="text" id=harga_jual name=harga_jual class="form-control">
                        </div>
                      </div>

                      <div class="col-12 mb-4">
                        <div class="form-group">
                          <p>Harga Beli</p>
                          <input type="text" id=harga_beli name=harga_beli class="form-control">
                        </div>
                      </div>

                      <div class="col-12 mb-4">
                        <div class="form-group">
                          <p>Deskripsi</p>
                          <textarea type="text" id=deskripsi name=deskripsi class="form-control" style="height:100px"></textarea>
                        </div>
                      </div>

                      <div class="col-12 mb-4">
                        <div class="form-group">
                          <p>Expired</p>
                          <input type="date" id=expired name=expired class="form-control">
                        </div>
                      </div>

                      <div class="mb-4">
                        <input class="form-control" id="gambar" name="gambar" type="file">
                      </div>
                    </div>

                    <div class="d-grid gap-2 mx-auto">
                      <button type="submit" class="btn btn-success" style="color:white">Submit</button>
                      
                        
                      </div>
                    </div>

                  </form>
                </div><!--//app-card-body-->
            </div><!--//app-card-->

                


                
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