<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="java.css">
    <style>
        body{
            background: white;
        }
        .nav-item{
            margin-bottom: 10px;
        }
        
    </style>
</head>
<body>

    <script>
        window.onload = function() {
            calculate();
        }

        function calculate() {
            document.getElementById("totals").innerHTML = 4 + 4;
            document.getElementById("totalss").innerHTML = 6 + 2;
            document.getElementById("totalsss").innerHTML = 4 + 8;
            document.getElementById("totalssss").innerHTML = 8 + 8 + 12;
        }
    </script>

    <!--  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand d-flex align-items-center" href="Dashboard.php">
            <img src="./images/logo.png" alt="logo" style="width: 40px; height: 40px;  "><span style="padding-left: 10px;">BUKSU SYSTEM</span>
        </a>
        <div class="steve w-100" style="margin-left: 70%; width: 100%;">
                <img src="./images/profile.jpg" alt="logo"  style="padding-left: 0px; width: 50px; border-radius: 50%;">
            <span style="padding-left: 10px; font-size: small; color: white;margin-right: 5px;">Jarell Portillas<i class="arrow down"></i><br><div style="font-size: 10px;margin-left: 50px;">portillas@gmail.com</div></span>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-mdb-block bg-light sidebar  navbar-dark bg-dark">
            <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link-active" href="Dashboard.php" >
                            <button class="btn btn-block text-left">
                            <i class="fa-solid fa-gauge" style="color:  whitesmoke;"> Dashboard</i>
                                    
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-active" href="Profile.php">
                            <button class="btn btn-block text-left">
                                <i class="fa-solid fa-user"style="color:  whitesmoke;">
                                    Profile
                                </i>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-active" href="Tables.php">
                            <button class="btn btn-block text-left">
                                <i class="fa fa-table mr-2" style="color:  whitesmoke;">
                                    Tables
                                </i>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-active" href="javascript.php">
                            <button class="btn btn-block text-left">
                            <i class="fa-brands fa-js" style="color:  whitesmoke;">
                                 Javascript</i>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-active" href="calculator.php">
                            <button class="btn btn-block text-left">
                            <i class="fa-solid fa-calculator"  style="color: whitesmoke;"> 
                                 Calculator</i>     
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-active" href="AddUser.php">
                            <button class="btn btn-block text-left">
                                 <i class="fa-solid fa-user-plus" style="color:  whitesmoke;">
                                    Add User
                                </i>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-active" href="CRUD.php">
                            <button class="btn btn-block text-left">
                            <i class="fa-brands fa-php" style="color:  whitesmoke;"> CRUD PHP</i>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-active" href="../Login.php">
                            <button class="btn btn-block text-left">
                                <i class="fa fa-power-off mr-2"  style="color:  whitesmoke;">
                                    Logout
                                </i>
                            </button>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="col-md-9 col-lg-10">
                <!-- Content goes here -->
                <div class="card my-3">
                    <div class="card-body">
                        <h3>JavaScript can "display" data in different ways: <a class="btn btn-primary" href="inner.html">Example</a></h3>
                        <ul>
                            <li>Writing into an HTML element using innerHTML.</li>
                            <li>Writing into the HTML output using document.write().</li>
                            <li>Writing into an alert using window.alert.</li>
                            <li>Writing into a browsing console, using console.log().</li>
                        </ul>
                    </div>
                </div>

                <!-- Window Alert Example -->
                <div class="card my-3">
                    <div class="card-body">
                        <h3>This is Window Alert Example</h3>
                        <button onclick="popsButton()" class="btn btn-success">Alert</button>
                        <script>
                            function popsButton() {
                                window.alert(5 + 6);
                            }
                        </script>
                    </div>
                </div>

                <!-- Change HTML Content -->
                <div class="card my-3">
                    <div class="card-body">
                        <h3>Change HTML Content</h3>
                        <p id="demo">JavaScript can Change HTML content.</p>
                        <button type="button" class="btn btn-primary" onclick='document.getElementById("demo").innerHTML="Hello Javascript!"'>Click Me!</button>
                    </div>
                </div>

                <!-- Turn On and Off -->
                <div class="card my-3">
                    <div class="card-body">
                        <h3>Turn On and Off</h3>
                        <p>In this case JavaScript changes the value of the src(source) attribute of an image.</p>
                        <button class="btn btn-success" onclick="document.getElementById('images').src='./images/bulb-on.png'">Turn on the light</button>

                        <img id="images" src="./images/bulb-off.png" style="width: 100px; height: 150px;" class="my-3">

                        <button class="btn btn-danger" onclick="document.getElementById('images').src='./images/bulb-off.png'">Turn off the light</button>
                    </div>
                </div>

                <!-- Demo JavaScript in Head -->
                <div class="card my-3">
                    <div class="card-body">
                        <h3>Demo JavaScript in Head</h3>
                        <p id="demo1">A paragraph</p>
                        <button type="button" onclick="myFunction()" class="btn btn-primary">Try it</button>
                    </div>
                </div>

                <!-- Print Button -->
                <div class="card my-3">
                    <div class="card-body">
                        <p>Click the button to print the current page.</p>
                        <button onclick="window.print()" class="btn btn-primary">Print this page</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
