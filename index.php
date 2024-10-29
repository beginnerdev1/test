<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
    <style>
/* Prevents scroll on the entire page */
html, body {
    height: 100%;
    margin: 0;
    overflow: hidden;
}

/* Background Shape */
.background-shape {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100vw; /* Adjust as needed for desired size */
    height: 100vw; /* Same as width for a perfect circle */
    max-width: 1400px; /* Sets a maximum size for larger screens */
    max-height: 1400px;
    background-color: #FFBD73; /* Light blue color */
    border-radius: 50%; /* Makes it a circle */
    transform: translate(0%, -50%); /* Centers the shape on screen */
    z-index: -1; /* Places the shape behind other elements */
}


    </style>
</head>
<body>
    
    <!-- Background Shape -->
    <div class="background-shape"></div>

    <!-- Main Container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!-- Login Container -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!-- Left Box -->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
                <div class="featured-image mb-3">
                    <img src="images/1.png" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">text</p>
                <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">tagline</small>
            </div>

            <!-- Right Box -->
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Hello, Again</h2>
                        <p>We are happy to have you back.</p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email address">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                        </div>
                        <div class="forgot">
                            <small><a href="#">Forgot Password?</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg w-100 fs-6" style="background-color: #FFBD73; color: white;">Login</button>
                    </div>
                    <div class="row">
                        <small>Don't have account? <a href="Create_acc.php">Sign Up</a></small>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</body>
</html>
