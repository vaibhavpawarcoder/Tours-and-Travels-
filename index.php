<?php include 'DB.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/style.css">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>Vaibhav Tours</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
            <a class="navbar-brand h1" href="index.html"> <span class="h1">Vaibhav Tours</span> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white h5" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white h5" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white h5" href="package.php">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white h5" href="blog.php">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white h5" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-danger  text-white rounded-pill h5 mt-2 mx-4 text-center p-2" href="#FAQ">Book Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- main home section -->
    <section id="Home">
        <div id="main-banner" class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" style="
        background-image: url('Img/be-1.jpg');
        background-size: cover;
        ">
            <div class="content text-center">
                <h1 class="text-white mt-5 h1">Search your next Holiday</h1>
                <p class="text-white h3 mt-3">CHECK OUR BEST PROMOTIONS</p>
                <p class="icon mt-5"> <span><i class="h2 text-white bi bi-cup-straw"></i></span> <span><i class="h2 text-white bi bi-camera"></i></span> <span><i class="h2 text-white bi bi-airplane"></i></span> <span><i class="h2 text-white bi bi-train-freight-front"></i></span> </p>
            </div>
        </div>
    </section>

    <!-- Main DESTINATIONS Section -->

    <section id="DESTINATIONS">
        <div class="container mt-5 mb-5">
            <div class="row justify-content-evenly">
                <div class="col-md-10">
                    <h3 class="text-center mb-5">OUR PROPOSALS</h3>
                    <h1 class="text-center mb-4">OUR DESTINATIONS</h1>
                    <div class="row justify-content-evenly">
                        <?php

                        $query = "select * from pakages limit 6";
                        $show = mysqli_query($con, $query);

                        $result = mysqli_num_rows($show);

                        while ($row = mysqli_fetch_array($show)) {
                            if ($show) {
                        ?>
                                <div class="col-md-4 mb-3">
                                    <div class="cards bg-dark text-white card">
                                        <img src="Upload/Gallery/<?php echo $row['pic_1'];  ?>" width="320px" height="280px" class="card-img  " alt="...">
                                        <div class="card-img-overlay">
                                            <h5 class="card-title text-dark"><?php echo $row['Continents'];  ?></h5>
                                            <p class="card-text text-primary h5"><?php echo $row['Country'];  ?></p>
                                            <a href="show_package.php?id=<?php echo $row['ID'] ?>" class="card-text one btn btn-primary ">View Destination</a>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <!-- Main Package Section -->

    <section id="package">
        <div id="main-banner" class="banner-image w-100 vh-50 d-flex justify-content-center align-items-center" style="
        background-image: url('Img/nat.png');background-size: cover;">
            <div class="content text-center">
                <h1 class="text-white mt-5 h1">Your Next Holiday</h1>
                <a href="package.php" class="btn btn-light"> View All Packages </a>
                <p class="text-white h3 mt-3"><a href="" class="card-text one btn btn-primary ">View Destination</a>
                </p>

            </div>
        </div>
    </section>

    <section id="infos">
        <div class="container">
            <div class="row justify-content-evenly">
                <div class="col-md-10">
                    <div class="row justify-content-evenly">
                        <div class="col-md-4">
                            <p class="mt-5">Our Trips</p>
                            <h2 class="mb-5">The Best Beaches</h2>
                            <p class="mb-4">
                                Lorem ipsum dolor sit amet, consectetur adip iscing elit. Proin rhoncus urna dictum
                                neque molestie ultricies mauris ac.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit. Proin rhoncus urna dictum neque
                                molestie ultricies mauris ac.</p>
                            <a href="package.php" class="btn btn-success mt-3 mb-3"> Book Now</a>
                        </div>
                        <div class="col-md-8">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="Img/be-2.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>First slide label</h5>
                                            <p>Some representative placeholder content for the first slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="Img/be-3.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="Img/be-4.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Third slide label</h5>
                                            <p>Some representative placeholder content for the third slide.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-evenly mt-5" id="info">
                <div class="col-md-3 col-10 text-center mt-5 col-10">
                    <i class="bi bi-geo-alt h2"></i>
                    <h3>World Tour</h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adip iscing elit Proin rhonc us urna dictum.</p>
                    <a href="" class="h6 mb-5"> View More</a>
                </div>

                <div class="col-md-3 col-10 text-center mt-5 col-10">
                    <i class="bi bi-airplane h2"></i>
                    <h3>Plan</h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adip iscing elit Proin rhonc us urna dictum.</p>
                    <a href="" class="h6 mb-5"> View More</a>
                </div>

                <div class="col-md-3 col-10 text-center mt-5 col-10">
                    <i class="bi bi-building h2"></i>
                    <h3>Best Tours</h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adip iscing elit Proin rhonc us urna dictum.</p>
                    <a href="" class="h6 mb-5"> View More</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid mt-5 mb-5">
            <div class="row">
                <div class="col-md-6">
                    <div id="main-banner" class="banner-image w-100 vh-50 d-flex justify-content-center align-items-center" style="
        background-image: url('Img/city.jpg');
        background-size: cover; 
        ">
                        <div class="content text-center">
                            <p class="mt-5">01.Last Minute</p>
                            <h1 class="text-white  h1">Discover Cities</h1>
                            <a href="package.php" class="btn btn-light mb-3"> View All Packages </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="main-banner" class="banner-image w-100 vh-50 d-flex justify-content-center align-items-center" style="
        background-image: url('Img/nature.jpg');
        background-size: cover; 
        ">
                        <div class="content text-center">
                            <p class="mt-5">02. PROMOTIONS</p>
                            <h1 class="text-white  h1">Discover Nature</h1>
                            <a href="package.php" class="btn btn-light mb-3"> View All Packages </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="package">
        <div class="container mb-2 mt-3">
            <div class="row justify-content-evenly">
                <div class="col-md-11">
                    <h6 class="text-center">PROMOTIONS</h6>
                    <h2 class="text-center">OUR PACKAGES</h2>
                    <div class="row justify-content-evenly">
                        <?php

                        $query = "select * from pakages limit 3";
                        $show = mysqli_query($con, $query);

                        $result = mysqli_num_rows($show);

                        while ($row = mysqli_fetch_array($show)) {
                            if ($show) {
                        ?>
                                <div class="col-md-3 col-10 mt-3 mb-2">
                                    <div class="card card-hover" style="width: 18rem;">
                                        <img src="Upload/Gallery/<?php echo $row['pic_1'];  ?>" height="280px" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $row['Country'];  ?></h5>
                                            <p class="card-text"><i class="bi bi-geo-alt"></i> <?php echo $row['Continents'];  ?></p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Type : <?php echo $row['Type'];  ?> </li>
                                            <li class="list-group-item">DIFFICULTY : <?php echo $row['Diff'];  ?> </li>
                                        </ul>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Days : <?php echo $row['Days'];  ?> </li>
                                            <li class="list-group-item">MIN. AGE : <?php echo $row['Min_Age'];  ?> </li>
                                        </ul>
                                        <div class="card-body">
                                            <a href="show_package.php?id=<?php echo $row['ID'] ?>" class="card-link btn btn-primary">Details</a>
                                        </div>
                                    </div>
                                </div>

                        <?php
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white">
        <div class="container pt-5">
            <div class="row justify-content-evenly">
                <div class="col-md-10" id="foot">
                    <div class="row justify-content-between">
                        <div class="col-md-5">
                            <span>
                                <p>KEEP IN TOUCH</p>
                                <h2>Travel with Us</h2>
                            </span>
                        </div>

                        <div class="col-md-5">
                            <span class="foot-form">
                                <form action="" method="post">
                                    <input type="text" class="rounded-pill" name="" id="">
                                    <button type="submit" class="btn btn-primary rounded-pill mx-3" name="send">Send</button>
                                </form>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
            <hr>
            <div class="row justify-content-evenly mt-5">
                <div class="col-md-4 mt-4 mb-3">
                    <h2>Vaibhav Tours.</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut diam et nibh condimentum
                        venenatis eu ac magnasin. Quisque interdum est mauris, eget ullamcorper.</p>
                    <span class="mb-5">
                        <a href="https://www.linkedin.com/in/vaibhav-pawar-2b3836251/" target="_blank"> <i class="bi bi-linkedin mx-3 h1 text-white "></i></a>
                        <a href="https://github.com/vaibhavpawarcoder" target="_blank"> <i class="bi bi-github h1 text-white "></i></a>
                        <a href="https://www.instagram.com/vaibhav___jpg/" target="_blank"><i class="bi bi-instagram mx-3 h1 text-white "></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100012291060742" target="_blank"><i class="bi bi-facebook mx-3 h1 text-white "></i></a>
                    </span>
                </div>

                <div class="col-md-6 mt-4 mb-3">
                    <h2>Contact Us.</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut diam et nibh condimentum
                        venenatis eu ac magnasin. Quisque interdum est mauris, eget ullamcorper.</p>
                    <span>
                        <p>Call Us :- +91-7387-545-206</p>
                        <p>Mail Us :- info@vaibhavtours.com</p>
                    </span>
                </div>
                <hr>
                <p class="text-center text-white">
                    <a href="https://vaibhavpawarcoder.in/index.html" class="text-white">
                        Copyright © 2022 | Vaibhav pawar
                    </a>
                </p>
            </div>

        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="text/javascript">
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-dark', 'shadow');
            } else {
                nav.classList.remove('bg-dark', 'shadow');
            }
        });
    </script>
</body>

</html>