<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('style/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('style/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('style/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition login-page text-sm">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('dashboard.indexAdmin') }}"><b>Admin</b>LTE</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{ route('login.Authenticate') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" name="email" class="form-control form-control-sm @error('email') is-invalid
                        @enderror" id="exampleInputEmail1" placeholder="Email"
                            aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                        @error('email')
                        <span id="exampleInputEmail1-error" class="error invalid-feedback">
                            Please enter a email address
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputpassword1">Password</label>
                        <input name="password" type="password" name="password"
                            class="form-control form-control-sm @error('password') is-invalid  @enderror" id="exampleInputpassword1"
                            placeholder="Password" aria-describedby="exampleInputpassword1-error"
                            aria-invalid="true">
                        <span id="exampleInputpassword1-error" class="error invalid-feedback">Please enter a password
                        </span>
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block btn-sm">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">
                    <p>- atau -</p>
                    <a href="#" class="btn btn-block btn-primary btn-sm">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger btn-sm">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="#">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="#" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('style/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('style/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('style/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
