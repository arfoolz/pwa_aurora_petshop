<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo h1 align-self-center" href="/beranda">
            Aurora
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="/shop">Shop</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="/petcare">PetCare</a>
                    </li>
                </ul>
            </div>
            
            <div class="navbar align-self-center d-flex">

                <!-- Search Handphone View -->
                {{-- <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div> --}}

                <!-- Ikon Search -->
                {{-- <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                </a> --}}

                @if (Auth::guest())
                <button type="button"  class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Masuk
                </button>
                @else
                    <div>
                        {{-- <a class="nav-icon position-relative text-decoration-none" href="/cart" role="button" aria-expanded="false">
                            <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                            <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                        </a> --}}
                    </div>
                    <div class="dropdown">
                        <a class="nav-icon position-relative text-decoration-none" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-fw fa-user text-dark mr-3"></i>
                            {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
                        </a>
                    
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li>
                            @foreach ($dtUser as $item)
                            <a class="dropdown-item" hidden>Profil</a>
                            @endforeach
                            <a class="dropdown-item" href="{{ url('profile', $item->id) }}}">Profil</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('postlogout_user') }}">Logout</a></li>
                        </ul>
                    </div>
                @endif
  
                <!-- Modal Login -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Masuk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('postlogin_user') }}" method="post">

                                    {{ csrf_field() }}
                    
                                    <div class="form-group mb-3">
                                      <label for="email" class="sr-only">Email</label>
                                      <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                                    </div>
                                    <div class="form-group mb-3">
                                      <label for="password" class="sr-only">Password</label>
                                      <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                                    </div>
                                    <div class="d-grid mx-auto">
                                        <button class="btn btn-outline-success" type="submit">Submit</button>
                                    </div>
                                    <div class="d-grid mx-auto">
                                        <p class="fs-6">Belum Punya Akun? <a href="/register" class="fs-6">Daftar Disini</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>