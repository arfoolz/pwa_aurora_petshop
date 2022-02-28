
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | User</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/AdminLTe/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/AdminLTe/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">

<!-- Preloader -->
{{-- <div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__wobble" src="{{ asset('logo/ALogo.png')}}" alt="Aurora Petshop" height="60" width="60">
</div> --}}

<div class="wrapper">

  <!-- Navbar -->
  @include('Layout.Admin-Layout.Navbar')
  
  <!-- Sidebar -->
  @include('Layout.Admin-Layout.Sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah User Admin</h1>
          </div>
          {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Pesanan</a></li>
              <li class="breadcrumb-item active">Barang</li>
            </ol>
          </div> --}}
        </div>
      </div>
    </div>
    
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <div class="card card-primary card-outline">
          <div class="card-body">
            <form action="{{ url('update-admin',$siadmin->id) }}" method="post">
              {{ csrf_field() }}

              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <p>Nama</p>
                    <input type="text" id=nama name=nama class="form-control" value="{{ $siadmin->nama }}">
                  </div>
                </div>

                <div class="col-6">
                  <div class="form-group">
                    <p>Level</p>
                    <select type="text" id=level name=level class="form-control" aria-label="Default select example" value="{{ $siadmin->level }}">
                      <option value="Superadmin">Superadmin</option>
                      <option value="Admin">Admin</option>
                    </select>
                  </div>
                </div>
                
                <div class="col-6">
                  <div class="form-group">
                    <p>Jenis Kelamin</p>
                    <div class="form-group">
                      <select type="text" id=jenis_kelamin name=jenis_kelamin class="form-control" aria-label="Default select example">
                        <option value="Pria">Pria</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-6">
                  <div class="form-group">
                    <p>No Telepon</p>
                    <input type="text" id=no_tlpn name=no_tlpn class="form-control" value="{{ $siadmin->no_tlpn }}">
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group">
                    <p>Alamat</p>
                    <textarea type="text" id=alamat name=alamat class="form-control" value="{{ $siadmin->alamat }}"></textarea>
                  </div>
                </div>

                <div class="col-6">
                  <div class="form-group">
                    <p>Email</p>
                    <input type="text" id=email name=email class="form-control" placeholder="example@gmail.com" value="{{ $siadmin->email }}">
                  </div>
                </div>

                <div class="col-6">
                  <div class="form-group">
                    <p>Password</p>
                    <input type="text" id=password name=password class="form-control" value="{{ $siadmin->password }}">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

        {{-- <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
             <form action="" method="post">
               <div class="form-group">
                <input type="text" id=nama class="form-control" placeholder="Nama">
               </div>
             </form>
             <form action="" method="post">
              <div class="form-group">
               <input type="text" id=level class="form-control" placeholder="Level">
              </div>
            </form>
            </div>
          </div>
        </div> --}}

      </div>
    </div>
  </div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/AdminLTe/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/AdminLTe/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/AdminLTe/dist/js/adminlte.min.js"></script>
</body>
</html>