<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themefie.com/html/edufie/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Nov 2021 16:04:02 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instructor || Student</title>
    <!--fivicon icon-->
    <link rel="icon" href="assets/img/fevicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <link rel="stylesheet" href="assets/css/slick-slide.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">


</head>

<body class='sc5'>
    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div id="wave1">
            </div>
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- search popup area start -->
    <div class="search-popup" id="search-popup">
        <form action="https://themefie.com/html/edufie/home.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->

    <section class="admin-dashboard-section">
        <div class="admin-dashboard-right-side">
            <!-- top header start  -->
            <div class="main-header" style="background-color:#673AB7">
                <div class="header-wraper">
                    <div class="row">
                        <div class="col-xl-6">
                            <span class="header-user">
                                <a href="#"><img src="assets/img/author/02.png" alt="img"></a>
                                <span>Hello,
                                    <h5>{{$instructor->Firstname}} {{$instructor->Lastname}}</h5>
                                </span>
                            </span>
                        </div>
                        <div class="col-xl-6 align-self-center text-lg-end">
                            <div class="d-lg-flex align-items-center">
                                <div class="user-rating text-center d-inline-block">
                                    <span class="d-block">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    4.0 (172 Ratings)
                                </div>
                                <a class="header-btn btn btn-white" href="createCourse">Create a new course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top header end  -->


              <!-- COURSE
    ================================================== -->
    <div class="container pb-4 pb-xl-7">
                <div class="row row-cols-md-3 row-cols-lg-4 mb-6 mb-xl-3">
                    <div class="col-md pb-4 pb-md-7">
                        <div class="card border shadow p-2 lift">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                    <ul class="nav mx-n4 justify-content-center">
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/instructors/instructor-1.jpg" alt="..."></a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-3 pt-4 pb-1">
                                <a href="instructors-single.html" class="d-block">
                                    <h5 class="mb-0">Jack Wilson</h5>
                                </a>
                                <span class="font-size-d-sm">Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <div class="card border shadow p-2 lift">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                    <ul class="nav mx-n4 justify-content-center">
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/instructors/instructor-2.jpg" alt="..."></a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-3 pt-4 pb-1">
                                <a href="instructors-single.html" class="d-block">
                                    <h5 class="mb-0">Anna Richard</h5>
                                </a>
                                <span class="font-size-d-sm">Travel Bloger</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <div class="card border shadow p-2 lift">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                    <ul class="nav mx-n4 justify-content-center">
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/instructors/instructor-3.jpg" alt="..."></a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-3 pt-4 pb-1">
                                <a href="instructors-single.html" class="d-block">
                                    <h5 class="mb-0">Kathelen Monero</h5>
                                </a>
                                <span class="font-size-d-sm">Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <div class="card border shadow p-2 lift">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                    <ul class="nav mx-n4 justify-content-center">
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/instructors/instructor-4.jpg" alt="..."></a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-3 pt-4 pb-1">
                                <a href="instructors-single.html" class="d-block">
                                    <h5 class="mb-0">Kristen Pala</h5>
                                </a>
                                <span class="font-size-d-sm">User Experience Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <div class="card border shadow p-2 lift">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                    <ul class="nav mx-n4 justify-content-center">
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/instructors/instructor-9.jpg" alt="..."></a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-3 pt-4 pb-1">
                                <a href="instructors-single.html" class="d-block">
                                    <h5 class="mb-0">Anna Richard</h5>
                                </a>
                                <span class="font-size-d-sm">Travel Bloger</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <div class="card border shadow p-2 lift">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                    <ul class="nav mx-n4 justify-content-center">
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/instructors/instructor-10.jpg" alt="..."></a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-3 pt-4 pb-1">
                                <a href="instructors-single.html" class="d-block">
                                    <h5 class="mb-0">Jack Wilson</h5>
                                </a>
                                <span class="font-size-d-sm">Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <div class="card border shadow p-2 lift">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                    <ul class="nav mx-n4 justify-content-center">
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/instructors/instructor-11.jpg" alt="..."></a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-3 pt-4 pb-1">
                                <a href="instructors-single.html" class="d-block">
                                    <h5 class="mb-0">Anna Richard</h5>
                                </a>
                                <span class="font-size-d-sm">Travel Bloger</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <div class="card border shadow p-2 lift">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                    <ul class="nav mx-n4 justify-content-center">
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/instructors/instructor-12.jpg" alt="..."></a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-3 pt-4 pb-1">
                                <a href="instructors-single.html" class="d-block">
                                    <h5 class="mb-0">Kathelen Monero</h5>
                                </a>
                                <span class="font-size-d-sm">Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <div class="card border shadow p-2 lift">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                    <ul class="nav mx-n4 justify-content-center">
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/instructors/instructor-13.jpg" alt="..."></a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-3 pt-4 pb-1">
                                <a href="instructors-single.html" class="d-block">
                                    <h5 class="mb-0">Kristen Pala</h5>
                                </a>
                                <span class="font-size-d-sm">User Experience Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <div class="card border shadow p-2 lift">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                    <ul class="nav mx-n4 justify-content-center">
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/instructors/instructor-14.jpg" alt="..."></a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-3 pt-4 pb-1">
                                <a href="instructors-single.html" class="d-block">
                                    <h5 class="mb-0">Anna Richard</h5>
                                </a>
                                <span class="font-size-d-sm">Travel Bloger</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <div class="card border shadow p-2 lift">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                    <ul class="nav mx-n4 justify-content-center">
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/instructors/instructor-15.jpg" alt="..."></a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-3 pt-4 pb-1">
                                <a href="instructors-single.html" class="d-block">
                                    <h5 class="mb-0">Jack Wilson</h5>
                                </a>
                                <span class="font-size-d-sm">Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <div class="card border shadow p-2 lift">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                    <ul class="nav mx-n4 justify-content-center">
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/instructors/instructor-16.jpg" alt="..."></a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-3 pt-4 pb-1">
                                <a href="instructors-single.html" class="d-block">
                                    <h5 class="mb-0">Anna Richard</h5>
                                </a>
                                <span class="font-size-d-sm">Travel Bloger</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="loadcollapseExample" class="collapse row row-cols-md-3 row-cols-lg-4 mb-6 mb-xl-3">
                    <div class="col-md pb-4 pb-md-7">
                        <div class="card border shadow p-2 lift">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                    <ul class="nav mx-n4 justify-content-center">
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/instructors/instructor-1.jpg" alt="..."></a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-3 pt-4 pb-1">
                                <a href="instructors-single.html" class="d-block">
                                    <h5 class="mb-0">Jack Wilson</h5>
                                </a>
                                <span class="font-size-d-sm">Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <div class="card border shadow p-2 lift">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                    <ul class="nav mx-n4 justify-content-center">
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/instructors/instructor-2.jpg" alt="..."></a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-3 pt-4 pb-1">
                                <a href="instructors-single.html" class="d-block">
                                    <h5 class="mb-0">Anna Richard</h5>
                                </a>
                                <span class="font-size-d-sm">Travel Bloger</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <div class="card border shadow p-2 lift">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                    <ul class="nav mx-n4 justify-content-center">
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/instructors/instructor-3.jpg" alt="..."></a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-3 pt-4 pb-1">
                                <a href="instructors-single.html" class="d-block">
                                    <h5 class="mb-0">Kathelen Monero</h5>
                                </a>
                                <span class="font-size-d-sm">Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <div class="card border shadow p-2 lift">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                    <ul class="nav mx-n4 justify-content-center">
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/instructors/instructor-4.jpg" alt="..."></a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-3 pt-4 pb-1">
                                <a href="instructors-single.html" class="d-block">
                                    <h5 class="mb-0">Kristen Pala</h5>
                                </a>
                                <span class="font-size-d-sm">User Experience Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <div class="card border shadow p-2 lift">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                    <ul class="nav mx-n4 justify-content-center">
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/instructors/instructor-9.jpg" alt="..."></a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-3 pt-4 pb-1">
                                <a href="instructors-single.html" class="d-block">
                                    <h5 class="mb-0">Anna Richard</h5>
                                </a>
                                <span class="font-size-d-sm">Travel Bloger</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <div class="card border shadow p-2 lift">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                    <ul class="nav mx-n4 justify-content-center">
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/instructors/instructor-10.jpg" alt="..."></a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-3 pt-4 pb-1">
                                <a href="instructors-single.html" class="d-block">
                                    <h5 class="mb-0">Jack Wilson</h5>
                                </a>
                                <span class="font-size-d-sm">Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <div class="card border shadow p-2 lift">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                    <ul class="nav mx-n4 justify-content-center">
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/instructors/instructor-11.jpg" alt="..."></a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-3 pt-4 pb-1">
                                <a href="instructors-single.html" class="d-block">
                                    <h5 class="mb-0">Anna Richard</h5>
                                </a>
                                <span class="font-size-d-sm">Travel Bloger</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pb-4 pb-md-7">
                        <div class="card border shadow p-2 lift">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                    <ul class="nav mx-n4 justify-content-center">
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item px-4">
                                            <a href="#" class="d-block text-white">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="instructors-single.html" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="assets/img/instructors/instructor-12.jpg" alt="..."></a>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-3 pt-4 pb-1">
                                <a href="instructors-single.html" class="d-block">
                                    <h5 class="mb-0">Kathelen Monero</h5>
                                </a>
                                <span class="font-size-d-sm">Designer</span>
                            </div>
                        </div>
                    </div>
                </div>

           
        </div>
        <!-- dashboard-left-menu start  -->
        <div class="dashboard-left-menu">
            <a href="#" class="logo"><img src="assets/img/brand-gigas.svg" class="navbar-brand-img" alt="..."></a>
            <ul>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="instructorDashboard"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="instructorProfile"><i class="fa fa-user"></i> My Profile</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="instructorCourse"><i class="fas fa-graduation-cap"></i>Total Courses</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu"  href="instructorStudent"><i class="fas fa-user-graduate"></i>Total Students</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="#"><i class="fa fa-shopping-cart"></i>Purchase History</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="earnings"><i class="fas fa-money-check"></i>Earnings</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="#"><i class="fas fa-cog"></i>Settings</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </li>
            </ul>
        </div>
    </section>

    <!-- back-to-top end -->
    <div class="back-to-top">
        <span class="back-top"><i class="fas fa-angle-double-up"></i></span>
    </div>



    <!-- all plugins here -->
    <script src="assets/js/jquery.3.6.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/imageloded.min.js"></script>
    <script src="assets/js/counterup.js"></script>
    <script src="assets/js/waypoint.js"></script>
    <script src="assets/js/magnific.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/fontawesome.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/owl.min.js"></script>
    <script src="assets/js/slick-slider.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <!-- main js  -->
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from themefie.com/html/edufie/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Nov 2021 16:05:23 GMT -->

</html>