<?php

session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>SIGNUP</title>
    <style>
        body{
            background: white ;
        }
        .nav-item{
            margin-bottom: 10px;
        }
        
    </style>
  </head>
  <body>
  <div class="alert">
            <?php if (isset($_SESSION['success_message'])): ?>
            <div class="alert alert-success" role="alert">
                <?= $_SESSION['success_message'] ?>
            </div>
            <?php unset($_SESSION['success_message']); ?>
        <?php endif; ?>

        <?php if (isset($_SESSION['error_message'])): ?>
            <div class="alert alert-danger" role="alert">
                <?= $_SESSION['error_message'] ?>
            </div>
            <?php unset($_SESSION['error_message']); ?>
        <?php endif; ?>

    </div>
    <div class="justify-content-center">
        <div class="container">
            <form action="signup_check.php" method="POST">
                <div class="row">
                    <div class="col">

                    </div>
                        <div class="card" style="width: 22rem; margin-bottom:30px;" >
                            <h1 style="text-align: center;">Signup</h1>
                            <div class="card-body">
                                <div style="padding-left: 100px; margin-bottom: 20px;"><img src="logo.png" alt="photo" style="margin: auto; width: 100px;">
                                </div>
                                    <input style="width: 300px; margin-bottom: 20px;" name="name" type="text" class="form-control" placeholder="Full Name" required>
                                    <input style="width: 300px; margin-bottom: 20px;" name="age" type="number" class="form-control" placeholder="Age" required>
                                    <input style="width: 300px; margin-bottom: 20px;" name="gender" type="text" class="form-control" placeholder="Gender" required>
                                    <input style="width: 300px; margin-bottom: 20px;" name="address" type="text" class="form-control" placeholder="Address" required>
                                    <input style="width: 300px; margin-bottom: 20px;" name="email" type="email" class="form-control" placeholder="Email" required>
                                    <input style="width: 300px; margin-bottom: 20px;" name="password" type="password" class="form-control" placeholder="Password" required>
                                    <input style="width: 300px; margin-bottom: 20px;" name="confirm_password" type="password" class="form-control" placeholder="Confirm Password" required>
                                    <div class="input-group mb-3">
                                  
                                    </div>
                                    <a href="Login.php"></a>
                                    <p style="text-align: center; ">Already have an account?! <a href="Login.php">Login</a></p>
                                
                            </div>
                        </div>
                    <div class="col">

                    </div>
                </div>
            </form>
        </div>
    </div>
  </body>
</html>