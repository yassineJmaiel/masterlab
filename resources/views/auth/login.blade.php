{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}


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
                                    <a href="index.html"><img src="assets/img/logo.jpg" alt="logo" style="width: 50%; margin-bottom: 14%;"></a>
                                 </div>
                                
                                <div class="main-menu d-none d-xl-block">
                                    <nav id="mobile-menu">
                                       <ul>
                                          <li><a href="index.html">Acceuil</a> </li>
         
                                          <li><a href="index.html">a propos de nous</a> </li>
         
                                            
                                          
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
                             <a href="index.html"> <img src="assets/img/logopng.png" alt="footer-logo" style="    width: 90%;"></a>
                             
                          </div>
                          <div class="footer-icon">
                             <a href="#"><i class="fab fa-facebook-f"></i></a>
                             <a href="#"><i class="fab fa-twitter"></i></a>
                             <a href="#"><i class="fab fa-instagram"></i></a>
                             <a href="#"> <i class="fab fa-linkedin-in"></i></a>
                          </div>
                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                       <div class="footer-widget f-w2 mb-40">
                          <h3>Online Platform</h3>
                          <ul>
                             <li><a href="#">Proper Guidelines</a></li>
                             <li><a href="#">Digital Library</a></li>
                             <li><a href="#">Compare Us</a></li>
                             <li><a href="#">Become Instructor</a></li>
                             <li><a href="#">Build Career</a></li>
                          </ul>
                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                       <div class="footer-widget f-w3 mb-40">
                          <h3>Browse Courses</h3>
                          <ul>
                             <li><a href="#">Development</a></li>
                             <li><a href="#">Business</a></li>
                             <li><a href="#">Health & Fitness</a></li>
                             <li><a href="#">Life Styles</a></li>
                             <li><a href="#">Photography</a></li>
                          </ul>
                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                       <div class="footer-widget f-w4 mb-40">
                          <h3>Insight Community</h3>
                          <ul>
                             <li><a href="#">Global Partners</a></li>
                             <li><a href="#">Forum</a></li>
                             <li><a href="#">Help & Support</a></li>
                             <li><a href="#">Community</a></li>
                             <li><a href="#">Documentation</a></li>
                          </ul>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="copyright-area">
                 <div class="container">
                    <div class="row">
                       <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                          <div class="copyright-text border-line">
                             <p>© Copyrighted & Designed
                                by <a href="https://themeforest.net/user/bdevs"><span>BDevs</span></a> </p>
                          </div>
                       </div>
                       <div class="col-xl-4 col-lg-4 col-sm-6">
                          <div class="copy-right-support border-line-2">
                             <div class="copy-right-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="43.945" height="50"
                                   viewBox="0 0 43.945 50">
                                   <g id="headphones" transform="translate(-31)">
                                      <g id="Group_2171" data-name="Group 2171" transform="translate(36.859 20.508)">
                                         <g id="Group_2170" data-name="Group 2170">
                                            <path id="Path_2983" data-name="Path 2983"
                                               d="M95.395,210A4.4,4.4,0,0,0,91,214.395v11.914a4.395,4.395,0,1,0,8.789,0V214.395A4.4,4.4,0,0,0,95.395,210Z"
                                               transform="translate(-91 -210)" fill="#2467ec" />
                                         </g>
                                      </g>
                                      <g id="Group_2173" data-name="Group 2173" transform="translate(31 23.669)">
                                         <g id="Group_2172" data-name="Group 2172">
                                            <path id="Path_2984" data-name="Path 2984"
                                               d="M33.93,243.6a7.268,7.268,0,0,1,.125-1.234A4.386,4.386,0,0,0,31,246.529v6.055a4.386,4.386,0,0,0,3.054,4.163,7.268,7.268,0,0,1-.125-1.234Z"
                                               transform="translate(-31 -242.366)" fill="#2467ec" />
                                         </g>
                                      </g>
                                      <g id="Group_2175" data-name="Group 2175" transform="translate(48.578 20.508)">
                                         <g id="Group_2174" data-name="Group 2174">
                                            <path id="Path_2985" data-name="Path 2985"
                                               d="M227.113,210a4.4,4.4,0,0,0-4.395,4.395v11.914a4.4,4.4,0,0,0,4.395,4.395,4.335,4.335,0,0,0,1.259-.206,4.386,4.386,0,0,1-4.189,3.136h-4.664a4.395,4.395,0,1,0,0,2.93h4.664a7.333,7.333,0,0,0,7.324-7.324V214.395A4.4,4.4,0,0,0,227.113,210Z"
                                               transform="translate(-211 -210)" fill="#2467ec" />
                                         </g>
                                      </g>
                                      <g id="Group_2177" data-name="Group 2177" transform="translate(71.891 23.669)">
                                         <g id="Group_2176" data-name="Group 2176">
                                            <path id="Path_2986" data-name="Path 2986"
                                               d="M449.722,242.366a7.266,7.266,0,0,1,.125,1.234v11.914a7.266,7.266,0,0,1-.125,1.234,4.386,4.386,0,0,0,3.055-4.163v-6.055A4.386,4.386,0,0,0,449.722,242.366Z"
                                               transform="translate(-449.722 -242.366)" fill="#2467ec" />
                                         </g>
                                      </g>
                                      <g id="Group_2179" data-name="Group 2179" transform="translate(31)">
                                         <g id="Group_2178" data-name="Group 2178">
                                            <path id="Path_2987" data-name="Path 2987"
                                               d="M52.973,0A22,22,0,0,0,31,21.973v.037a7.253,7.253,0,0,1,3-1.361,19.02,19.02,0,0,1,37.952,0,7.256,7.256,0,0,1,3,1.361v-.037A22,22,0,0,0,52.973,0Z"
                                               transform="translate(-31)" fill="#2467ec" />
                                         </g>
                                      </g>
                                   </g>
                                </svg>
                             </div>
                             <div class="copyright-svg-content">
                                <p>Have a question? Call us 24/7</p>
                                <h5><a href="tel:(987)547587587">(987) 547587587</a></h5>
                             </div>
                          </div>
                       </div>
                       <div class="col-xl-5 col-lg-5 col-md-12">
                          <div class="copyright-subcribe">
                             <form action="#" class="widget__subscribe">
                                <div class="field">
                                   <input type="email" placeholder="Enter Email">
                                </div>
                                <button type="submit">Subscribe<i class="fas fa-paper-plane"></i></button>
                             </form>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </footer>
    <!-- footer-area-end -->

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