<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./calculators.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand d-flex align-items-center" href="Dashboard.php">
            <img src="./images/logo.png" alt="logo" style="width: 40px; height: 40px; "><span style="padding-left: 10px;">BUKSU SYSTEM</span>
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
                <div class="container">
                    <div class="calculator">
                        <div class="moving-text">Jarell E. Portillas</div>
                        <h4 class="cal">CALCULATOR APP</h4>
                        <form name="calculatorForm">
                            <div class="display">
                                <input type="text" name="display">
                            </div>
                            <div>
                                <input type="button" value="7" onclick="addToDisplay('7')">
                                <input type="button" value="8" onclick="addToDisplay('8')">
                                <input type="button" value="9" onclick="addToDisplay('9')">
                                <input type="button" value="+" onclick="addToDisplay('+')">
                            </div>
                            <div>
                                <input type="button" value="4" onclick="addToDisplay('4')">
                                <input type="button" value="5" onclick="addToDisplay('5')">
                                <input type="button" value="6" onclick="addToDisplay('6')">
                                <input type="button" value="-" onclick="addToDisplay('-')">
                            </div>
                            <div>
                                <input type="button" value="1" onclick="addToDisplay('1')">
                                <input type="button" value="2" onclick="addToDisplay('2')">
                                <input type="button" value="3" onclick="addToDisplay('3')">
                                <input type="button" value="*" onclick="addToDisplay('*')">
                            </div>
                            <div>
                                <input type="button" value="0" onclick="addToDisplay('0')">
                                <input type="button" value="." onclick="addToDisplay('.')">
                                <input type="button" value="C" onclick="clearDisplay()">
                                <input type="button" value="/" onclick="addToDisplay('/')">
                            </div>
                            <div>
                                <input type="button" value="=" onclick="calculate()" class="equal">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function addToDisplay(value) {
            let display = document.calculatorForm.display;
            let lastChar = display.value.slice(-1);

            if ('+-*/'.includes(value) && '+-*/'.includes(lastChar)) {
                display.value = display.value.slice(0, -1) + value;
            } else {
                display.value += value;
            }
        }

        function clearDisplay() {
            document.calculatorForm.display.value = '';
        }

        function calculate() {
            let expression = document.calculatorForm.display.value;

            if ('+-*/.'.includes(expression.charAt(0)) || '+-*/'.includes(expression.slice(-1))) {
                document.calculatorForm.display.value = 'Error';
                return;
            }
            if (expression.trim() === '') {
                document.calculatorForm.display.value = 'Error';
                return;
            }
            document.calculatorForm.display.value = eval(expression);
        }
    </script>
</body>
</html>
