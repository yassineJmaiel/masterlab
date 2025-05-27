
 <!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MasterLab</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.jpg">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/preloader.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/backToTop.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/huicalendar.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

</head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<body>

    <script>
        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif
        </script>
    <!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

    <!-- Add your site or application content here -->

    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="loading-icon text-center d-flex flex-column align-items-center justify-content-center">
                    <img src="assets/img/logo/logo-text.png" alt="logo-img">
                    <img class="loading-logo" src="assets/img/logo/preloader.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- cart mini area start -->
   
    
    <div class="body-overlay"></div>
    <!-- cart mini area end -->

    <!-- side toggle start -->
    <div class="fix">
        <div class="side-info">
            <div class="side-info-content">
                <div class="offset-widget offset-logo mb-40">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <a href="index.html">
                                <img src="assets/img/logo/logo-black.png" alt="Logo">
                            </a>
                        </div>
                        <div class="col-3 text-end"><button class="side-info-close"><i
                                    class="fal fa-times"></i></button>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu d-xl-none fix"></div>
                <div class="offset-widget offset_searchbar mb-30">
                    <div class="menu-search position-relative ">
                        <form action="#" class="filter-search-input">
                            <input type="text" placeholder="Search keyword">
                            <button><i class="fal fa-search"></i></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <div class="offcanvas-overlay-white"></div>
    <!-- side toggle end -->

    <!-- header-area-start  -->
    <header>
        <!-- header-top start-->
      
        <!-- header-top end -->
        <div class="header-area sticky-header" style="    background-color: #f7f7f7b8;">
            <div class="container-fluid">
                <div class="header-main-wrapper">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-7 col-md-5 col-sm-9 col-9">
                            <div class="header-left d-flex align-items-center">
                                <div class="header-logo">
                                    <a href="/"><img src="assets/img/logo.jpg" alt="logo" style="width: 50%; margin-bottom: 14%;"></a>
                                 </div>
                                
                                <div class="main-menu d-none d-xl-block">
                                    <nav id="mobile-menu">
                                       <ul>
                                          <li><a href="/">Acceuil</a> </li>
         
                                          <li><a href="/about">a propos de nous</a> </li>
         
                                            
                                          
                                          <li ><a href="/#masters">Programe master</a> </li>
                                             
                                       
                                       </ul>
                                    </nav>
                                 </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-7 col-sm-3 col-3">
                            <div class="header-right d-flex align-items-center justify-content-end">
                                
                                <div class="cart-wrapper mr-30">
                                    
                                </div>
                                <div class="d-none d-md-block me-2">
                                    <a class="user-btn-sign-up edu-btn" href="/#inscription">S'inscrire</a>
                                 </div>
                                 <div class="d-none d-md-block">
                                    <a class="user-btn-sign-up edu-btn" href="/login">Se connecter</a>
                                 </div>
                                
                                <div class="menu-bar d-xl-none ml-20">
                                    <a class="side-toggle" href="javascript:void(0)">
                                        <div class="bar-icon">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->


    <main>
        <!-- hero-area-start -->
       
        <!-- hero-area-end -->

        <!-- sigin-area sart-->
        <div class="signin-page-area pt-120 pb-120">
            <div class="signin-page-area-wrapper">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="signup-box text-center">
                                            <div class="signup-text">
                                                <h3>Sign in</h3>
                                            </div>
                                            <div class="signup-thumb">
                                                <img src="assets/img/sing-up/sign-up.png" alt="image not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="signup-form-wrapper">
                                            <div class="signup-wrapper">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror                                            </div>
                                            <div class="signup-wrapper">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="mot de passe">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror                                            </div>
                                            
                                            <div class="sing-buttom mb-20">
                                                <button type="submit" class="sing-btn">se connecter</button>
                                            </div>
                                            <div class="registered wrapper">
                                                <div class="not-register">
                                                    <span>Pas encore inscrit ?</span><span><a href="/#inscription">S'inscrire</a></span>
                                                </div>
                                                <div class="forget-password">
                                                    <a href="forgot-password.html">mot de passe oublié ?</a>
                                                </div>
                                            </div>
                                         
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sigin-area end-->

    </main>


    <!-- footer-area-start -->
    <footer>
      <div class="footer-area pt-100">
         <div class="container">
            <div class="footer-main mb-60">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="footer-widget f-w1 mb-40">
                        <div class="footer-img">
                           <a href="/"> <img src="assets/img/logopng.png" alt="footer-logo" style="    width: 90%;"></a>
                           
                        </div>
                       
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="footer-widget f-w2 mb-40">
                        <h3>lien rapide</h3>
                        <ul>
                           <li><a href="/">Acceuil</a></li>
                           <li><a href="about">A propos de nous </a></li>
                           <li><a href="login">se connecter</a></li>
                           <li><a href="#inscription">s'inscrire</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="footer-widget f-w3 mb-40">
                        <h3>Contact</h3>
                       
  <p>
    <span style="margin-right: 10px;">📍</span>
    Rue Jilani Habib 6002 Gabès Tunisie
  </p>
  <p>
    <span style="margin-right: 10px;">📞</span>
    +216 75 272 280
  </p>
  <p>
    <span style="margin-right: 10px;">📠</span>
    +216 75 270 686
  </p>
  <p>
    <span style="margin-right: 10px;">✉️</span>
    <a href="mailto:isggb@isggb.rnu.tn" style="color: white; text-decoration: none;">isggb@isggb.rnu.tn</a>
  </p>

                     </div>
                  </div>
               
               </div>
            </div>
            
         </div>
      </div>
   </footer>ea-end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->


    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/waypoints.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/meanmenu.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/huicalendar.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/backToTop.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>