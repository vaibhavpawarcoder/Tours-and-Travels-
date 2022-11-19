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
                        <a class="nav-link text-white h5" href="package.html">Packages</a>
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

    <div class="banner-contact-image w-100 vh-20 d-flex justify-content-center align-items-center p-5">
        <div class="content text-center p-5">
            <h1 class="text-success p-5">Packages</h1>
        </div>
    </div>

    <!-- about info -->

    <!-- <div class="container">
        <div class="row mb-3 mt-3">
            <div class="col-md-9">
                <p>Aivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque.</p>
                <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Ivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis cras sagittis.</p>
            </div>
            <div class="col-md-3 bg-dark text-light justify-content-center">
                <p class="mt-3 mx-5"><i class="bi bi-geo-alt"></i>Address_Satara </p>
                <p class="mt-3 mx-5"><i class="bi bi-phone"></i> +91-7387-545-206</p>
                <p class="mt-3 mx-5"><i class="bi bi-envelope"></i> info@vaibhavtour.com</p>
            </div>
        </div>
    </div> -->

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row justify-content-evenly">
                    <div class="col-md-11 ">
                        <h6 class="text-center">PROMOTIONS</h6>
                        <h2 class="text-center">OUR PACKAGES</h2>
                        <div class="row justify-content-center">

                            <?php include 'DB.php'; ?>

                            <form action="" method="post">
                                <div class="col-md-8 mt-5 mb-5">
                                    <div class="input-group">

                                        <?php
                                        $query = "SELECT DISTINCT(Continents) FROM pakages";
                                        $result = $con->query($query);
                                        if ($result->num_rows > 0) {
                                            $Continents = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                        }


                                        ?>
                                        <select class="form-select" id="autoSizingSelect" name="Continents">
                                            <option selected disabled value="">Choose...</option>
                                            <?php
                                            foreach ($Continents as $Continents) {
                                            ?>
                                                <option><?php echo $Continents['Continents']; ?> </option>
                                            <?php
                                            }
                                            ?>
                                        </select>

                                        <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-evenly">
                    <?php
                    // if (isset($_POST['submit'])) {
                    //     $Continents = $_POST['Continents'];

                    //     $select = "select * from pakages where Continents='$Continents'  ";

                    //     $query = mysqli_query($con, $select);

                    //     $num = mysqli_num_rows($query);


                    //     while ($result = mysqli_fetch_assoc($query)) {
                    //         if ($num) {
                    ?>

                    <?php
                    include 'DB.php';
                    if (isset($_POST['submit'])) {
                        $Continents = $_POST['Continents'];
                        $query = "select * from pakages where Continents = '$Continents'";
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
                                            <li class="list-group-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Nunc ut efficitur ante. Donec dapibus dictum scelerisque.</li>
                                        </ul>
                                        <div class="card-body">
                                            <a href="show_package.php?id=<?php echo $row['ID'] ?>" class="card-link btn btn-primary">Details</a>
                                        </div>
                                    </div>
                                </div>

                            <?php

                            } else {
                                echo "No Request";
                            }
                        }
                    } else {
                        $query = "select * from pakages limit 6";
                        $show = mysqli_query($con, $query);

                        $result = mysqli_num_rows($show);

                        while ($row = mysqli_fetch_array($show)) {
                            if ($show) {
                            ?>
                                <div class="col-md-3 col-10 mt-3 mb-2 mx-3">

                                    <div class="card card-hover" style="width: 18rem;">
                                        <img src="Upload/Gallery/<?php echo $row['pic_1'];  ?>" height="280px" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $row['Country'];  ?></h5>
                                            <p class="card-text"><i class="bi bi-geo-alt"></i> <?php echo $row['Continents'];  ?></p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Nunc ut efficitur ante. Donec dapibus dictum scelerisque.</li>
                                        </ul>
                                        <div class="card-body">
                                            <a href="show_package.php?id=<?php echo $row['ID'] ?>" class="card-link btn btn-primary">Details</a>
                                        </div>
                                    </div>
                                </div>
                    <?php
                            }
                        }
                    }
                    ?>


                </div>
            </div>
        </div>



    </div>
    <div class="col-md-3">
        <p class="text-center">Contact Us</p>
        <h1 class="text-center">Drop Us a Line</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </form>
        <div class="row justify-content-center">
            <div class="col-md-10 col-9 text-center">
                <i class="bi bi-geo-alt h2"></i>
                <h3>World Tour</h3>
                <p>Lorem ipsum dolor sit amet conse ctetur adip iscing elit Proin rhonc us urna dictum.</p>
                <a href="" class="h6 mb-5"> View More</a>
            </div>

            <div class="col-md-10 col-9 text-center">
                <i class="bi bi-airplane h2"></i>
                <h3>Plan</h3>
                <p>Lorem ipsum dolor sit amet conse ctetur adip iscing elit Proin rhonc us urna dictum.</p>
                <a href="" class="h6 mb-5"> View More</a>
            </div>

            <div class="col-md-10 col-9 text-center">
                <i class="bi bi-building h2"></i>
                <h3>Best Tours</h3>
                <p>Lorem ipsum dolor sit amet conse ctetur adip iscing elit Proin rhonc us urna dictum.</p>
                <a href="" class="h6 mb-5"> View More</a>
            </div>
        </div>
    </div>
    </div>
    </div>

    <section id="package">
        <div id="main-banner" class="banner-image w-100 vh-50 d-flex justify-content-center align-items-center" style="
        background-image: url('Img/one.png');
        background-size: cover; 
        ">
            <div class="content text-center">
                <h1 class="text-white mt-5 h1">Your Next Holiday</h1>
                <a href="" class="btn btn-light"> View All Packages </a>
                <p class="text-white h3 mt-3"><a href="" class="card-text one btn btn-primary ">View Destination</a>
                </p>

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