<?php
session_start();
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require './partials/_dbconnect.php';
    $mobno = $_POST["mobno"];
    $password = $_POST["password"];

    $sqlquery = "Select * from register where mobno='$mobno'AND password='$password'";
    $result = mysqli_query($conn,$sqlquery);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        header("location:index.php");
    } else {
        $showError = "Invalid password/mobile number.<a href='forgetpass.php'>Forget password!</a> ";
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
<?php require './partials/header.php';?>
    <h1 class="container text-center my-2 py-2">Login Form</h1>
    <?php
    if ($showError) {
        echo '<div class="container my-4 my-5 border" style="box-shadow: 0px 0px 10px red;">';
    } elseif ($login) {
        echo '<div class="container my-4 my-5 border" style="box-shadow: 0px 0px 10px green;">';
    } else {
        echo '<div class="container my-4 my-5 border">';
    }
    ?>
    <form action="login.php" method="post" class="my-4 px-5">
        <?php
        if ($login) {
            echo '<div class="alert alert-success  alert-dismissible fade show " role="alert">
            <strong>Successfully!</strong>you are loggedin.<a href="scheduleform.phP">Click here to book Appointment.</a>.
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
            <label for="mobile number">Mobile Number:</label>
            <input type="phone" class="form-control" name="mobno" id="mobno">
        </div>
        <div class="form-group m-2">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="form-group m-4">
            <button type="submit" class="btn btn-primary">Login</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </div>
    </form>
    <div>
        <p class="text-center">Are you New user click here -> <a href="registrationform.php">new registration</a></p>
    </div>
    </div>
</body>

</html>