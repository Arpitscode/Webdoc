<?php
if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true){
    $loggedin=true;
}
else{
    $loggedin=false;
}
?>

<header>
        <nav>
            <div class="navbar ">
                <a class="logo" href="#">
                    <img src="image/logo.png" alt="logo">
                </a>
                <div class="navtxt flex">
                    <ul>
                        <li class="nav-text"><a href="index.php" class="hove-line">Home</a></li>
                        <li class="nav-text"><a href="#" class="hove-line">Services</a></li>
                        <li class="nav-text"><a href="#" class="hove-line">Team</a></li>
                        <li class="nav-text"><a href="#" class="hove-line">Testimonial</a></li>
                        <li class="nav-text"><a href="#" class="hove-line">About</a></li>
                        <li class="nav-text"><a href="#" class="hove-line">Contact</a></li>
                        <div class="flex btn-section">
                            <li class="nav-text btn  px-4">
                                <?php
                                if (!$loggedin) {
                                    echo'<a href="login.php" class="hove-line">Login</a>';
                                }
                                if ($loggedin) {
                                    echo'<a href="logout.php" class="hove-line">Logout</a>';
                                }
                                ?>
                            </li>
                            <li class="nav-text">
                                <i class="fa-solid fa-phone red"></i>
                                <a href="#home" class="hove-line red">+91 0000000000</a>
                            </li>
                        </div>

                    </ul>

                </div>
            </div>


        </nav>
    </header>