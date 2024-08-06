<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

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
<body>

    <!-- hader  -->
    <?php 
    require './partials/header.php' ;
    require './partials/_dbconnect.php';
    ?>
    <!-- heroSection -->
    <main>
        <section>
            <div class="hero">
                <div class="herosection">
                    <div class="box-left">
                        <section>
                            <div class="text-1">
                                <h1>Your Road to Wellness Beging Here</h1>
                            </div>
                            <div class="text-2">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae numquam sit
                                    commodi sunt modi enim molestiae dolore cum.</p>
                            </div>
                            <div class="button">
                                <a href="registrationform.php" class="btn-1">New Patint</a>
                                <a href="scheduleform.php" class="btn-1 btn2">Appoitment</a>
                            </div>
                        </section>

                    </div>
                    <div class="box-right">
                        <div class="circle-bg"></div>

                        <img src="image/docter.png" alt="doctor">
                    </div>
                </div>


            </div>

        </section>

        <!-- textsection-1 -->
        <section>
            <div class="textsection-1">
                <div class="text-item-box-1">LIVING A LIFE OF HELTH</div>
                <div class="text-item-box-2">
                    <H1>Health care made extraordinary</H1>
                </div>
                <div class="text-item-box-3">Lorem ipsum dolor sit amet ipsum dolor ipsum dolor ipsum dolor sit .</div>


            </div>

            </div>


        </section>
        <!-- card  -->
        <section>
            <div class="card-box">
                <div class="card">
                    <div class="imagsection">
                        <div class="pro-imag">
                        </div>
                        <div class="pro-name">
                            <h1>Er.humanshu</h1>
                            <p>custmer</p>

                        </div>
                    </div>
                    <div class="txt-section">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit
                            ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet .
                        </p>

                    </div>
                </div>
                <div class="card">
                    <div class="imagsection">
                        <div class="pro-imag">
                        </div>
                        <div class="pro-name">
                            <h1>Er.humanshu</h1>
                            <p>custmer</p>

                        </div>
                    </div>
                    <div class="txt-section">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit
                            ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet .
                        </p>

                    </div>
                </div>
                <div class="card">
                    <div class="imagsection">
                        <div class="pro-imag">
                        </div>
                        <div class="pro-name">
                            <h1>Er.humanshu</h1>
                            <p>custmer</p>

                        </div>
                    </div>
                    <div class="txt-section">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit
                            ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet .
                        </p>

                    </div>
                </div>



                <!-- <a href="#">Discover More</a> -->
            </div>
        </section>

        <!-- viwe  -->

        <section>

            <div class="viwe">
                <div class="viwe-1">
                    <h1>800+</h1>
                    <p>Happy Client</p>
                </div>
                <div class="viwe-1">
                    <h1>20+</h1>
                    <p>Award</p>
                </div>
                <div class="viwe-1">
                    <h1>50+</h1>
                    <p>Our Clinics</p>
                </div>
                <div class="viwe-1">
                    <h1>250+</h1>
                    <p>New custmer</p>
                </div>



            </div>
        </section>
        <section>

            <div class="contener-img">
                <div class="text--section">
                    <h3>For over 20 years,our team has been passsionate & dedicated to helping all members of the family
                        spanning from 101 years young to one day old</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis incidunt hic recusandae,
                        fugiat voluptatem, libero temporibus provident impedi</p>
                    <a href="#">Read more</a>
                </div>
                <div class="img--1"></div>
                <div class="img--2"></div>
            </div>
        </section>

        <section>
            <div class="textsection-1">
                <div class="text-item-box-1">LIVING A LIFE OF HELTH</div>
                <div class="text-item-box-2">
                    <H1>Your Home to Wellness</H1>
                </div>
                <div class="text-item-box-3">Lorem ipsum dolor sit amet ipsum dolor ipsum dolor ipsum dolor sit .</div>


            </div>

            </div>


        </section>


        <section>
            <div class="card-box-main-grid">
                <div class="card-11">
                    <div class="log-chiro">
                        <img src="image/chiropractic.png">
                    </div>
                    <h1>chiropractic</h1>
                    <div class="tex-card-11">
                        <p>Lorem ipsum dolor sit amet dolor sit amet ,sit amet elit.</p>
                    </div>
                    <a href="#" class="read-more">Read More <i class="fa-solid fa-right-long"></i></a>

                </div>
                <div class="card-11">
                    <div class="log-chiro">
                        <img src="image/mental health.jpg">
                    </div>
                    <h1>Therapy</h1>
                    <div class="tex-card-11">
                        <p>Lorem ipsum dolor sit amet dolor sit amet ,sit amet elit.</p>
                    </div>
                    <a href="#" class="read-more">Read More <i class="fa-solid fa-right-long"></i></a>

                </div>
                <div class="card-11">
                    <div class="log-chiro">
                        <img src="image/nutrition.jpg">
                    </div>
                    <h1>Nutrition</h1>
                    <div class="tex-card-11">
                        <p>Lorem ipsum dolor sit amet dolor sit amet ,sit amet elit.</p>
                    </div>
                    <a href="#" class="read-more">Read More <i class="fa-solid fa-right-long"></i></a>

                </div>
                <div class="card-11">
                    <div class="log-chiro">
                        <img src="image/massage.PNG">
                    </div>
                    <h1>Massage</h1>
                    <div class="tex-card-11">
                        <p>Lorem ipsum dolor sit amet dolor sit amet ,sit amet elit.</p>
                    </div>
                    <a href="#" class="read-more">Read More <i class="fa-solid fa-right-long"></i></a>

                </div>

            </div>


            <div class="discriv-more">
                <div class="btn">
                    <a href="#">Discover More</a>
                </div>
            </div>

        </section>
        <!-- <section>
            <div class="test-section-5">
                <div class="test-section-6">
                    <h1>Redy to take the next step?</h1>
                    <p>New Patint Special offer</p>
                </div>
              <div class="btn--5">
                <a href="login.php">Login<i class="fa-solid fa-right-long"></i></a>
              </div>
            </div>
        </section> -->
        <section>
            <div class="main-contener-img">


                <div class="tran-image">
                    <div class="image--22"></div>
                    <div class="text--22">
                        <button>FILLING GOOD</button>
                        <h1>Emproving every <br> of your life</h1>
                        <ul>
                            <li><i class="fa-solid fa-check"></i> Rehab a Sports injury</li>
                            <li><i class="fa-solid fa-check"></i>Bounce Back after giving birth</li>
                            <li><i class="fa-solid fa-check"></i>Kick your Migraines to the curb</li>
                            <li><i class="fa-solid fa-check"></i>Clean Up your Dite</li>

                        </ul>
                        <div class="discriv-more discriv-more-2 ">
                            <div class="btn btn-5">
                                <a href="#">Discover More</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="textsection-1">
                <div class="text-item-box-1" style="padding: .8rem 1rem; border-radius:12rem; background-color: rgb(74, 94, 95);">QUR BLOG</div>
                <div class="text-item-box-2">
                    <H1>Latast news</H1>
                </div>
                <div class="text-item-box-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo quae dolor facilis eos distinctio debitis voluptatem praesentium amet corrupti alias, sapiente soluta eligendi nesciunt voluptate id delectus, repudiandae, impedit perferendis.</div>
            </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">watch</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><img src="icon/facebook.svg" alt="facebook icon"></a>
                        <a href="#"><img src="icon/twitter.svg" alt="twitter icon"></a>
                        <a href="#"><img src="icon/instagram.svg" alt="instagram icon"></a>
                        <a href="#"><img src="icon/youtube1.svg" alt="youtube icon"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>



</body>

</html>