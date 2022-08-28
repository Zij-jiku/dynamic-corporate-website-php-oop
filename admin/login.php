<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DCW Project</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/admin/login.css">
</head>

<body>


    <div class="container">
        <!-- Login Form Start -->
        <div class="row justify-content-center h-100vh" id="login-form-box">
            <div class="col-lg-12 my-auto">
                <div class="card-group">
                    <div class="card p-4">
                        <h2 class="text-center text-primary font-weight-bold">Login to account</h2>
                        <hr class="my-3">

                        <form class="px-3" action="" method="post" id="login-form">

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-key"></i>
                                </span>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                            </div>

                            <div class="form-group">
                                <div class="float-left custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                                    <label for="rememberMe" class="custom-control-label">Remember Me</label>
                                </div>
                                <div class="float-right">
                                    <a href="javascript:" class="text-decoration-none" id="showForgetForm">Forget Password ?</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Sign In" class="btn btn-block btn-primary">
                            </div>
                        </form>
                    </div>
                    <div class="card p-4 justify-content-center" style="background-color: #363C43;">
                        <h2 class="text-center text-white font-weight-bold">Welcome</h2>
                        <hr class="my-3 bg-light">
                        <p class="text-center text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Ipsum, omnis. Nam error rem quisquam incidunt, cum similique repudiandae. Vitae, dolore!</p>
                        <button type="button" class="btn btn-block btn-primary mt-3" id="showSignUpForm">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Form End -->

        <!-- Load from Ajax -->
        <!-- Register Form Start -->
        <div class="row justify-content-center h-100vh" id="register-form-box" style="display: none;">
            <div class="col-lg-12 my-auto">
                <div class="card-group">
                    <div class="card p-4">
                        <h2 class="text-center text-primary font-weight-bold">Register Form</h2>
                        <hr class="my-3">

                        <form class="px-3" action="" method="post" id="register-form">

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="name">
                                    <i class="fas fa-user"></i>
                                </span>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="email">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="password">
                                    <i class="fas fa-key"></i>
                                </span>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="cpassword">
                                    <i class="fas fa-key"></i>
                                </span>
                                <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Enter your password">
                            </div>


                            <div class="form-group">
                                <input type="submit" value="Sign Up" class="btn btn-block btn-primary" >
                            </div>
                        </form>
                    </div>
                    <div class="card p-4 justify-content-center" style="background-color: #363C43;">
                        <h2 class="text-center text-white font-weight-bold">Have a Creditials</h2>
                        <hr class="my-3 bg-light">
                        <p class="text-center text-light">Enter your email and check your inbox for instruction. Please also check your spam folder.</p>
                        <button type="button" class="btn btn-block btn-primary mt-3" id="showSignInForm">Sign In</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Form End -->

        <!-- Load from Ajax -->
        <!-- Forget Password Start -->
        <div class="row justify-content-center h-100vh" id="forgotten-form-box" style="display: none;">
            <div class="col-lg-12 my-auto">
                <div class="card-group">
                    <div class="card p-4">
                        <h2 class="text-center text-primary font-weight-bold">Forget Password ?</h2>
                        <hr class="my-3">

                        <form class="px-3" action="" method="post" id="forgotten-form">

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Reset Password" class="btn btn-block btn-primary">
                            </div>
                        </form>
                    </div>
                    <div class="card p-4 justify-content-center" style="background-color: #363C43;">
                        <h2 class="text-center text-white font-weight-bold">Lost password?</h2>
                        <hr class="my-3 bg-light">
                        <p class="text-center text-light">No worries. Let's get you a new one quickly!</p>
                        <button type="button" class="btn btn-block btn-primary" id="showSignIn">Login Page</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Forget Password End -->


    </div>


    <script src="../assets/js/jquery-3.6.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/all.min.js"></script>
    <script src="../assets/js/admin/login.js"></script>
</body>

</html>