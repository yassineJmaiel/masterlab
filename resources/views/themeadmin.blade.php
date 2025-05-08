<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>MasterLab</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/img/logo1.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/assets2/css/bootstrap.min.css">
    <!-- file upload -->
    <link rel="stylesheet" href="/assets2/css/file-upload.css">
    <!-- file upload -->
    <link rel="stylesheet" href="/assets2/css/plyr.css">
    <!-- DataTables -->
    <!-- full calendar -->
    <link rel="stylesheet" href="/assets2/css/full-calendar.css">
    <!-- jquery Ui -->
    <link rel="stylesheet" href="/assets2/css/jquery-ui.css">
    <!-- editor quill Ui -->
    <link rel="stylesheet" href="/assets2/css/editor-quill.css">
    <!-- apex charts Css -->
    <link rel="stylesheet" href="/assets2/css/apexcharts.css">
    <!-- calendar Css -->
    <link rel="stylesheet" href="/assets2/css/calendar.css">
    <!-- jvector map Css -->
    <link rel="stylesheet" href="/assets2/css/jquery-jvectormap-2.0.5.css">
    <!-- Main css -->
    <link rel="stylesheet" href="/assets2/css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <style>
        .toast-middle-center {
            top: 5%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: fixed;
            z-index: 9999;
        }
    </style>
</head> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<body>
    
    <script>
        @if(session('success'))
            toastr.options = {
                "positionClass": "toast-middle-center",
                "timeOut": "3000"
            };
            toastr.success("{{ session('success') }}");
        @endif
    </script>
    
<!--==================== Preloader Start ====================-->
  <div class="preloader">
    <div class="loader"></div>
  </div>
<!--==================== Preloader End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

    <!-- ============================ Sidebar Start ============================ -->

<aside class="sidebar">
    <!-- sidebar close btn -->
     <button type="button" class="sidebar-close-btn text-gray-500 hover-text-white hover-bg-main-600 text-md w-24 h-24 border border-gray-100 hover-border-main-600 d-xl-none d-flex flex-center rounded-circle position-absolute"><i class="ph ph-x"></i></button>
    <!-- sidebar close btn -->
    
    <a href="index-2.html" class="sidebar__logo text-center p-20 position-sticky inset-block-start-0 bg-white w-100 z-1 pb-10">
        <img src="/assets/img/logo1.png" alt="Logo" style="    width: 65%;
">
    </a>

    <div class="sidebar-menu-wrapper overflow-y-auto scroll-sm">
        <div class="p-20 pt-10">
            <ul class="sidebar-menu">
                <li class="sidebar-menu__item ">
                    <a href="javascript:void(0)" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-squares-four"></i></span>
                        <span class="text">Tableau de board</span>
                    </a>
                   
                </li>
                 <li class="sidebar-menu__item has-dropdown">
                    <a href="javascript:void(0)" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-graduation-cap"></i></span>
                        <span class="text">Masters</span>
                    </a>
                    <!-- Submenu start -->
                    <ul class="sidebar-submenu">
                        @if(Auth::user()->role=="admin")
                        <li class="sidebar-submenu__item">
                            <a href="/ajouter-master" class="sidebar-submenu__link"> ajouter master </a>
                        </li>

                        <li class="sidebar-submenu__item">
                            <a href="/listcandidatures" class="sidebar-submenu__link">list candidatures </a>
                        </li>
                        @endif

                        <li class="sidebar-submenu__item">
                            <a href="/masters" class="sidebar-submenu__link"> liste des masters </a>
                        </li>
                        @if(Auth::user()->role<>"admin")
                        <li class="sidebar-submenu__item">
                            <a href="/mescondidatures" class="sidebar-submenu__link"> mes candidatures </a>
                        </li>
                        @endif


                        
                    </ul>

                    
                    <!-- Submenu End -->
                </li> 
                @if(Auth::user()->role<>"admin")

                <li class="sidebar-menu__item has-dropdown">
                    <a href="javascript:void(0)" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-graduation-cap"></i></span>
                        <span class="text">intérêts</span>
                    </a>
                    <!-- Submenu start -->
                    <ul class="sidebar-submenu">
                        <li class="sidebar-submenu__item">
                            <a href="/ajouter-interet" class="sidebar-submenu__link"> ajouter intérêt </a>
                        </li>

                        <li class="sidebar-submenu__item">
                            <a href="/mesinterets" class="sidebar-submenu__link">mes intérêts </a>
                        </li>
                        
                    </ul>

                    
                    <!-- Submenu End -->
                </li> 
                @endif
                @if(Auth::user()->role=="admin")
                <li class="sidebar-menu__item">
                    <a href="/etudiants" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-users-three"></i></span>
                        <span class="text">Etudiants</span>
                    </a>
                </li>
                @endif

                <div class="p-20 pt-80">
                    <div class="bg-main-50 p-20 pt-0 rounded-16 text-center mt-74">
                        <span class="border border-5 bg-white mx-auto border-primary-50 w-114 h-114 rounded-circle flex-center text-success-600 text-2xl translate-n74">
                            <img src="assets2/images/icons/certificate.png" alt="" class="centerised-img">
                        </span>
                        <div class="mt-n74">
                            <h5 class="mb-4 mt-22">Program Master</h5>
                            <p class="">Recommendation AI</p>
                            <a href="#" class="btn btn-main mt-16 rounded-pill" data-bs-toggle="modal" data-bs-target="#recommendationModal">Accéder</a>
                        </div>
                    </div>
                </div>
              
               {{--  <li class="sidebar-menu__item">
                    <a href="mentors.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-users"></i></span>
                        <span class="text">Mentors</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="resources.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-bookmarks"></i></span>
                        <span class="text">Resources</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="message.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-chats-teardrop"></i></span>
                        <span class="text">Messages</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="analytics.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-chart-bar"></i></span>
                        <span class="text">Analytics</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="event.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-calendar-dots"></i></span>
                        <span class="text">Events</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="library.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-books"></i></span>
                        <span class="text">Library</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="pricing-plan.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-coins"></i></span>
                        <span class="text">Pricing</span>
                    </a>
                </li>
                
                <li class="sidebar-menu__item">
                    <span class="text-gray-300 text-sm px-20 pt-20 fw-semibold border-top border-gray-100 d-block text-uppercase">Settings</span>
                </li>
                <li class="sidebar-menu__item">
                    <a href="setting.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-gear"></i></span>
                        <span class="text">Account Settings</span>
                    </a>
                </li> --}}

              
                
            </ul>
        </div>
       
    </div>

</aside>    
<!-- ============================ Sidebar End  ============================ -->

    <div class="dashboard-main-wrapper">
        <div class="top-navbar flex-between gap-16">

    <div class="flex-align gap-16">
        <!-- Toggle Button Start -->
         <button type="button" class="toggle-btn d-xl-none d-flex text-26 text-gray-500"><i class="ph ph-list"></i></button>
        <!-- Toggle Button End -->
        
        <form action="#" class="w-350 d-sm-block d-none">
            <div class="position-relative">
                <button type="submit" class="input-icon text-xl d-flex text-gray-100 pointer-event-none"><i class="ph ph-magnifying-glass"></i></button> 
                <input type="text" class="form-control ps-40 h-40 border-transparent focus-border-main-600 bg-main-50 rounded-pill placeholder-15" placeholder="Search...">
            </div>
        </form>
    </div>

    <div class="flex-align gap-16">
        <div class="flex-align gap-8">
            <!-- Notification Start -->
            <div class="dropdown">
                <button class="dropdown-btn shaking-animation text-gray-500 w-40 h-40 bg-main-50 hover-bg-main-100 transition-2 rounded-circle text-xl flex-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="position-relative">
                        <i class="ph ph-bell"></i>
                        <span class="alarm-notify position-absolute end-0"></span>
                    </span>
                </button>
               {{--  <div class="dropdown-menu dropdown-menu--lg border-0 bg-transparent p-0">
                    <div class="card border border-gray-100 rounded-12 box-shadow-custom p-0 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="py-8 px-24 bg-main-600">
                                <div class="flex-between">
                                    <h5 class="text-xl fw-semibold text-white mb-0">Notifications</h5>
                                    <div class="flex-align gap-12">
                                        <button type="button" class="bg-white rounded-6 text-sm px-8 py-2 hover-text-primary-600"> New </button>
                                        <button type="button" class="close-dropdown hover-scale-1 text-xl text-white"><i class="ph ph-x"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="p-24 max-h-270 overflow-y-auto scroll-sm">
                                <div class="d-flex align-items-start gap-12">
                                    <img src="/assets2/images/thumbs/notification-img1.png" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                                    <div class="border-bottom border-gray-100 mb-24 pb-24">
                                        <div class="flex-align gap-4">
                                            <a href="#" class="fw-medium text-15 mb-0 text-gray-300 hover-text-main-600 text-line-2">Ashwin Bose is requesting access to Design File - Final Project. </a>
                                            <!-- Three Dot Dropdown Start -->
                                            <div class="dropdown flex-shrink-0">
                                                <button class="text-gray-200 rounded-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ph-fill ph-dots-three-outline"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu--md border-0 bg-transparent p-0">
                                                    <div class="card border border-gray-100 rounded-12 box-shadow-custom">
                                                        <div class="card-body p-12">
                                                            <div class="max-h-200 overflow-y-auto scroll-sm pe-8">
                                                                <ul>
                                                                    <li class="mb-0">
                                                                        <a href="#" class="py-6 text-15 px-8 hover-bg-gray-50 text-gray-300 rounded-8 fw-normal text-xs d-block">
                                                                            <span class="text">Mark as read</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="mb-0">
                                                                        <a href="#" class="py-6 text-15 px-8 hover-bg-gray-50 text-gray-300 rounded-8 fw-normal text-xs d-block">
                                                                            <span class="text">Delete Notification</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="mb-0">
                                                                        <a href="#" class="py-6 text-15 px-8 hover-bg-gray-50 text-gray-300 rounded-8 fw-normal text-xs d-block">
                                                                            <span class="text">Report</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Three Dot Dropdown End -->
                                        </div>
                                        <div class="flex-align gap-6 mt-8">
                                            <img src="/assets2/images/icons/google-drive.png" alt="">
                                            <div class="flex-align gap-4">
                                                <p class="text-gray-900 text-sm text-line-1">Design brief and ideas.txt</p>
                                                <span class="text-xs text-gray-200 flex-shrink-0">2.2 MB</span>
                                            </div>
                                        </div>
                                        <div class="mt-16 flex-align gap-8">
                                            <button type="button" class="btn btn-main py-8 text-15 fw-normal px-16">Accept</button>
                                            <button type="button" class="btn btn-outline-gray py-8 text-15 fw-normal px-16">Decline</button>
                                        </div>
                                        <span class="text-gray-200 text-13 mt-8">2 mins ago</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-12">
                                    <img src="/assets2/images/thumbs/notification-img2.png" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                                    <div class="">
                                        <a href="#" class="fw-medium text-15 mb-0 text-gray-300 hover-text-main-600 text-line-2">Patrick added a comment on Design /assets2 - Smart Tags file:</a>
                                        <span class="text-gray-200 text-13">2 mins ago</span>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="py-13 px-24 fw-bold text-center d-block text-primary-600 border-top border-gray-100 hover-text-decoration-underline"> View All </a>

                        </div>
                    </div>
                </div> --}}
            </div>
            <!-- Notification Start -->
            
            <!-- Language Start -->
            {{-- <div class="dropdown">
                <button class="text-gray-500 w-40 h-40 bg-main-50 hover-bg-main-100 transition-2 rounded-circle text-xl flex-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ph ph-globe"></i>
                </button>
                <div class="dropdown-menu dropdown-menu--md border-0 bg-transparent p-0">
                    <div class="card border border-gray-100 rounded-12 box-shadow-custom">
                        <div class="card-body">
                            <div class="max-h-270 overflow-y-auto scroll-sm pe-8">
                                <div class="form-check form-radio d-flex align-items-center justify-content-between ps-0 mb-16">
                                  <label class="ps-0 form-check-label line-height-1 fw-medium text-secondary-light" for="arabic"> 
                                    <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-8"> 
                                      <img src="/assets2/images/thumbs/flag1.png" alt="" class="w-32-px h-32-px border borde border-gray-100 rounded-circle flex-shrink-0">
                                      <span class="text-15 fw-semibold mb-0">Arabic</span>
                                    </span>
                                  </label>
                                  <input class="form-check-input" type="radio" name="language" id="arabic">
                                </div>
                                <div class="form-check form-radio d-flex align-items-center justify-content-between ps-0 mb-16">
                                  <label class="ps-0 form-check-label line-height-1 fw-medium text-secondary-light" for="germany"> 
                                    <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-8"> 
                                      <img src="/assets2/images/thumbs/flag2.png" alt="" class="w-32-px h-32-px border borde border-gray-100 rounded-circle flex-shrink-0">
                                      <span class="text-15 fw-semibold mb-0">Germany</span>
                                    </span>
                                  </label>
                                  <input class="form-check-input" type="radio" name="language" id="germany">
                                </div>
                                <div class="form-check form-radio d-flex align-items-center justify-content-between ps-0 mb-16">
                                  <label class="ps-0 form-check-label line-height-1 fw-medium text-secondary-light" for="english"> 
                                    <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-8"> 
                                      <img src="/assets2/images/thumbs/flag3.png" alt="" class="w-32-px h-32-px border borde border-gray-100 rounded-circle flex-shrink-0">
                                      <span class="text-15 fw-semibold mb-0">English</span>
                                    </span>
                                  </label>
                                  <input class="form-check-input" type="radio" name="language" id="english">
                                </div>
                                <div class="form-check form-radio d-flex align-items-center justify-content-between ps-0">
                                  <label class="ps-0 form-check-label line-height-1 fw-medium text-secondary-light" for="spanish"> 
                                    <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-8"> 
                                      <img src="/assets2/images/thumbs/flag4.png" alt="" class="w-32-px h-32-px border borde border-gray-100 rounded-circle flex-shrink-0">
                                      <span class="text-15 fw-semibold mb-0">Spanish</span>
                                    </span>
                                  </label>
                                  <input class="form-check-input" type="radio" name="language" id="spanish">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Language Start -->
        </div>


        <!-- User Profile Start -->
        <div class="dropdown">
            <button class="users arrow-down-icon border border-gray-200 rounded-pill p-4 d-inline-block pe-40 position-relative" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="position-relative">
                    <img src="/assets2/images/thumbs/user-img.png" alt="Image" class="h-32 w-32 rounded-circle">
                    <span class="activation-badge w-8 h-8 position-absolute inset-block-end-0 inset-inline-end-0"></span>
                </span>
            </button>
            <div class="dropdown-menu dropdown-menu--lg border-0 bg-transparent p-0">
                <div class="card border border-gray-100 rounded-12 box-shadow-custom">
                    <div class="card-body">
                        <div class="flex-align gap-8 mb-20 pb-20 border-bottom border-gray-100">
                            <img src="/assets2/images/thumbs/user-img.png" alt="" class="w-54 h-54 rounded-circle">
                            <div class="">
                                <h4 class="mb-0">{{Auth::user()->nom}}</h4>
                                <p class="fw-medium text-13 text-gray-200">{{Auth::user()->email}}</p>
                            </div>
                        </div>
                        <ul class="max-h-270 overflow-y-auto scroll-sm pe-4">
                            <li class="mb-4">
                                <a href="setting.html" class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                    <span class="text-2xl text-primary-600 d-flex"><i class="ph ph-gear"></i></span>
                                    <span class="text">Parametre</span>
                                </a>
                            </li>
                            
                            <li class="pt-8 border-top border-gray-100">
                                

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('se deconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- User Profile Start -->

    </div>
</div>
<div class="modal fade" id="recommendationModal" tabindex="-1" aria-labelledby="recommendationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content p-4">
        
        <div class="modal-header">
            <div class="d-flex align-items-center">
          <img src="https://cdn-icons-png.flaticon.com/512/4712/4712104.png" alt="Assistant IA" width="40" height="40" class="me-2">
          <h5 class="modal-title mb-0" id="recommendationModalLabel">Bonjour ! Je suis votre assistant IA 🤖</h5>
        </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="POST" class="space-y-6">
                @csrf
      
                <div class="mb-3">
                  <label for="name" class="form-label fw-semibold">👤 Nom complet</label>
                  <input type="text" name="name" id="name" required class="form-control rounded-3" placeholder="ex: Sarah Dupont">
                </div>
      
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="GPA" class="form-label fw-semibold">📊 Moyenne (GPA)</label>
                    <input type="number" step="0.1" name="GPA" id="GPA" required class="form-control rounded-3" placeholder="0.0 - 4.0">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="AI_Grade" class="form-label fw-semibold">🤖 Note en IA</label>
                    <input type="number" step="0.1" name="AI_Grade" id="AI_Grade" required class="form-control rounded-3" placeholder="0.0 - 100.0">
                  </div>
                </div>
      
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="Math_Grade" class="form-label fw-semibold">🧮 Note en Math</label>
                    <input type="number" step="0.1" name="Math_Grade" id="Math_Grade" required class="form-control rounded-3" placeholder="0.0 - 100.0">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="English_Grade" class="form-label fw-semibold">📚 Note en Anglais</label>
                    <input type="number" step="0.1" name="English_Grade" id="English_Grade" required class="form-control rounded-3" placeholder="0.0 - 100.0">
                  </div>
                </div>
      
                <div class="mb-4">
                    <label for="Interests" class="form-label fw-semibold">✨ Centres d’intérêt</label>
                    <input type="text" name="Interests" id="Interests" required
                           class="form-control rounded-3"
                           placeholder="ex: IA, Robotique, Data Science"
                           value="{{ old('Interests', $etudiantInterests) }}">
                    <div class="form-text">Séparez les centres d’intérêt par des virgules</div>
                  </div>
      
                <div class="d-grid">
                  <button type="submit" class="btn btn-success rounded-pill py-2 fs-5">
                    🔍 Obtenir une recommandation
                  </button>
                </div>
              </form>
        </div>
      </div>
    </div>
  </div>
  
        
        <div class="dashboard-body">
           
           @yield('content')
        </div>
        <div class="dashboard-footer">
    <div class="flex-between flex-wrap gap-16">
        <p class="text-gray-300 text-13 fw-normal"> &copy; Copyright Edmate 2024, All Right Reserverd</p>
        <div class="flex-align flex-wrap gap-16">
            <a href="#" class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">License</a>
            <a href="#" class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">More Themes</a>
            <a href="#" class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">Documentation</a>
            <a href="#" class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">Support</a>
        </div>
    </div>
</div>
    </div>
    
        <!-- Jquery js -->
    <script src="/assets2/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="/assets2/js/boostrap.bundle.min.js"></script>
    <!-- Phosphor Js -->
    <script src="/assets2/js/phosphor-icon.js"></script>
    <!-- file upload -->
    <script src="/assets2/js/file-upload.js"></script>
    <!-- file upload -->
    <script src="/assets2/js/plyr.js"></script>
    <!-- dataTables -->
    <!-- full calendar -->
    <script src="/assets2/js/full-calendar.js"></script>
    <!-- jQuery UI -->
    <script src="/assets2/js/jquery-ui.js"></script>
    <!-- jQuery UI -->
    <script src="/assets2/js/editor-quill.js"></script>
    <!-- apex charts -->
    <script src="/assets2/js/apexcharts.min.js"></script>
    <!-- jvectormap Js -->
    <script src="/assets2/js/jquery-jvectormap-2.0.5.min.js"></script>
    <!-- jvectormap world Js -->
    <script src="/assets2/js/jquery-jvectormap-world-mill-en.js"></script>
    
    <!-- main js -->
    <script src="/assets2/js/main.js"></script>



<!-- Bootstrap JS bundle (includes Popper) -->

   
    
    
    </body>
</html>