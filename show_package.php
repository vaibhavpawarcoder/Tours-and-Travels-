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

    $select = "SELECT * FROM `pakages` WHERE ID='$IDS'";

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
                <h1 class="text-success p-5"><?php echo $row['Country']; ?></h1>
                <p class="d-flex justify-content-around">
                    <span class="fs-3"><i class="bi bi-geo-alt"></i><?php echo $row['Continents']; ?></span>
                    <span class="fs-3"><i class="bi bi-life-preserver"></i><?php echo $row['Days']; ?></span>
                </p>
            </div>
        </div>

        <!-- about info -->

        <div class="container">
            <div class="row mt-5">
                <div class="col-md-9">
                    <div class="row justify-content-evenly">
                        <div class="col-md-11 ">

                            <h2 class="text-center">OUR PACKAGES</h2>
                            <h6 class="text-center">PROMOTIONS</h6>
                            <h5 class="text-center text-success"><?php echo $row['Country']; ?></h5>
                            <div class="row justify-content-center mt-5">
                                <div class="col-md-11 ">
                                    <div class="row justify-content-evenly">
                                        <div class="col-md-4">
                                            <span class="d-flex justify-content-center"><i class="bi bi-asterisk"></i></span>
                                            <p class="d-flex justify-content-center">
                                                <span class="h6">Type :- </span>
                                                <span><?php echo $row['Type']; ?></span>
                                            </p>
                                        </div>


                                        <div class="col-md-4">
                                            <span class="d-flex justify-content-center"><i class="bi bi-battery-charging"></i></span>
                                            <p class="d-flex justify-content-center">
                                                <span class="h6">DIFFICULTY :- </span>

                                                <span><?php echo $row['Diff']; ?></span>
                                            </p>
                                        </div>

                                        <div class="col-md-4">
                                            <span class="d-flex justify-content-center"><i class="bi bi-box2"></i></span>
                                            <p class="d-flex justify-content-center">
                                                <span class="h6">MIN. AGE :- </span>
                                                <span><?php echo $row['Min_Age']; ?></span>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="row justify-content-evenly">

                                <div class="col-md-10">
                                    <img src="Upload/Gallery/<?php echo $row['pic_1']; ?>" class="img-fluid" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row justify-content-evenly">
                        <ul class="d-flex justify-content-center mt-5">
                            <li><a href="#discription" class="btn btn-success rounded-pill">DESCRIPTION</a></li>
                            <li><a href="#Program" class="btn btn-success rounded-pill mx-5">Program</a></li>
                            <li><a href="#Photo" class="btn btn-success rounded-pill ">Photo</a></li>
                        </ul>
                        <div class="col-md-11 col-10">
                            <section id="discription">
                                <h2>Amazing Experience</h2>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus delectus modi voluptate ab explicabo architecto voluptatem asperiores saepe exercitationem laborum aperiam, magni molestias quisquam quod quos placeat et sint perferendis iure voluptas nostrum aliquid. Nam praesentium fuga ipsa libero eius officiis autem sunt nulla molestiae dicta? Id beatae, ducimus, ullam, ipsum quibusdam fuga incidunt repellendus harum assumenda cum dicta! Nobis aperiam ratione eum suscipit animi illum libero reiciendis blanditiis iste, itaque repudiandae fuga iure tenetur mollitia quae. Nam veniam asperiores tempore? Eius odit maiores cumque corrupti ab nesciunt, dolorem est accusamus quia molestiae distinctio? Aut praesentium saepe obcaecati alias aliquid.</p>

                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam molestias atque aperiam harum maxime omnis maiores! Eaque, repudiandae amet magni ea odit id eos sequi totam animi ad ducimus ratione voluptatum aperiam dolorem, minima eius quae nemo maxime impedit cupiditate corporis. Ex possimus ullam esse, inventore deleniti optio at nam provident hic aliquam libero consequatur ratione dolorum accusamus, assumenda dolor voluptatibus magni rem facilis ab. Tempore magni optio eligendi fugit recusandae deleniti, amet nostrum quod aliquam laudantium rerum blanditiis reprehenderit!</p>
                            </section>

                            <section id="Program">
                                <h2>Program</h2>
                                <hr>
                                <span>
                                    <p> <span class="fs-4"> Entrance to the museums :-</span> <span>50% discount on all admissions</span></p>
                                    <p> <span class="fs-4"> Travel with children and pets :-</span> <span>Possibility to rent the stroller</span></p>
                                    <p> <span class="fs-4"> Travel by bus, car and minivan :- </span> <span>Air conditioning guaranteed</span></p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut venenatis lorem. Nunc sodales interdum rhoncus. Nulla a leo finibus, ullamcorper lorem vel, scelerisque massa. Vivamus leo dui, interdum non fermentum eget, laoreet ac lorem. Aliquam a ultricies nisl. Nulla consequat lobortis urna sed cursus. ipsum dolor sit amet, consectetur adipiscing elit consectef lorem vel, scelerisque massa. Vivamus leo dui, interdum non.
                                    </p>
                                </span>
                            </section>

                            <section id="Photo">
                                <h2>Gallery</h2>
                                <img src="Upload/Gallery/<?php echo $row['pic_1']; ?>" width="315px" class="img-fuild mt-3" alt="" srcset="">
                                <img src="Upload/Gallery/<?php echo $row['pic_2']; ?>" width="315px" class="img-fuild mt-3" alt="" srcset="">
                                <img src="Upload/Gallery/<?php echo $row['pic_3']; ?>" width="315px" class="img-fuild mt-3" alt="" srcset="">
                                <img src="Upload/Gallery/<?php echo $row['pic_4']; ?>" width="315px" class="img-fuild mt-3" alt="" srcset="">
                            </section>


                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p class="text-center">Contact Us For</p>
                    <h1 class="text-center">Packages Info</h1>
                    <?php
                    $IDS = $_GET['id'];
                    $select = "SELECT * FROM `pakages` WHERE ID='$IDS'";
                    $result = mysqli_query($con, $select);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tour</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" Value="<?php echo $row['Continents'];?>_<?php echo $row['Country'];?>" name="tour" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Full Name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Mobile</label>
                                <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="Your Mobile Number" name="mobile">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Guest</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Number Of Guest" name="guest">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mess"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="send">Submit</button>
                        </form>
                    <?php
                    if(isset($_POST['send'])){
                        $tour=$_POST['tour'];
                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $mobile=$_POST['mobile'];
                        $guest=$_POST['guest'];
                        $mess=$_POST['mess'];

                        $insert="INSERT INTO `inquery`( Tour, Name, email, mobile, guest, mess) VALUES ('$tour','$name','$email','$mobile','$guest','$mess')";

                        $query=mysqli_query($con, $insert);

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
                        $selectpackage = "select * from pakages LIMIT  3";

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