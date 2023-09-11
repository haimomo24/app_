<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.layoutsite.css')}}">
   
    @yield('header')
</head>
<body>
   
   
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    LOGO
                </div>
                <div class="col-md-8">
                    <div class="hotline"><form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form></div>
                    <div class="mainmenu">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="container-fluid">
                              <a class="navbar-brand" href="#">Trang Chủ </a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                  <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Nữ </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">Nam</a>
                                  </li>
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Sản Phẩm 
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <li><a class="dropdown-item" href="#">Trẻ Em </a></li>
                                      <li><a class="dropdown-item" href="#">Sản Phẩm </a></li>
                                      <li><hr class="dropdown-divider"></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                  </li>
                                </ul>
                                
                              </div>
                            </div>
                          </nav>
                    </div>
                </div>
                <div class="col-md-2">
                    CART
                </div>
            </div>
        </div>
    </section>
   
    <section class="maincontent">
        @yield('content')
    </section>
    <section class="footer">
        <div class="container">footer</div>
    </section>
    <section class="copyright">
        <div class="container">copyright</div>
    </section>


    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    @yeild('footer')
</body>
</html>