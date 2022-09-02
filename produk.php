<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Company Profile</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Agency Template" name="keywords">
        <meta content="Bootstrap Agency Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="libs/slick/slick-theme.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Header Start -->
            <div class="header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-10">
                            <div class="navbar navbar-expand-lg bg-light navbar-light">
                                <a href="#" class="navbar-brand">MENU</a>
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                    <div class="navbar-nav ml-auto">
                                        <a href="home.php" class="nav-item nav-link">Home</a>
                                        <a href="about.html" class="nav-item nav-link">About Us</a>
                                        <a href="produk.php" class="nav-item nav-link active">Product</a>
                                        <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->


            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Product</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Product</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Portfolio Start -->
            <div class="portfolio">
                <div class="container">
                    <!-- <div class="section-header">
                        <h2>Our Product</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium ornare velit non</p>
                    </div> -->
                    <div class="row portfolio-container">

                    <?php
                        include 'model_eval.php';
                        $isiTabelProduk = getTableProduk();
                        include 'view_eval.php';
                    ?>
               
                </div>
            </div>
            <!-- Portfolio Start -->

            <!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="footer-about">
                                <h2>About Us</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet metus sit amet diam varius commodo. Aliquam at nisl interdum
                                </p>
                                <br>
                                <p><i class="fa fa-map-marker-alt"></i>123 Street, Malang, Indonesia</p>
                                <p><i class="fa fa-phone-alt"></i>+6285789876765</p>
                                <p><i class="fa fa-envelope"></i>info@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="footer-link">
                                        <h2>Useful Link</h2>
                                        <a href="">About Us</a>
                                        <a href="">Our Product</a>
                                        <a href="">Contact Us</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="footer-link">
                                        <h2>Useful Link</h2>
                                        <a href="">Customer Review</a>
                                        <a href="">Customer Support</a>
                                        <a href="">Site Map</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <p>&copy; Website by</a>,  Mayzura & Almira</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
