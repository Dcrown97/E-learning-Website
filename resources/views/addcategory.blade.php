<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themefie.com/html/edufie/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Nov 2021 16:04:02 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin || Add Category</title>
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
                                    <h5>{{$admins->Firstname}} {{$admins->Lastname}}</h5>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top header end  -->


            <div class="mb-5">

                <div class="row">

                    <div class="col-lg-12">

                        @if ($saved = Session::get('saved'))
                            <h4 class="green">{{ $saved }}</h4>
                        @endif

                        <!-- Register -->
                        <h3 class="mb-6">Create a new category</h3>
                        {{-- <marquee direction="right"><p> <i class="fa fa-exclamation red" aria-hidden="true"></i> note that you can only have minimum of 2 lessons under a module</p></marquee> --}}
                        <!-- Form Register -->

                        <form class="mb-3 row" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Username -->
                            {{-- <div class="form-group mb-3">
                                           <input type="text" name="userID" hidden value="{{ $user['id'] }}"
                                               class="form-control">
                                       </div> --}}
                            <div class="col-sm-6">
                                <label>
                                    <strong>Category name</strong>
                                </label>
                                <input type="text" name="name" class="form-control" required placeholder="HTML 5">
                            </div>



                            <div class="form-group mb-3 col-lg-6">
                                <label>
                                    <strong>Trending</strong>
                                </label>
                                <select name="trending" class="form-control">
                                    <option selected disabled>Select category</option>
                                    <option value="No">NO</option>
                                    <option value="Yes">YES</option>
                                </select>

                            </div>
                            <!-- Submit -->
                            <button class="btn btn-block btn-primary" type="submit">
                                Create Category
                            </button>

                        </form>

                    </div>

                    @if ($categories->isNotEmpty())

                        <table>
                            <thead>

                                <th>
                                    Name
                                </th>
                                <th>
                                    Trending
                                </th>

                            </thead>
                            @foreach ($categories as $category)
                                <tbody>

                                    <tr>
                                        <td>
                                            {{ $category['name'] }}
                                        </td>
                                        <td>
                                            {{ $category['trending'] }}
                                        </td>
                                    </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>


        </div>
        <!-- dashboard-left-menu start  -->
        <div class="dashboard-left-menu">
            <a href="#" class="logo"><img src="assets/img/brand-gigas.svg" class="navbar-brand-img"
                    alt="..."></a>
            <ul>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="adminDashboard"><i
                            class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="adminProfile"><i class="fa fa-user"></i> My Profile</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="adminCourse"><i class="fas fa-graduation-cap"></i>All
                        Courses</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="addcategory"><i class="fas fa-cog"></i>Add Category</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="adminStudent"><i class="fas fa-user-graduate"></i>All
                        Students</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="adminInstructor"><i class="fa fa-user"></i> All
                        Instructors</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="adminEarnings"><i class="fas fa-money-check"></i>Total
                        Earnings</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="#"><i class="fa fa-shopping-cart"></i>Purchase History</a>
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
