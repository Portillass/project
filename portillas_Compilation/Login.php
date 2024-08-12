<?php
    // Start the session
    session_start();

    // Check if the form is submitted via POST request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Include your database connection file here
        include_once "config.php"; // Adjust the path according to your file structure

        // Check if email and password are set and not empty
        if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            // Prepare a select statement
            $sql = "SELECT id, email,name, password, role FROM users WHERE email = ?";

            if ($stmt = $conn->prepare($sql)) {
                // Bind variables to the prepared statement as parameters
                $stmt->bind_param("s", $param_email);

                // Set parameters
                $param_email = $_POST['email'];

                // Attempt to execute the prepared statement
                if ($stmt->execute()) {
                    // Store result
                    $stmt->store_result();

                    // Check if email exists, if yes then verify password
                    if ($stmt->num_rows == 1) {
                        // Bind result variables
                        $stmt->bind_result($id, $email,$name, $hashed_password, $role);
                        if ($stmt->fetch()) {
                            if (password_verify($_POST['password'], $hashed_password)) {
                                // Password is correct, so start a new session
                           
                                // Store data in session variables
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["email"] = $email;
                                $_SESSION["role"] = $role;
								$_SESSION["name"] = $name;

                                // Redirect user based on role
                                switch ($role) {
                                    case 'admin':
                                        header("Location: Admin/Dashboard.php");
                                        break;
                                }
                            } else {
                                // Password is not valid, display a generic error message
                            echo "<div class='alert alert-danger' role='alert>'Invalid email or password.</div>";
                            }
                        }
                    } else {
                        // Email doesn't exist, display a generic error message
                        echo "<div class='alert alert-danger' role='alert>'Invalid email or password.</div>";
                    }
                } else {
                    // Display an error message if execution failed
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close statement
                $stmt->close();
            }
        }

        // Close connection
        $conn->close();
    }
?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>LOGIN</title>
    <style>
        body{
            background: white;
        }
        .nav-item{

            margin-bottom: 30px;
        }
        
    </style>

  </head>
  <body>
    <div class="justify-content-center">
        <div  class="container">
            <form action="./Admin/Dashboard.php">
                <div class="row">
                    <div class="col">

                        </div>
                        <div class="col">
                            <div class="card" style="width: 21rem; margin-bottom: 10px;" >
                                <h1 style="text-align: center; ">LOGIN</h1>
                                <div class="card-body">
                                    <div style="padding-left: 100px; margin-bottom: 20px;"><img src="logo.png" alt="photo" style="margin: auto; width: 100px;">
                                    </div>
                                        <input style="width: 300px; margin-bottom: 20px;" type="text" class="form-control" placeholder="Username" required>
                                        <input style="width: 300px; margin-bottom: 20px;" type="password" class="form-control" placeholder="Password" required>
                                        <button style="width: 300px; margin-bottom: 20px;" type="submit" name="submit" class="btn btn-primary">LOGIN</button>
                                        <p style="text-align: center;">Don't have an account yet?! <a href="./signup.php">Signup</a></p>
                                </div>
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