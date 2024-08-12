<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "compilation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM student";
$result = $conn->query($sql);


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD PHP</title>
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
                <img src="./images/dave.jpg" alt="logo"  style="padding-left: 0px; width: 50px; border-radius: 50%;">
            <span style="padding-left: 10px; font-size: small; color: white;margin-right: 5px;">Jarell portillas<i class="arrow down"></i><br><div style="font-size: 10px;margin-left: 50px;">portillas@gmail.com</div></span>
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
    <!--INPUT START-->
    <div class="col-md-9" style="margin-top: 10px;">
        <div class="card">
            <div class="card-header">
                <h3>CRUD PHP</h3>
            </div>
            <div class="card-body">
            <form id="userInfoForm" method="POST">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><i class="mdi mdi-id-card"></i></span>
                                <input type="number" name="stud_id" class="form-control" id="stud_id" placeholder="Student ID*" aria-label="Student ID" aria-describedby="addon-wrapping" required>
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><i class="mdi mdi-account"></i></span>
                                <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" aria-label="First Name" aria-describedby="addon-wrapping" required>
                                <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" aria-label="Last Name" aria-describedby="addon-wrapping" required>
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><i class="mdi mdi-email-check"></i></span>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email" aria-label="Email" aria-describedby="addon-wrapping" required>
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><i class="mdi mdi-counter"></i></span>
                                <input type="number" name="age" class="form-control" id="age" placeholder="Age" aria-label="Age" aria-describedby="addon-wrapping" required>
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><i class="mdi mdi-map-marker"></i></span>
                                <input type="text" name="address" class="form-control" id="address" placeholder="Address" aria-label="Address" aria-describedby="addon-wrapping" required>
                            </div>
                            <br>
                            <button style="display: block; width: 100%; margin: 0 auto;" class="btn btn-primary" type="button" onclick="addUser()">Add User</button>
                        </form>

            <br>
            <div id="liveAlertPlaceholder"></div>
            <h4>STUDENTS LIST</h4>
            <table id="studentTable" class="table table-bordered secondary">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Age</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                // Check if there are any rows returned from the query
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["student_id"] . "</td>";
                        echo "<td>" . $row["firstname"] . " " . $row["lastname"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["address"] . "</td>";
                        echo "<td>" . $row["age"] . "</td>";
                        echo "<td>";
                        echo "<button class='btn btn-info edit-btn' type='button' value='Edit' style='margin-right: 4px;' onclick='openUpdateModal(" . $row["student_id"] . ")'><i class='mdi mdi-pencil' ></i></button>";
                        echo "<button class='btn btn-danger delete-btn' type='button' value='Delete' onclick='deleteUser(" . $row["student_id"] . ")'><i class='mdi mdi-delete'></i></button>";
                        echo "</td>";
                        // Add actions here if needed
                        echo "</tr>";
                    }
                    echo "</tbody></table>";
            
                    // Echo out the DataTables initialization code here
                    echo "<script>
                    $(document).ready(function() {
                        $('#studentTable').DataTable(); // Initialize DataTables for your table
                    });
                    </script>";
                } else {
                    // If no rows are returned, display a message
                    echo "<p>No data found.</p>";
                }
            
                // Check for errors in the SQL query execution
                if (!$result) {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            
                // Close the database connection
                $conn->close();
                ?>
            
                </tbody>
            </table>
            </div>
            </div>
            </div>
            </div>
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update User Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateForm" method="post">
                    <input type="hidden" id="update_stud_id" value="">
                    <div class="form-group">
                        <label for="update_fname">First Name</label>
                        <input type="text"  class="form-control" id="update_fname" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label for="update_lname">Last Name</label>
                        <input type="text"  class="form-control" id="update_lname" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <label for="update_email">Email</label>
                        <input type="email"  class="form-control" id="update_email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="update_age">Age</label>
                        <input type="number"  class="form-control" id="update_age" placeholder="Age" required>
                    </div>
                    <div class="form-group">
                        <label for="update_address">Address</label>
                        <input type="text" class="form-control" id="update_address" placeholder="Address" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="updateUser()">Save changes</button>
                    </div>
                </div>
            </div>
            </div>
        <!--INPUT END-->
        <div id="liveAlert" style="margin-top: 10px;">

        </div>
        <!--TABLE START-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <div class="card" style="margin-top: 10px;">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#studentTable').DataTable(); // Initialize DataTables for your table
    });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>


    <script>

    function validateEmail(email) {
        // Regular expression pattern to check for "@" symbol
        var pattern = /\S+@\S+\.\S+/;
        return pattern.test(email);
    }
    function addUser() {
    // Get user input values
    let stud_id = $("#stud_id").val();
    let fname = $("#fname").val();
    let lname = $("#lname").val();
    let email = $("#email").val();
    let age = $("#age").val();
    let address = $("#address").val();

    // Check if any of the required fields are empty
    if (stud_id === "" || fname === "" || lname === "" || email === "" || age === "" || address === "") {
        // Display error message if any required field is empty
        $("#liveAlertPlaceholder").html(`<div class="alert alert-danger" role="alert">Please fill in all the required fields.</div>`);

        return; // Exit function if any required field is empty
    }

    // Validate email
    if (!validateEmail(email)) {
        // Display error message if email is invalid
        $("#liveAlertPlaceholder").html(`<div class="alert alert-danger" role="alert">Please enter a valid email address.</div>`);
        return; // Exit function if email is invalid
    }

    // Make AJAX request to add_user.php
    $.ajax({
        url: 'add_user.php',
        method: 'POST',
        data: {
            stud_id: stud_id,
            fname: fname,
            lname: lname,
            email: email,
            age: age,
            address: address
        },
        success: function(response) {
            // Reload the page
            $("#liveAlertPlaceholder").html(`<div class="alert alert-success" role="alert">${response}</div>`);
            // Display success message after a short delay
            setTimeout(function() {
                location.reload();
            }, 2000); // Adjust the delay time as needed
        },
     
        error: function(xhr, status, error) {
            // Display error message
            $("#liveAlertPlaceholder").html(`<div class="alert alert-danger" role="alert">Error: ${xhr.responseText}</div>`);
        }
    });
}

function deleteUser(stud_id) {
    var confirmation = confirm("Are you sure you want to delete this data?");
    if (confirmation) {
        // Make AJAX request to delete_user.php
        $.ajax({
            url: 'delete_user.php',
            method: 'POST',
            data: {
                stud_id: stud_id
            },
            success: function(response) {
                // Reload the page
               
                $("#liveAlertPlaceholder").html(`<div class="alert alert-success" role="alert">${response}</div>`);
                // Display success message after a short delay
                setTimeout(function() {
                    location.reload();
                }, 2000); // Adjust the delay time as needed
            },
            error: function(xhr, status, error) {
                // Display error message
                $("#liveAlertPlaceholder").html(`<div class="alert alert-danger" role="alert">Error: ${xhr.responseText}</div>`);
            }
        });
    }
}


    function openUpdateModal(stud_id) {
    $.ajax({
        url: 'get_user.php',
        method: 'POST',
        data: { stud_id: stud_id },
        success: function(response) {
            let user = JSON.parse(response);
            $("#update_stud_id").val(user.student_id);
            $("#update_fname").val(user.firstname);
            $("#update_lname").val(user.lastname);
            $("#update_email").val(user.email);
            $("#update_age").val(user.age);
            $("#update_address").val(user.address);
            $("#updateModal").modal('show');
        },
        error: function(xhr, status, error) {
            $("#liveAlertPlaceholder").html(`<div class="alert alert-danger" role="alert">Error: ${xhr.responseText}</div>`);
        }
    });
}

function updateUser() {
    // Get updated user information from the form
    let stud_id = $("#update_stud_id").val();
    let fname = $("#update_fname").val();
    let lname = $("#update_lname").val();
    let email = $("#update_email").val();
    let age = $("#update_age").val();
    let address = $("#update_address").val();

    // Make AJAX request to update_user.php
    $.ajax({
        url: 'update_user.php',
        method: 'POST',
        data: {
            stud_id: stud_id,
            fname: fname,
            lname: lname,
            email: email,
            age: age,
            address: address
        },
        success: function(response) {
            $("#liveAlertPlaceholder").html(`<div class="alert alert-success" role="alert">${response}</div>`);
            // Reload the page after a short delay
            setTimeout(function() {
                location.reload();
            }, 2000);
        },
        error: function(xhr, status, error) {
            $("#liveAlertPlaceholder").html(`<div class="alert alert-danger" role="alert">Error: ${xhr.responseText}</div>`);
        }
    });
}

</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>