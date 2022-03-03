@extends('master')


@section('content')


<!-- PAGE TITLE
    ================================================== -->
<header class="py-8 py-md-11" style="background-image: none;">
    <div class="container text-center py-xl-2">
        <h1 class="display-4 fw-semi-bold mb-0">Login</h1>
        
    </div>
    <!-- Img -->
    <img class="d-none img-fluid" src="...html" alt="...">
</header>


<!-- LOGIN
    ================================================== -->
<div class="container mb-11">
    <div class="row gx-0">
        <div class="col-md-7 col-xl-4 mx-auto">
            <!-- Login -->
            <h3 class="mb-6">Log In to Your Skola Account!</h3>
            @if ($error = Session::get('error'))

            <h4 style="color: red">{{$error}}</h4>
            
            @endif
            <!-- Form Login -->
            <form class="mb-5" action="" method="POST">
                @csrf
                <!-- Email -->
                <div class="form-group mb-5">
                    <label for="modalSigninEmail1">
                        Email
                    </label>
                    <input type="email" name="email" class="form-control" id="modalSigninEmail1" placeholder="Email Address">
                    <strong style="color: red">@error('email') {{$message}} @enderror</strong>
                </div>

                <!-- Password -->
                <div class="form-group mb-5">
                    <label for="modalSigninPassword1">
                        Password
                    </label>
                    <input type="password" name="password" class="form-control" id="modalSigninPassword1" placeholder="**********">
                    <strong style="color: red">@error('password') {{$message}} @enderror</strong>
                </div>

                <div class="d-flex align-items-center mb-5 font-size-sm">
                    <div class="form-check">
                        <input class="form-check-input text-gray-800" type="checkbox" id="autoSizingCheck1">
                        <label class="form-check-label text-gray-800" for="autoSizingCheck1">
                            Remember me
                        </label>
                    </div>

                    <div class="ms-auto">
                        <a class="text-gray-800" href="recover.html">Forgot Password</a>
                    </div>
                </div>

                <!-- Submit -->
                <button class="btn btn-block btn-primary" type="submit">
                    LOGIN
                </button>
            </form>
        </div>
    </div>
</div>

@endsection