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

    <div class="banner-contact-image w-100 vh-20 d-flex justify-content-center align-items-center p-5">
        <div class="content text-center p-5">
            <h1 class="text-success p-5">Blog</h1>
        </div>
    </div>

    <!-- about info -->

    <div class="container">
        <div class="row mt-5 mb-5">

            <?php
            include 'DB.php';
            ?>
            <?php
            $blogselect = "select * from Blog Limit 6";
            $blogquery = mysqli_query($con, $blogselect);
            while ($row = mysqli_fetch_array($blogquery)) {


            ?>

                <div class="col-md-6 mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="Upload/Blog/<?php echo $row['pic_1']; ?>" class="img-fluid" alt="" srcset="">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['title']; ?></h5>
                                <p class="card-title"><?php echo $row['name']; ?></p>
                                <?php
                                $string=$row['short_des'];
                                if (strlen($string) > 100)
                                $new_string = substr($string, 0, 100) . '!!!';
                                ?>
                                <p class="card-text" ><?php echo $new_string; ?>.</p>
                                <a href="blog_page.php?id=<?php echo $row['ID']; ?>" class="btn btn-primary rounded-pill"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php  } ?>
        </div>

        

    </div>



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