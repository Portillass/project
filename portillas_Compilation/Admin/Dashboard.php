<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    <title>Dashboard</title>

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
        <div class="row" style="height: 600px;">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-mdb-block bg-light sidebar navbar-dark bg-dark" >
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

            <!--END-->

            <main role="main" class="col-med-5 ml-sm-auto col-lg-10 px-md-4" style="margin-top: 10px;">
                <tr>
                    <td>
                        <div class="box">
                            <p class="home/profile" style="justify-content: center;">
                                <span style="color: blue;">Home</span> / Dashboard
                            </p>
                        </div>
                    </td>
                </tr>
            <div class="row">
                <div class="col-md mx-auto">
                    <button  style="margin-top: 15px; background:rgb(0, 248, 33); border-color: rgb(0, 248, 33);margin-left: 90%;width: 100px;margin-bottom: 5px;" type="submit" name="submit" class="btn btn-primary">Add New</button>
                    <div class="card w-100" style="background-color: white;">
                        <div class="card-body">
                            <h5>Sample Table</h5>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr>
                                            <td>2201107699</td>
                                            <td>Jarell Portillas</td>
                                            <td>portillas@gmail.com</td>
                                            <td>20</td>
                                            <td>Male</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--Chart.js-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!--Custom Scripts-->
    <script src="scripts.js"></script>
</body>
</html>