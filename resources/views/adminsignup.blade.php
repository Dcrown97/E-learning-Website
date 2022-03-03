@extends('master')
@section('content')


<!-- PAGE TITLE
    ================================================== -->
    <header class="py-8 py-md-11" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0">Admin Sign Up</h1>
        </div>
        <!-- Img -->
        <img class="d-none img-fluid" src="...html" alt="...">
    </header>


    <!-- REGISTER
    ================================================== -->
    <div class="container mb-11">
        <div class="row gx-0">
            <div class="col-md-7 col-xl-4 mx-auto">
                <!-- Register -->
                <h3 class="mb-6">Sign Up</h3>
                @if ($success = Session::get('success'))

                <h4 style="color: rgb(95, 110, 90)">{{$success}}</h4>
                
                @endif
                <!-- Form Register -->
                <form class="mb-5" action="" method="POST">
                    @csrf
                    <!-- Username -->
                    <div class="form-group mb-5">
                        <label for="modalSignupUsername1">
                            First Name
                        </label>
                        <input type="text" name="firstname" class="form-control" id="modalSignupUsername1" placeholder="First Name">
                        <strong style="color: red"> @error('firstname') {{$message}}
                        @enderror</strong>
                    </div>
                    <div class="form-group mb-5">
                        <label for="modalSignupUsername1">
                            Last Name
                        </label>
                        <input type="text" name="lastname" class="form-control" id="modalSignupUsername1" placeholder="Last Name">
                        <strong style="color: red"> @error('lastname') {{$message}}
                        @enderror</strong>
                    </div>
                    <div class="form-group mb-5">
                        <label for="modalSignupUsername1">
                            Username
                        </label>
                        <input type="text" name="username" class="form-control" id="modalSignupUsername1" placeholder="Username">
                        <strong style="color: red"> @error('username') {{$message}}
                        @enderror</strong>
                    </div>
                    <div class="form-group mb-5">
                        <label for="modalSignupUsername1">
                            Phone Number
                        </label>
                        <input type="number" name="number" class="form-control" id="modalSignupUsername1" placeholder="Phone Number">
                        <strong style="color: red"> @error('number') {{$message}}
                        @enderror</strong>
                    </div>

                    <!-- Email -->
                    <div class="form-group mb-5">
                        <label for="modalSignupEmail1">
                            Email
                        </label>
                        <input type="email" name="email" class="form-control" id="modalSignupEmail1" placeholder="Email Address">
                        <strong style="color: red">@error('email') {{$message}}
                        @enderror</strong>
                    </div>

                    <!-- Password -->
                    <div class="form-group mb-5">
                        <label for="modalSignupPassword3">
                            Password
                        </label>
                        <input type="password" name="password" class="form-control" id="modalSignupPassword3" placeholder="**********">
                        <strong style="color: red">@error('password') {{$message}}
                        @enderror</strong>
                    </div>

                    <!-- Submit -->
                    <button class="btn btn-block btn-primary" type="submit">
                        SIGN UP
                    </button>

                </form>

                <!-- Text -->
                <p class="mb-0 font-size-sm text-center">
                    Already have an account? <a class="text-underline" href="login">Log In</a>
                </p>
            </div>
        </div>
    </div>



@endsection