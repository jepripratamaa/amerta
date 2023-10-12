<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/clientRegister.css">
    <title>Amerta | Client Register</title>
</head>
<body>
    <section class="container mt-3">
        <a href="/" class="textTitle"><p class="text-center">AMERTA</p></a>
        <p class="textSubTitle text-center">SIGNUP</p>
        <div class="fill container-fluid">
            <form class="row" method="POST" action="">
                <div class="col-md-6 offset-md-3 mb-4 justify-content-center">
                    <label for="" class="form-label textForm">Email</label>
                    <input type="text" class="form-control" name="" id="" placeholder="Enter your email">
                </div>
                <div class="col-md-6 offset-md-3 mb-4 justify-content-center">
                    <label for="" class="form-label textForm">Password</label>
                    <input type="password" class="form-control" name="" id="" placeholder="Enter a strong password">
                </div>
                <div class="col-md-6 offset-md-3 mb-4 justify-content-center">
                    <label for="" class="form-label textForm">Confirm Password</label>
                    <input type="password" class="form-control" name="" id="" placeholder="Confirm your password">
                </div>
                <div class="col-12 text-center mt-4 mb-3">
                    <button class="btn signupButton" type="submit">
                        Signup
                    </button>
                    
                </div>
                <div class="text-center">
                    <div class="mb-3 d-flex align-items-center justify-content-center">
                        <hr>
                        <span class="ms-2 me-2">OR</span>
                        <hr>
                    </div>
                    <div class="col-12 text-center mb-3 d-grid justify-content-center">
                        <button class="anotherBtn btn-outline-dark mb-3 text-start ps-3" type="submit">
                            <img src="assets/img/flat-color-icons_google.png" alt="">  &nbsp;&nbsp; Signup with google
                        </button>
                        <button class="anotherBtn btn-outline-dark text-start ps-3" type="submit">
                            <img src="assets/img/logos_facebook.png" alt="">  &nbsp;&nbsp; Signup with Facebook
                        </button>
                    </div>
                </div>
                <div class="loginText text-center mb-3">
                    Have an account?
                    <a href="clientLogin.php" class="loginBtn"> Login </a>
                </div>
            </form>
        </div>
    </section>
    <img src="assets/img/Component 6.png" class="top-50 start-50 translate-middle z-n1 position-absolute" alt="" width="1260px">
    <!-- <img src="assets/img/Component 1.png" alt="" width="390px">
    <img src="assets/img/Component 2.png" alt="" width="800px"> -->
</body>
</html>