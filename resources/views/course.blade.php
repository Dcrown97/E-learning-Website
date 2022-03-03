@extends('master')
@section('content')

    <!-- PAGE TITLE
        ================================================== -->
    <header class="py-8 py-md-11" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0">Courses on Skola</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-scroll justify-content-center">
                    <li class="breadcrumb-item">
                        <a class="text-gray-800" href="#">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item text-gray-800 active" aria-current="page">
                        Courses on skola
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Img -->
        <img class="d-none img-fluid" src="...html" alt="...">
    </header>

    <!-- CONTROL BAR
        ================================================== -->
    <div class="container mb-6 mb-xl-8 z-index-2">
        <div class="d-xl-flex align-items-center">
            <p class="mb-xl-0"> {{ $title }} We found <span
                    class="text-dark">{{ count($uploadedCourses) }} courses</span> available for you</p>
            <div class="ms-xl-auto d-xl-flex flex-wrap">
                <div class="mb-4 mb-xl-0 ms-xl-6">
                    <!-- Search -->
                    <form class="">
                        <div class="input-group input-group-filter">
                            <input class="form-control form-control-sm placeholder-dark border-end-0 shadow-none"
                                type="search" placeholder="Search our courses" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sm btn-outline-white border-start-0 text-dark bg-transparent"
                                    type="submit">
                                    <!-- Icon -->
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.8477 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.8477 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.8477 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z"
                                            fill="currentColor" />
                                        <path
                                            d="M19.762 18.6121L15.1007 13.9509C14.7831 13.6332 14.2687 13.6332 13.9511 13.9509C13.6335 14.2682 13.6335 14.7831 13.9511 15.1005L18.6124 19.7617C18.7712 19.9205 18.9791 19.9999 19.1872 19.9999C19.395 19.9999 19.6032 19.9205 19.762 19.7617C20.0796 19.4444 20.0796 18.9295 19.762 18.6121Z"
                                            fill="currentColor" />
                                    </svg>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="mb-4 mb-xl-0 ms-xl-6">
                    <select class="form-select form-select-sm text-dark shadow-none dropdown-menu-end" data-choices>
                        <option>All Categories</option>
                        <option>Another option</option>
                        <option>Something else here</option>
                    </select>
                </div>

                <div class="mb-4 mb-xl-0 ms-xl-6">
                    <div class="border rounded d-flex align-items-center choices-label h-50p">
                        <span class="ps-5">Sort by:</span>
                        <form id="filter_form" method="POST">
                            @csrf
                            <select name="filter" id="filter"
                                class="form-select form-select-sm text-dark border-0 ps-1 bg-transparent flex-grow-1 shadow-none dropdown-menu-end"
                                data-choices>
                                <option>Default</option>
                                <option value="new_courses">New Courses</option>
                                <option value="low_to_high">Price Low to High</option>
                                <option value="high_to_low">Price High to low</option>
                            </select>
                        </form>
                        <script>
                            $('#filter').change(function() {
                                $('#filter_form').submit();
                            })
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- COURSE LIST V1
        ================================================== -->
    <div class="container pb-4 pb-xl-7">
        <div class="row row-cols-md-2 row-cols-xl-3 mb-6 mb-xl-3">
            @foreach ($uploadedCourses as $uploadedCourse)
            <div class="col-md pb-4 pb-md-7">
                <!-- Card -->
                <div class="card border shadow p-2 lift sk-fade">
                    <!-- Image -->
                    <div class="card-zoom position-relative">
                        <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                            <a href="/courseSingle/{{base64_encode($uploadedCourse['id'])}}"
                                class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                <!-- Icon -->
                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z"
                                        fill="currentColor" />
                                    <path
                                        d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z"
                                        fill="currentColor" />
                                </svg>

                            </a>
                            <a href="/courseSingle/{{base64_encode($uploadedCourse['id'])}}"
                                class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                <!-- Icon -->
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.2437 1.20728C10.0203 1.20728 8.87397 1.66486 7.99998 2.48357C7.12598 1.66486 5.97968 1.20728 4.7563 1.20728C2.13368 1.20728 0 3.341 0 5.96366C0 7.2555 0.425164 8.52729 1.26366 9.74361C1.91197 10.6841 2.80887 11.5931 3.92937 12.4454C5.809 13.8753 7.66475 14.6543 7.74285 14.6867L7.99806 14.7928L8.25384 14.6881C8.33199 14.6562 10.1889 13.8882 12.0696 12.4635C13.1907 11.6142 14.0881 10.7054 14.7367 9.7625C15.575 8.54385 16 7.26577 16 5.96371C16 3.341 13.8663 1.20728 11.2437 1.20728ZM8.00141 13.3353C6.74962 12.7555 1.33966 10.0142 1.33966 5.96366C1.33966 4.07969 2.87237 2.54698 4.75634 2.54698C5.827 2.54698 6.81558 3.03502 7.46862 3.88598L8.00002 4.57845L8.53142 3.88598C9.18446 3.03502 10.173 2.54698 11.2437 2.54698C13.1276 2.54698 14.6604 4.07969 14.6604 5.96366C14.6603 10.0433 9.25265 12.7613 8.00141 13.3353Z"
                                        fill="currentColor" />
                                </svg>

                            </a>
                        </div>

                        <a href="/courseSingle/{{base64_encode($uploadedCourse->id)}}" class="card-img sk-thumbnail d-block">
                            <img class="rounded shadow-light-lg" src="/assets/img/products/product-1.jpg" alt="...">
                        </a>

                        <span
                            class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                            <span class="text-white text-uppercase fw-bold font-size-xs">BEST SELLER</span>
                        </span>
                    </div>

                    <!-- Footer -->
                    <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                        <a href="instructors-single.html" class="d-block">
                            <div
                                class="avatar sk-fade-right avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                <img src="/assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </a>

                        <!-- Preheading -->
                        <a href="/courseSingle/{{base64_encode($uploadedCourse['id'])}}"><span class="mb-1 d-inline-block text-gray-800">{{$uploadedCourse["category"]}}</span></a>

                        <!-- Heading -->
                        <div class="position-relative">
                            <a href="/courseSingle/{{base64_encode($uploadedCourse['id'])}}" class="d-block stretched-link">
                                <h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">{{ $uploadedCourse["title"]}}<h4>
                            </a>

                            <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                    <div class="rating" style="width:50%;"></div>
                                </div>

                                <div class="font-size-sm">
                                    <span>5.45 (5.8k+ reviews)</span>
                                </div>
                            </div>

                            <div class="row mx-n2 align-items-end">
                                <div class="col px-2">
                                    <ul class="nav mx-n3">
                                        <li class="nav-item px-3">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex icon-uxs text-secondary">
                                                    <!-- Icon -->
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z"
                                                            fill="currentColor" />
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">{{$uploadedCourse["lesson_count"]}} lessons</div>
                                            </div>
                                        </li>
                                        <li class="nav-item px-3">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex icon-uxs text-secondary">
                                                    <!-- Icon -->
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                            fill="currentColor" />
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">{{$uploadedCourse["duration"]}}</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-auto px-2 text-right">
                                    
                                    <ins class="h4 mb-0 d-block mb-lg-n1">${{$uploadedCourse["price"]}}</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             @endforeach
            
        </div>


        <div class="text-center">
            <a class="btn btn-outline-white mw-300p d-flex mx-auto read-more" data-bs-toggle="collapse"
                href="#loadcollapseExample" role="button" aria-expanded="false" aria-controls="loadcollapseExample">
                <span class="d-inline-flex mx-auto align-items-center more">
                    <!-- Icon -->
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.76026 17.0396C5.16013 17.0396 4.65015 17.2495 4.23011 17.6695C3.81023 18.0899 3.60014 18.5998 3.60014 19.1999C3.60014 19.8001 3.81008 20.31 4.23011 20.7303C4.65031 21.1503 5.16029 21.3603 5.76026 21.3603C6.35031 21.3603 6.85772 21.1503 7.2828 20.7303C7.70772 20.3105 7.92018 19.8001 7.92018 19.1999C7.92018 18.5998 7.70777 18.0902 7.2828 17.6695C6.85766 17.2499 6.35031 17.0396 5.76026 17.0396Z"
                            fill="currentColor" />
                        <path
                            d="M5.28028 12.4799C5.28028 11.8199 5.04538 11.2551 4.57533 10.7847C4.10533 10.3147 3.54024 10.0797 2.88026 10.0797C2.22023 10.0797 1.65524 10.3147 1.18519 10.7847C0.715245 11.2547 0.480297 11.8197 0.480297 12.4799C0.480297 13.1398 0.715192 13.7045 1.18519 14.1746C1.65524 14.6448 2.22023 14.8798 2.88026 14.8798C3.54024 14.8798 4.10533 14.6448 4.57533 14.1746C5.04538 13.7048 5.28028 13.1398 5.28028 12.4799Z"
                            fill="currentColor" />
                        <path
                            d="M19.2 6.96016C19.5297 6.96016 19.8127 6.84247 20.0474 6.60758C20.2824 6.37248 20.4001 6.08988 20.4001 5.75994C20.4001 5.42985 20.2824 5.14746 20.0474 4.91251C19.8126 4.67741 19.5297 4.55994 19.2 4.55994C18.8699 4.55994 18.5873 4.67762 18.3523 4.91251C18.1174 5.14751 17.9999 5.42985 17.9999 5.75994C17.9999 6.09003 18.1174 6.37248 18.3523 6.60758C18.5873 6.84268 18.8699 6.96016 19.2 6.96016Z"
                            fill="currentColor" />
                        <path
                            d="M5.76041 3.12012C5.0303 3.12012 4.40784 3.37766 3.89281 3.89258C3.37773 4.4075 3.12035 5.03001 3.12035 5.75997C3.12035 6.49019 3.37773 7.11244 3.89281 7.62757C4.40799 8.14265 5.03046 8.40013 5.76041 8.40013C6.49037 8.40013 7.11288 8.14249 7.6278 7.62757C8.14272 7.11244 8.40026 6.49003 8.40026 5.75997C8.40026 5.03001 8.14272 4.4075 7.6278 3.89258C7.11288 3.37766 6.49037 3.12012 5.76041 3.12012Z"
                            fill="currentColor" />
                        <path
                            d="M23.0999 11.4597C22.82 11.1796 22.48 11.0398 22.0801 11.0398C21.6799 11.0398 21.3399 11.1796 21.06 11.4597C20.7802 11.7397 20.6404 12.0798 20.6404 12.48C20.6404 12.8798 20.7802 13.2204 21.06 13.4998C21.3401 13.7799 21.6799 13.9197 22.0801 13.9197C22.48 13.9197 22.8202 13.7799 23.0999 13.4998C23.38 13.22 23.5197 12.8798 23.5197 12.48C23.5197 12.08 23.3802 11.7399 23.0999 11.4597Z"
                            fill="currentColor" />
                        <path
                            d="M19.2 17.5198C18.7397 17.5198 18.3448 17.6846 18.0147 18.0147C17.6849 18.3445 17.5199 18.7396 17.5199 19.1999C17.5199 19.6598 17.6849 20.055 18.0147 20.3852C18.3448 20.7152 18.7398 20.8799 19.2 20.8799C19.6599 20.8799 20.0549 20.7149 20.385 20.3852C20.7151 20.0551 20.88 19.66 20.88 19.1999C20.88 18.7396 20.7151 18.3449 20.385 18.0147C20.055 17.6846 19.6599 17.5198 19.2 17.5198Z"
                            fill="currentColor" />
                        <path
                            d="M12.4801 20.1595C11.9501 20.1595 11.4976 20.3474 11.1223 20.7225C10.7475 21.0975 10.5599 21.5498 10.5599 22.0799C10.5599 22.6099 10.7473 23.0623 11.1223 23.4373C11.4976 23.8124 11.9499 24.0001 12.4801 24.0001C13.0102 24.0001 13.4625 23.8124 13.8376 23.4373C14.2126 23.0623 14.4001 22.6099 14.4001 22.0799C14.4001 21.5498 14.2126 21.0975 13.8376 20.7225C13.4625 20.3474 13.0102 20.1595 12.4801 20.1595Z"
                            fill="currentColor" />
                        <path
                            d="M12.4801 0C11.6802 0 10.9999 0.279867 10.4399 0.839864C9.87998 1.39991 9.60001 2.08006 9.60001 2.88C9.60001 3.67999 9.87988 4.35982 10.4399 4.91992C10.9999 5.47981 11.6801 5.75984 12.4801 5.75984C13.2804 5.75984 13.9602 5.47997 14.52 4.91992C15.0799 4.36008 15.3598 3.67999 15.3598 2.88C15.3598 2.08012 15.0799 1.40012 14.52 0.839864C13.9602 0.280025 13.2804 0 12.4801 0Z"
                            fill="currentColor" />
                    </svg>

                    <span class="ms-2">LOAD MORE</span>
                </span>

                <span class="less mx-auto">
                    LOAD LESS
                </span>
            </a>
        </div>
    </div>

@endsection
