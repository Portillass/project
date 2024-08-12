<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    <title>Table</title>

    <script>
      function myFunction(){
        document.getElementById("demo1").innerHTML = "Paragraph changed."
      }
    </script>
    <script>
      window.onload = function(){
        calculateTotal();
      }

      function calculateTotal(){
        document.getElementById("totalss").innerHTML = 4 + 4;
        document.getElementById("totalsss").innerHTML = 4 + 4;
        document.getElementById("totalssss").innerHTML  = 8 + 4;
        document.getElementById("totalmarks").innerHTML = 8 + 8 + 12;
      }
    </script>
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
   <!-- navbar -->
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

            <!--END-->

            <main role="main" class="col-med-5 ml-sm-auto col-lg-10 px-md-4" style="margin-top: 10px;">
            
            <div class="row">
              <div class="col-md mx-auto">
                <div class="card w-100" style="background-color: white;">
                  <div class="card-body">
                    <select id="code" name="Section Code" class="option form-control" >
                      <option value="T181">T181</option>
                    </select>
                    <div class="inf">
                        <img src="../images/.jpg" alt="" class="" >
                        <table class="tab">
                          <td class="pink"><span class="bold">Name:</span></td>
                          <td>port Rell</td>
                          <td class="pink"><span class="bold">Student Number:</span></td>
                          <td>2201102105</td>
                          <tr>
                            <td class="pink"><span class="bold">Year:</span></td>
                            <td>2nd</td>
                            <td class="pink"><span class="bold">Section Code:</span></td>
                            <td>T181</td>
                          </tr>
                        </table>
                    </div> 
                    <div class="cards card w-100">
                       <div class="ca card-body">
                        My Class Schedule
                       </div>
                    </div>
                    <table class="tab table table-bordered">
                      <tr>
                    <th style="background-color: purple;" rowspan="2">Units</th>
                    <th style="background-color: aqua" rowspan="2">Units Title</th>
                    <th style="background-color: skyblue" rowspan="2">Teaching hours</th>
                    <th style="background:linear-gradient(to top, rgb(227, 220, 211), rgb(225, 141, 14));" colspan="4">Theory  marks</th>
                </tr>
                <tr>
                    <td style="background-color: aqua">R Level</td>
                    <td style="background-color: aqua">U Level</td>
                    <td style="background-color: aqua">A Level</td>
                    <th style="background-color: aqua">Total  Marks</th>
                </tr>
                <tr>
                    <td style="background-color: purple;" >I</td>
                    <td>Intro to Computing</td>
                    <td style="background-color: skyblue">5</td>
                    <td style="background-color: rgb(75, 245, 8);">4</td>
                    <td style="background-color: red">0</td>
                    <td style="background-color: rgb(75, 245, 8);">4</td>
                    <td style="background-color: purple;" id="totals"></td>
                </tr>
                <tr>
                    <td>II</td>
                    <td style="background:linear-gradient(to top, rgb(227, 220, 211), rgb(225, 141, 14));">Computer programming</td>
                    <td style="background-color: skyblue">6</td>
                    <td style="background-color: red">0</td>
                    <td style="background-color: red">0</td>
                    <td style="background-color: skyblue">6</td>
                    <td style="background-color: rgb(75, 245, 8);" id="totalss"></td>
                </tr>
                <tr>
                    <td style="background-color: brown;">III</td>
                    <td>Integrative Programming</td>
                    <td style="background-color: skyblue">6</td>
                    <td style="background-color: rgb(75, 245, 8);">8</td>
                    <td style="background-color: red">0</td>
                    <td style="background-color: rgb(75, 245, 8);">4</td>
                    <td style="background:linear-gradient(to top, rgb(227, 220, 211), rgb(225, 141, 14));" id="totalsss"></td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td>Total</td>
                    <td id="totalssss"></td>
                </tr>
                      </tbody>
                    </table>
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