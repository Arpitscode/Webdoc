<?php
session_start();
if (isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true) {
    $LogoutAlert = true;
} else {
    $LogoutAlert = false;
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
    $showAlert = false;
    $showError = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require './partials/_dbconnect.php';
        $name = $_POST["name"];
        $dob = $_POST["dob"];
        $gender = $_POST["gender"];
        $mobno = $_POST["mobno"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        if ($conn) {
            $tbcreate = "CREATE TABLE IF NOT EXISTS `register`(            
            `Sr.no` int(255) AUTO_INCREMENT PRIMARY KEY, 
            `name` varchar(255) Not null,
            `gender` text,
            `dob` date,
            `mobno` varchar(11) UNIQUE,
            `email` varchar(255),
            `password` varchar(255), 
            `date` datetime NOT NULL DEFAULT current_timestamp());";
            $result = mysqli_query($conn, $tbcreate);
        }

        $existSql = "Select * from register WHERE mobno='$mobno'";
        $result = mysqli_query($conn, $existSql);
        $numExistrows = mysqli_num_rows($result);
        if ($numExistrows > 0) {
            $showError = "Mobile Number Already Exists.Please! Insert Another Number.";
        } else {
            if (($password == $cpassword && $name != "" && strlen($mobno) == 10 && $dob != "" && $gender != "")) {
                $sqlquery = "INSERT INTO `register`(`name`,`gender`,`dob`,`mobno`,`email`,`password`,`date`)
                    VALUES('$name','$gender','$dob','$mobno','$email','$password',current_timestamp())";
                $result = mysqli_query($conn, $sqlquery);
                if ($result) {
                    $showAlert = true;
                    header("location:login.php");
                }
            } else {
                switch ($null = "") {
                    case $name:
                        $showError = "Please! enter your name, you can not submit empty name .";
                        break;
                    case $gender:
                        $showError = "Please! enter your gender, you can not submit empty gender .";
                        break;
                    case $dob:
                        $showError = "Please! enter your dob, you can not submit empty dob .";
                        break;
                    case $mobno:
                        $showError = "Please! enter your mobno, you can not submit empty mobno.";
                        break;
                    case $email:
                        $showError = "Please! enter your email, you can not submit empty email.";
                        break;
                    case $password:
                        $showError = "Please! enter your password, you can not submit empty password.";
                        break;
                    default:
                        if ($password != $cpassword) {
                            $showError = "Confrim Password does not match with Password.";
                        } elseif (strlen($mobno) != 10) {
                            $showError = "Please!Enter Only 10 digits Mobile Number.";
                        } else {
                            $showError = "Somthing went wrong";
                        }

                        break;
                }
            }
        }
    }
    ?>
    <?php
    require './partials/header.php';
    // require './partials/_dbconnect.php';
    ?>
    <h1 class="container text-center my-2 py-2">Registration Form</h1>
    <?php
    if ($showError) {
        echo '<div class="container my-4 my-5 border" style="box-shadow: 0px 0px 10px red;">';
    } elseif ($showAlert) {
        echo '<div class="container my-4 my-5 border" style="box-shadow: 0px 0px 10px green;">';
    } else {
        echo '<div class="container my-4 my-5 border">';
    }
    ?>
    <form action="registrationform.php" method="post" class="my-4 px-5">
        <?php
        if ($showAlert) {
            echo '<div class="alert alert-success  alert-dismissible fade show " role="alert">
            <strong>Success!</strong>Welcome to our website.
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
        if ($LogoutAlert) {
            echo '<div class="alert alert-danger  alert-dismissible fade show " role="alert">
            <strong>Error!</strong>Please,Logout First Then You Can Register/Login. 
            <button type="button" class ="btn-close" onclick="" data-bs-dismiss="alert" aria-label="Close">
            </button>
            </div>';
        }

        ?>
        <div class="form-group m-2">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name" autofocus>
        </div>
        <div class="form-group my-2">
            <label class="mx-2" for="gender">Gender:</label>
            <label class="mx-2" for="male">Male:</label>
            <input type="radio" class="form-control-radio" value="M" name="gender" id="gender">
            <label class="mx-2" for="female">Female:</label>
            <input type="radio" class="form-control-radio" value="F" name="gender" id="gender">
            <label class="mx-2" for="toher">other:</label>
            <input type="radio" class="form-control-radio" value="O" name="gender" id="gender">
        </div>
        <div class="form-group m-2">
            <label for="DOB">DOB:</label>
            <input type="date" class="form-control" name="dob" id="dob">
        </div>
        <div class="form-group m-2">
            <label for="mobno">Mobile No:</label>
            <input type="number" class="form-control" name="mobno" id="mobno">
        </div>
        <div class="form-group m-2">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group m-2">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="form-group m-2">
            <label for="confrim password">Confrim Password:</label>
            <input type="password" class="form-control" name="cpassword" id="cpassword">
        </div>
        <div class="form-group m-3">
            <input type="checkbox" class="form-control-checkbox" name="conformation" id="conformation" required>
            <label for="Conformation">Confirmation! Are you checked datails? </label>
        </div>
        <label for="information">*All fields are mandatory </label>
        <div class="form-group m-4">
            <?php
            if ($LogoutAlert) {
                echo '<button type="" class="btn btn-outline-secondary disabled ">Register</button>';
            }
            if (!$LogoutAlert) {
                echo '<button type="submit" class="btn btn-primary">Register</button>';
            } ?>
            <button type="reset" class="btn btn-primary">Reset</button>
        </div>
    </form>
    <div>
        <p class="text-center">Are you New user click here -> 
            <a href="login.php"></a>
            <?php
            if ($LogoutAlert) {
                echo '<a>Login</a>';
            }
            if (!$LogoutAlert) {
                echo '<a href="login.php">Login</a>';
            } ?>
        </p>
    </div>
    </div>
</body>

</html>