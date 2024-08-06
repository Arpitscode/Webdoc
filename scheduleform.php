<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header('location:login.php');
    exit;
}
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require './partials/_dbconnect.php';
    $name = $_POST["name"];
    $mobno = $_POST["mobno"];
    $password = $_POST["password"];
    $appointdate = $_POST["appointmentdate"];
    $doctorname = $_POST["doctorname"];
    if ($conn) {
        $tbcreate = "CREATE TABLE IF NOT EXISTS `appointments`(            
        `Sr.no` int(255) AUTO_INCREMENT PRIMARY KEY, 
        `name` varchar(255) Not null,
        `mobno`int(11),
        `password`varchar(255),
        `doctorname` varchar(255),
        `appointment-datetime` datetime, 
        `date` datetime NOT NULL DEFAULT current_timestamp());";
         mysqli_query($conn,$tbcreate);
    }

    if ($mobno != "" && $password != "" && $name != "" && $appointdate != "" && $doctorname != "") {
        $sqlquery = "Select * from register where mobno='$mobno'AND password='$password'";
        $result = mysqli_query($conn, $sqlquery);
        $num = mysqli_num_rows($result);

        if ($num == 1) {
            $existSql = "Select * from `appointments` where `appointment-datetime`='$appointdate' AND `doctorname`='$doctorname'";
            $result2 = mysqli_query($conn, $existSql);
            $numExistrows = mysqli_num_rows($result2);
            if ($numExistrows == 0) {
                $insertdata= "INSERT INTO `appointments`(`mobno`,`name`,`password`,`doctorname`,`appointment-datetime`,`date`)
                            VALUES('$mobno','$name','$password','$doctorname','$appointdate',current_timestamp())";
                mysqli_query($conn, $insertdata);
                $login = true;
            } else {
                $showError = " Oh! Docter Is Busy This Time So, Please! Select Another Time";
            }
        } else {
            $showError = "Invaild Mobile Number/Password.<a href='forgetpass.php'>Forget password!</a> ";
        }
    } else {
        switch ($null = "") {
            case $name:
                $showError = "Please! enter your name, you can not submit empty name .";
                break;
            case $mobno:
                $showError = "Please! enter your mobno, you can not submit empty name .";
                break;
            case $password:
                $showError = "Please! enter your password, you can not submit empty password.";
                break;
            case $appointdate:
                $showError = "Please! enter your appointdate, you can not submit empty appointment .";
                break;
            case $doctorname:
                $showError = "Please! enter your doctor name, you can not submit empty doctor name .";
                break;
            default:
                $showError = "Somthing went wrong";
                break;
        }
    }
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my docter</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap-icons.css">
</head>
<script src="../bootstrap/bootstrap.min.js"></script>
<style>
    body {
        background-image: url(image/background.jpg);
    }

    .container {
        backdrop-filter: blur(10px);
        box-shadow: 0px 0px 10px black;
        border-radius: 25px;
    }
</style>

<body>
    <?php
    require './partials/header.php';
    require './partials/_dbconnect.php';
    ?>
    <h1 class="container text-center my-2 py-2">Appiontment Form</h1>
    <?php
    if ($showError) {
        echo '<div class="container my-4 my-5 border" style="box-shadow: 0px 0px 10px red;">';
    } elseif ($login) {
        echo '<div class="container my-4 my-5 border" style="box-shadow: 0px 0px 10px green;">';
    } else {
        echo '<div class="container my-4 my-5 border">';
    }
    ?>
    <form action="scheduleform.php" method="post" class="my-4 px-5">
        <?php
        if ($login) {
            echo '<div class="alert alert-success  alert-dismissible fade show " role="alert">
            <strong>Successfully!</strong>your request are succesfully send it..<a>more details</a>.
            <button type="button" class ="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>';
        }
        if ($showError) {
            echo '<div class="alert alert-danger  alert-dismissible fade show " role="alert">
                <strong>Error!</strong>' . $showError . '
                <button type="button" class ="btn-close" onclick="" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>';
        }
        ?>
        <div class="form-group m-2">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group m-2">
            <label for="mobile number">Mobile Number:</label>
            <input type="number" class="form-control" name="mobno" id="mobno">
        </div>
        <div class="form-group m-2">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="form-group m-2">
            <label for="appointment date">Appointment Date:</label>
            <input type="datetime-local" class="form-control" name="appointmentdate" id="appointmentdate">
        </div>
        <div class="form-group m-2">
            <label for="appointment date">Doctor Name:</label>
            <input type="text" class="form-control" name="doctorname" id="doctorname">
        </div>
        <div class="form-group m-3">
            <input type="checkbox" class="form-control-checkbox" name="conformation" id="conformation" required>
            <label for="Conformation">Confirmation! Are you checked datails? </label>
        </div>

        <div class="form-group m-4">
            <button type="submit" class="btn btn-primary">Appointed</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </div>
    </form>
    <div>
        <p class="text-center">Are you New user click here -> <a href="registrationform.php">new registration</a></p>
    </div>
    </div>
</body>

</html>