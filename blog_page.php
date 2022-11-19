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
    <style>
        ul li {
            list-style: none;
        }

        ul li a {
            text-decoration: none;
            transition: 0.5s all;
        }

        /* ul li a:hover{background-color: yellow !important; color: aliceblue !important;} */
    </style>
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
    <?php include 'DB.php';  ?>

    <?php

    $IDS = $_GET['id'];

    $select = "SELECT * FROM `Blog` WHERE ID='$IDS'";

    $result = mysqli_query($con, $select);
    // mysqli_query($query);

    while ($row = mysqli_fetch_array($result)) {
    ?>

        <div class="banner-contact-image w-100 vh-20 d-flex justify-content-start align-items-center p-5">
            <style>
                .banner-contact-image {
                    background-image: url('Upload/Gallery/<?php echo $row['pic_1']; ?>');
                    background-size: cover;
                }
            </style>
            <div class="content text-center p-5">
                <h1 class="text-success p-5"><?php echo $row['title']; ?></h1>
                <p class="d-flex justify-content-around">
                    <span class="fs-3"><i class="bi bi-geo-alt"></i><?php echo $row['name']; ?></span>
                </p>
            </div>
        </div>

        <!-- about info -->

        <div class="container">
            <div class="row mt-5">
                <div class="col-md-9">
                    <div class="row justify-content-evenly">
                        <div class="col-md-11 ">

                            <h2 class="text-center">OUR LATEST TOURS</h2>
                            <h5 class="text-center text-success"><?php echo $row['title']; ?></h5>
                            <div class="row justify-content-center mt-5">
                                <div class="col-md-11 ">


                                </div>
                            </div>


                            <div class="row justify-content-evenly">

                                <div class="col-md-10">
                                    <p class="fs-4 mt-5 mb-5">
                                        <?php echo $row['short_des']; ?>
                                    </p>

                                    <img src="Upload/Gallery/<?php echo $row['pic_2']; ?>" class="img-fluid" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row justify-content-evenly">
                        <ul class="d-flex justify-content-center mt-5">
                            <li><a href="#discription" class="btn btn-success rounded-pill">DESCRIPTION</a></li>
                            <li><a href="#Photo" class="btn btn-success rounded-pill mx-5">Photo</a></li>
                        </ul>
                        <div class="col-md-11 col-10">
                            <section id="discription">
                                <p class="fs-5"><?php echo $row['short_des'] ?>..</p>

                                <p class="fs-5"><?php echo $row['long_des'] ?>..</p>
                            </section>
                            <section id="Photo">
                                <h2>Gallery</h2>
                                <img src="Upload/Blog/<?php echo $row['pic_1']; ?>" width="315px" class="img-fuild mt-3" alt="" srcset="">
                                <img src="Upload/Blog/<?php echo $row['pic_2']; ?>" width="315px" class="img-fuild mt-3" alt="" srcset="">
                                <img src="Upload/Blog/<?php echo $row['pic_3']; ?>" width="315px" class="img-fuild mt-3" alt="" srcset="">
                                <img src="Upload/Blog/<?php echo $row['pic_4']; ?>" width="315px" class="img-fuild mt-3" alt="" srcset="">
                            </section>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 mt-5">
                            <h2 class="mb-5">Comment</h2>
                            <div class="row">
                                <?php
                                $IDS = $_GET['id'];

                                $select = "SELECT * FROM `Blog` WHERE ID='$IDS'";

                                $result = mysqli_query($con, $select);
                                // mysqli_query($query);

                                while ($row = mysqli_fetch_array($result)) {
                                    $blogertitle = $row['title'];
                                    $blogername = $row['name'];


                                    $select = "SELECT * FROM `comment` WHERE blog_name='$blogername' limit 5";

                                    $result = mysqli_query($con, $select);
                                    // mysqli_query($query);

                                    while ($row = mysqli_fetch_array($result)) {
                                        $comment = $row['comment'];
                                        $name = $row['name'];
                                        $email = $row['email'];
                                        $Date = $row['Date'];
                                        // echo $comment;
                                        // echo "<br/>";
                                        // echo $email;
                                        // echo "<br/>";
                                        // echo $name;
                                    
                                ?>
                                <div class="col-md-9 mb-1 border border-info">
                                    <p> <?php echo $name;  ?> <span class="mx-5"><?php echo $email;  ?></span> </p>
                                    <p><?php echo $comment;  ?></p>
                                    <p><?php echo $Date;  ?></p>
                                </div>
                                <?php
                                }
                            }
                            ?>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p class="text-center">Contact Us For</p>
                    <h1 class="text-center">Packages Info</h1>
                    <?php
                    $IDS = $_GET['id'];
                    $select = "SELECT * FROM `blog` WHERE ID='$IDS'";
                    $result = mysqli_query($con, $select);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <form action="" method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label visually-hidden">blog_title</label>
                                <input type="text" class="form-control visually-hidden" id="exampleFormControlInput1" Value="<?php echo $row['title']; ?>" name="blog_title">
                                <label for="exampleFormControlInput1" class="form-label visually-hidden">Bloger_Name</label>
                                <input type="text" class="form-control visually-hidden" id="exampleFormControlInput1" Value="<?php echo $row['name']; ?>" name="blog_name">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Full Name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Your Comment</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mess" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="send">Submit</button>
                        </form>
                        <?php
                        if (isset($_POST['send'])) {
                            $blog_title = $_POST['blog_title'];
                            $blog_name = $_POST['blog_name'];
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $mess = $_POST['mess'];

                            $insert = "INSERT INTO `comment`( blog_title, blog_name, name, email, comment) VALUES ('$blog_title','$blog_name','$name','$email','$mess')";

                            $query = mysqli_query($con, $insert);

                            if ($query) {
                        ?>
                                <script>
                                    alert("data insert Successlly");
                                </script>
                            <?php
                            } else {
                            ?>
                                <script>
                                    alert("data insert Un-Successlly");
                                </script>
                    <?php
                            }
                        }
                    }
                    ?>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <img src="Upload/Gallery/<?php echo $row['pic_3']; ?>" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <h3 class="mt-3">Best Packages</h3>
                        <hr>
                        <?php
                        $selectpackage = "select * from pakages LIMIT  4";

                        $querypack = mysqli_query($con, $selectpackage);

                        while ($row = mysqli_fetch_array($querypack)) {


                        ?>

                            <div class="col-md-10 col-9 text-center">

                                <img src="Upload/Gallery/<?php echo $row['pic_1']; ?>" class="img-fluid" alt="">
                                <h5><?php echo $row['Continents'] ?></h5>
                                <p><i class="bi bi-geo-alt"></i><?php echo $row['Country'] ?></p>
                                <a href="show_package.php?id=<?php echo $row['ID'] ?>" class="h6 mb-5 btn btn-primary rounded-pill"> View More</a>
                            </div>
                        <?php  } ?>
                    </div>

                </div>
            </div>
            <div class="row justify-content-center mt-5 mb-3">
                <div class="col-md-3 col-9 text-center">
                    <i class="bi bi-geo-alt h2"></i>
                    <h3>World Tour</h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adip iscing elit Proin rhonc us urna dictum.</p>
                    <a href="" class="h6 mb-5"> View More</a>
                </div>

                <div class="col-md-3 col-9 text-center">
                    <i class="bi bi-airplane h2"></i>
                    <h3>Plan</h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adip iscing elit Proin rhonc us urna dictum.</p>
                    <a href="" class="h6 mb-5"> View More</a>
                </div>

                <div class="col-md-3 col-9 text-center">
                    <i class="bi bi-building h2"></i>
                    <h3>Best Tours</h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adip iscing elit Proin rhonc us urna dictum.</p>
                    <a href="" class="h6 mb-5"> View More</a>
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
                    <a href="package.php" class="btn btn-light"> View All Packages </a>
                    <p class="text-white h3 mt-3"><a href="" class="card-text one btn btn-primary ">View Destination</a>
                    </p>

                </div>
            </div>
        </section>

    <?php } ?>
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