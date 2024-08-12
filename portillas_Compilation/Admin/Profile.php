<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    <title>Profile</title>
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
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand d-flex align-items-center" href="Dashboard.php">
            <img src="./images/logo.png" alt="logo" style="width: 40px; height: 40px;  "><span style="padding-left: 10px;">BUKSU SYSTEM</span>
        </a>
        <div class="steve w-100" style="margin-left: 70%; width: 100%;">
                <img src="./images/profile.jpg" alt="logo"  style="padding-left: 0px; width: 50px; border-radius: 50%;">
            <span style="padding-left: 10px; font-size: small; color: white;margin-right: 5px;">Portillas Jarell<i class="arrow down"></i><br><div style="font-size: 10px;margin-left: 50px;">portillas@gmail.com</div></span>
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

            <!--END-->
            
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="margin-top: 10px;">
                <tr>
                    <td>
                        <div class="box">
                            <p class="home/profile" style="justify-content: center;">
                                <span style="color: blue;">Home</span> / Profile
                            </p>
                        </div>
                    </td>
                </tr>
            <div class="row">
                
                <div class="col-md-4">
                     <div class="card text-center h-100" style="background-color: white;">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="./images/profile.jpg" class="rounded-circle" style="width: 150px; height: 150px;">
                            </div>
                            <h5>Jarell Portillas</h5>
                            <p class="card-text" style="text-align: left;font-size: small; font-style: italic;">Email Address<br><strong><span style="color: rgb(65, 65, 65); font-size: 14px; font-style: normal;">portillas@gmail.com</strong></p>
                                <p class="card-text" style="text-align: left; font-size: small; font-style: italic;">Phone<br><strong><span style="font-size: normal;">09917067201</strong></p>
                                    <p class="card-text" style="text-align: left; font-size: small; font-style: italic;">Address<br><strong><span style="font-size: 14px; font-style: normal;">Sanmartin, Malaybalay City</strong></p>
                                        
                                            <p class="card-text" style="text-align: left; font-size: small; font-style: italic;">Social</p>
                                                <button class="btn rounded-circle btn-secondary"><i class="fab fa-facebook"></i></button>
                                                <button class="btn rounded-circle btn-secondary"><i class="fab fa-instagram"></i></button>
                                                <button class="btn rounded-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card h-100" style="background-color: white;">
                        <div class="card-body">
                                    <label style="text-align: left; margin-bottom: 5px;">Full Name</label>
                                    <input style="width: 685px; margin-bottom: 20px;" type="text" class="form-control" placeholder="Jarell E. Portillas" required>
                                    <label style="text-align: left; margin-bottom: 5px;">Email</label>
                                    <input style="width: 685px; margin-bottom: 20px;" type="email" class="form-control" placeholder="portillas@gmail.com" required>
                                    <label style="text-align: left; margin-bottom: 5px;">Password</label>
                                    <input style="width: 685px; margin-bottom: 20px;" type="password" class="form-control" placeholder="**********" required>
                                    <label style="text-align: left; margin-bottom: 5px;">Phone Number</label>
                                    <input style="width: 685px; margin-bottom: 20px;" type="tel" class="form-control" placeholder="1234567890" required>
                                    <label style="text-align: left; margin-bottom: 5px;">Message</label>
                                    <textarea style="width: 685px; height: 90px; margin-bottom: 20px;" class="form-control" rows="5" placeholder="Message"></textarea>

                                    <label for="country"> Select Country</label>    
        
                                        <select id="country" name="country" class="form-control" style="appearance: auto;"> 
                                            <option value="Philippines">Philippines</option>
                                            <option value="Philippines">Philippines</option>
                                        </select>
                                        <button style="margin-top: 15px; background:rgb(0, 248, 33); border-color: rgb(0, 248, 33);" type="submit" name="submit" class="btn btn-primary">Update Profile</button>
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