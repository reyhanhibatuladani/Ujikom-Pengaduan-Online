<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">

    <meta name="author" content="Ayro UI">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Pengaduan Online</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('template/images/favicon.ico')}}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('template/css/bootstrap.min.css')}}">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{asset('template/css/LineIcons.css')}}">
    <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('template/css/default.css')}}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">


</head>

<body>

    <!--====== HEADER ONE PART START ======-->

    <section class="header-area header-one">

        <div class="navbar-area navbar-one navbar-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#">
                                <img src="template/images/logo-4.svg" alt="Logo">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarOne"
                                aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarOne">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item">
                                        <a class="active" href="#">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#SERVICES">SERVICES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#CONTACT">CONTACT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#ADVICE">ADVICE</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="navbar-btn d-none d-sm-inline-block">
                                <ul>
                                    <li>
                                      <form action="{{route("logout")}}" method="POST">
                                        @csrf

                                      <button class="btn btn-solid text-white font-weight-bold" href="#" >LOGOUT</button>
                                      </form>
                                    </li>
                                    <li>
                                      <p class="text-white">{{\Auth::user()->name}}</p>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

        <div class="header-content-area d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-wrapper">
                            <div class="header-content">
                                <h3 class="header-title">Fast and Good</h3>
                                <p class="text">If you have trobles or facing problems that you can't solve, you can
                                    report tu us and we'll
                                    arrive as soon as possible to help you out.</p>
                                <div class="header-btn rounded-buttons">
                                    <a class="main-btn rounded-one" href="#CONTACT">CONTACT US</a>
                                </div>

                            </div> <!-- header content -->

                            <div class="header-image d-none d-lg-block">
                                <div class="image">
                                    <img src="template/images/logo.svg" alt="Header">
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-shape">
                <img src="template/images/header/header-shape-2.svg" alt="shape">
            </div> <!-- header-shape -->
        </div> <!-- header content area -->
    </section>

    <!--====== HEADER ONE PART ENDS ======-->

    <section class="services-area services-one" id="SERVICES">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h4 class="title">Services</h4>
                        <p class="text">We offer a great services to you all</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni lni-target"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">Smash</h4>
                                    <p class="text">We'll make sure your problems is solve.</p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="col-md-3">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class='lni lni-consulting'></i> </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">Consulting</h4>
                                    <p class="text">Free constuling for a lifetime.</p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="col-md-3">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class='lni lni-thumbs-up'></i> </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">Trusted</h4>
                                    <p class="text">Don't doubt our work, it always great.</p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="col-md-3">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class='lni lni-protection'></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">Protection</h4>
                                    <p class="text">We offer 100% protection to customers.</p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section class="pricing-area pt-50" id="ADVICES">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h3 class="title">Advices</h3>
                </div>
            </div>
            <div class="row justify-content-center">

              @foreach ($advices as $a)

                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style-twelve mt-40">


                        <div class="pricing-header text-center">
                            <h5 class="sub-title mb-2">{{$a->reports->judul_laporan}}</h5>
                            <p class="mt-2">{{$a->tanggapan}}</p>

                            <strong class="mt-4">{{$a->users->name}}, {{$a->tanggal_tanggapan}}</strong>

                        </div>



                    </div> <!-- single pricing -->
                </div>

                @endforeach



            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section class="contact-area pt-50 pb-100" id="CONTACT">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h3 class="title">Contact Us</h3>
                    </div>
                    <div class="contact-form form-style-four mt-15">
                      @if(session('status'))
                      <div class="alert alert-success mb-2 mt-2">
                          {{session('status')}}
                      </div>
                      @endif 
                      <form enctype="multipart/form-data" action="{{route('reports.store')}}" method="POST">
                        @csrf
                        <div class="row">
                                <div class="col-md-12">
                                    <div class="form-input mt-15">
                                        <label>Judul Laporan</label>
                                        <div class="input-items default">
                                            <i class='lni lni-clipboard'></i>
                                            <input value="{{old('judul_laporan')}}" class="form-control {{$errors->first('judul_laporan') ? "is-invalid": ""}}" placeholder="Judul Laporan" type="text" name="judul_laporan" id="judul_laporan"/>

                                            <div class="invalid-feedback">
                                              {{$errors->first('judul_laporan')}}
                                           </div>

                                        </div>
                                    </div> <!-- form input -->
                                </div>

                                <div class="col-md-12">
                                    <div class="form-input mt-15">
                                        <label>Isi Laporan</label>
                                        <div class="input-items default">
                                            <i class="lni-pencil-alt"></i>
                                            <textarea name="isi_laporan" id="isi_laporan" class="form-control {{$errors->first('isi_laporan') ? "is-invalid" : ""}} "placeholder="Masukan isi laporan">{{old('isi_laporan')}}</textarea>
            
                                        <div class="invalid-feedback">
                                            {{$errors->first('isi_laporan')}}
                                        </div>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-12">
                                    <div class="form-input mt-15">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <div class="input-items default">

                                            <i class='lni lni-image'></i>
                                            <input type="file" class="form-control {{$errors->first('image') ? "is-invalid" : ""}}" name="image">
                                            <div class="invalid-feedback">
                                              {{$errors->first('image')}}
                                          </div>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form pt-25">
                                        <div class="input-form rounded-buttons">
                                            <button class="main-btn rounded-three" type="submit">SEND MESSAGE</button>

                                        </div>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <footer class="footer-area footer-one p-5">

        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center d-md-flex justify-content-between align-items-center">
                            <p class="text">Copyright Ujikom © 2020. All Rights Reserved</p>
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>




    <!--====== jquery js ======-->
  <script src="{{asset('template/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('template/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('template/js/popper.min.js')}}"></script>

    <!--====== Images Loaded js ======-->
    <script src="{{asset('template/js/imagesloaded.pkgd.min.js')}}"></script>

    <!--====== Appear js ======-->
    <script src="{{asset('template/js/jquery.appear.min.js')}}"></script>



    <!--====== Main js ======-->
    <script src="{{asset('template/js/main.js')}}"></script>

</body>

</html>