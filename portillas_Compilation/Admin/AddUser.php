<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    <link href="../bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
            <span style="padding-left: 10px; font-size: small; color: white;margin-right: 5px;">Jarell Portillas<i class="arrow down"></i><br><div style="font-size: 10px;margin-left: 50px;">portillas@gmail.com</div></span>
        </div>
    </nav>
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
    <!--INPUT START-->
    <div class="col-md-9" style="margin-top: 10px;">
        <div class="card">
            <div class="card-header">
                <h3>Add User</h3>
            </div>
            <div class="card-body">
                <form id="userInfoForm">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-id-card"></i></span>
                        <input id="studID" type="number" class="form-control" placeholder="Student ID" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-circle"></i></span>
                        <input id="fname" type="text" class="form-control" placeholder="First Name" aria-label="Username" aria-describedby="basic-addon1"required>
                        
                        <input id="lname" type="text" class="form-control" placeholder="Lastname" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-email"></i></span>
                        <input id="email" type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-counter"></i></span>
                        <input id="age" type="number" class="form-control" placeholder="Age" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><span class="mdi mdi-map-marker-outline"></span></span>
                        <input id="address" type="text" class="form-control" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <button style="width: 100%;" id="but" class="btn btn-primary" type="button" onclick="addUser()"><span class="mdi mdi-content-save-check">Save</span></button>
                </form>
            </div>
        </div>
        <!--INPUT END-->
        <div id="liveAlert" style="margin-top: 10px;">

        </div>
        <!--TABLE START-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <div class="card" style="margin-top: 10px;">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <div class="card-body">

                <input style="width: 250px; margin-bottom: 10px;" type="text" id="search" class="form-control" placeholder="Search...." oninput="searchUser()">

                <table class="table table-bordered" id="userTable">
                    <thead>
                    <tr>
                        <th scope="col">Student ID</th>
                        <th scope="col">Full Name</th>      
                        <th scope="col">Email</th>
                        <th scope="col">Age</th>
                        <th scope="col">Address</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody id="userTableBody">
                    <!--THIS IS WHERE THE DATA WILL BE POPULATED-->

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--TABLE END-->

    <script>
        function addUser(){
          let stud_id = $("#studID").val();
          let fname = $("#fname").val();
          let lname = $("#lname").val();
          let email = $("#email").val();
          let age = $("#age").val();
          let address = $("#address").val();

          if(stud_id !== ""){
          let newRow = $("<tr></tr>");

          newRow.append(`
          <td>${stud_id}</td>
          <td>${fname}${lname}</td>
          <td>${email}</td>
          <td>${age}</td>
          <td>${address}</td>
          <td>
            <button class="btn btn-warning" value="Edit"><i class="mdi mdi-pencil"></i></button>
            <button class="btn btn-danger" value="Delete"><i class="mdi mdi-delete-alert"></i></button>
          </td>
            `);
            $("#userTableBody").append(newRow);
            $("#liveAlert").html(`<div class="alert alert-danger" role="alert">SUCCESS</div>`);
          } else {
            $("#liveAlert").html(`<div class="alert alert-danger" role="alert">PLEASE INPUT</div>`);
          }

          $("#studID").val("");
          $("#fname").val("");
          $("#lname").val("");
          $("#email").val("");
          $("#age").val("");
          $("#address").val("");
        }

        function deleteUser(){
            var confirmation = confirm("Are you sure want to delete this data?");
            if(confirmation ){
                $(this).closest("tr").remove();
                $("#liveAlert").html(`<div class="alert alert-warning" role="alert">DELETED</div>`);
            }
        }

        $(document).ready(function(){
            $(document).on("click", ".btn-danger", deleteUser);
        });

        function searchUser(){
            var value = document.getElementById("search").value.toLowerCase();
            var table = document.getElementById("userTableBody");
            var tr = table.getElementsByTagName("tr");

            for(var i = 0 ; i < tr.length; i++){
                var td = tr[i].getElementsByTagName("td")[0];
                if(td){  
                    if(td.innerHTML.toLowerCase().indexOf(value) >- 1){
                        tr[i].style.display= "";
                    }else {
                        tr[i].style.display= "none";
                    }
                }
            }
        }

        function editUser(){
            var confirmation = confirm("Are you sure you want to edit this data?");
            if (confirmation){
                var row = $(this).closest("tr");
                var stud_id = row.find("td:eq(0)").text();
                var fname = row.find("td:eq(1)").text().split(" ")[0];
                var lname = row.find("td:eq(1)").text().split(" ")[1];
                var email = row.find("td:eq(2)").text();
                var age = row.find("td:eq(3)").text();
                var address = row.find("td:eq(4)").text();

                $("#studID").val(stud_id);
                $("#fname").val(fname);
                $("#lname").val(lname);
                $("#email").val(email);
                $("#age").val(age);
                $("#address").val(address);
                
                row.remove();
               
                $("#liveAlert").html('<div class="alert alert-success" role="alert"> Editing.</div>')   
            }
        }
                
        $(document).ready(function(){
            $(document).on("click", ".btn-warning", editUser);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
