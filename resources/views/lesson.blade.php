<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themefie.com/html/edufie/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Nov 2021 16:04:02 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instructor || Profile</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">


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
                                <a class="header-btn btn btn-white" href="#">Create a new course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top header end  -->

            @if ($success = Session::get('success'))

                <h4 style="color: rgb(95, 110, 90)">{{ $success }}</h4>

            @endif


            <div class="container pb-6 pb-xl-10">
                <form name="checkout" method="POST" class="checkout woocommerce-checkout" action="" novalidate="">
                    @csrf
                    <div class="col2-set" id="customer_details">
                        <div class="">
                            <div class="woocommerce-billing-fields">
                                <h3>Add Lessons</h3>
                                <label for=""><strong>Module</strong></label>
                                <div class="form-floating mb-3">
                                    <input type="text" name="module" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <strong style="color: red"> @error('module') {{ $message }}
                                        @enderror</strong>
                                    <label for="floatingInput">Enter Module</label>
                                </div>
                                <div class="row g-3" style="margin-bottom: 10px;">
                                <label for=""><strong>Lesson1</strong></label>
                                <div class="form-floating mb-3">
                                    <input type="text" name="lesson1_title" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <strong style="color: red"> @error('lesson1_title') {{ $message }}
                                        @enderror</strong>
                                    <label for="floatingInput">Enter Lesson Title</label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="lesson1_video" class="form-control" id="floatingPassword"
                                        placeholder="Password">
                                    <strong style="color: red"> @error('lesson1_video') {{ $message }}
                                        @enderror</strong>
                                    <label for="floatingPassword">Enter Lesson Video Link</label>
                                </div>
                                <label for=""><strong>Lesson2</strong></label>
                                <div class="form-floating mb-3">
                                    <input type="text" name="lesson2_title" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <strong style="color: red"> @error('lesson2_title') {{ $message }}
                                        @enderror</strong>
                                    <label for="floatingInput">Enter Lesson Title</label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="lesson2_video" class="form-control" id="floatingPassword"
                                        placeholder="Password">
                                         <strong style="color: red"> @error('lesson2_video') {{ $message }}
                                        @enderror</strong>
                                    <label for="floatingPassword">Enter Lesson Video Link</label>
                                </div>
                                <label for=""><strong>Lesson3</strong></label>
                                <div class="form-floating mb-3">
                                    <input type="text" name="lesson3_title" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <strong style="color: red"> @error('lesson3_title') {{ $message }}
                                        @enderror</strong>
                                    <label for="floatingInput">Enter Lesson Title</label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="lesson3_video" class="form-control" id="floatingPassword"
                                        placeholder="Password">
                                    <strong style="color: red"> @error('lesson3_video') {{ $message }}
                                        @enderror</strong>
                                    <label for="floatingPassword">Enter Lesson Video Link</label>
                                </div>
                                <label for=""><strong>Lesson4</strong></label>
                                <div class="form-floating mb-3">
                                    <input type="text" name="lesson4_title" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <strong style="color: red"> @error('lesson4_title') {{ $message }}
                                        @enderror</strong>
                                    <label for="floatingInput">Enter Lesson Title</label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="lesson4_video" class="form-control" id="floatingPassword"
                                        placeholder="Password">
                                    <strong style="color: red"> @error('lesson4_video') {{ $message }}
                                        @enderror</strong>
                                    <label for="floatingPassword">Enter Lesson Video Link</label>
                                </div>
                                <div class="form-row place-order" style="margin-top: 20px;">
                                    <button class="btn btn-primary" type="submit">
                                            Submit
                                        </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- dashboard-left-menu start  -->
        <div class="dashboard-left-menu">
            <a href="#" class="logo"><img src="assets/img/brand-gigas.svg" class="navbar-brand-img"
                    alt="..."></a>
            <ul>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="instructorDashboard"><i
                            class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="instructorProfile"><i class="fa fa-user"></i> My
                        Profile</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="instructorCourse"><i class="fas fa-graduation-cap"></i>Total
                        Courses</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="instructorStudent"><i class="fas fa-user-graduate"></i>Total
                        Students</a>
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
