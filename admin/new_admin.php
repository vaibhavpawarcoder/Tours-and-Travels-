<?php include 'session.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Vaibhav-Tour:-Profile
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">




    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>




    <div class="wrapper">


        <div class="body-overlay"></div>


        <!-- Sidebar  -->
        <?php include 'nav.html'; ?>



        <!-- Page Content  -->
        <div id="content">

            <?php include 'topnavbar.php' ?>


            <div class="main-content">

                <div class="container">
                    <div class="row ">
                        <div class="col-lg-12 col-md-12 p-3">
                            <div class="card p-3" style="min-height: 490px">
                                <h3>Creat New Admin</h3>
                                <form class="row g-3" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                                    <div class="col-md-10">
                                        <label for="validationDefault01" class="form-label">First name</label>
                                        <input type="text" class="form-control" name="name" id="validationDefault01" placeholder="First Name" required>
                                    </div>
                                    <div class="col-md-10">
                                        <label for="validationDefault05" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="validationDefault05" placeholder="Email Id" required>
                                    </div>
                                    <div class="col-md-10">
                                        <label for="validationDefault03" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" id="validationDefault03" required>
                                    </div>


                                    <!-- Third section -->
                                    <div class="col-md-10">
                                        <label for="formFile" class="form-label">Default file input example</label>
                                        <input class="form-control" name="file" type="file" id="formFile">
                                    </div>


                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                            <label class="form-check-label" for="invalidCheck2">
                                                Agree to terms and conditions
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <button class="btn btn-danger" name="register" type="submit">Submit form</button>
                                    </div>
                                </form>

                                <?php
                                include 'DB.php';

                                if (isset($_POST['register'])) {
                                    $First_name = mysqli_real_escape_string($con, $_POST['name']);
                                    $Email = mysqli_real_escape_string($con, $_POST['email']);
                                    $Password = mysqli_real_escape_string($con, $_POST['password']);
                                    $File = $_FILES['file'];

                                    $filename = $File['name'];
                                    $fileerror = $File['error'];
                                    $filetemp = $File['tmp_name'];

                                    $fileext = explode('.', $filename);
                                    $filechk = strtolower(end($fileext));

                                    $fileextstore = array('png', 'jpg', 'jpeg');

                                    if (in_array($filechk, $fileextstore)) {
                                        $destination = 'admin_img/' . $filename;
                                        $destinationd =  $filename;
                                        move_uploaded_file($filetemp, $destination);




                                        //password Safty
                                        $Password_safe = password_hash($Password, PASSWORD_BCRYPT);

                                        //Email varify
                                        $emailquery = "select * from login where email='$Email'";
                                        $emailquerysolve = mysqli_query($con, $emailquery);

                                        $emailcount = mysqli_num_rows($emailquerysolve);

                                        if ($emailcount > 0) {
                                ?>
                                            <script>
                                                alert("Email Alredy Exit");
                                            </script>
                                            <?php
                                        } else {

                                            $insertquery = "INSERT INTO `login`( username, email, password, pic) 
        VALUES ('$First_name','$Email','$Password_safe','$destinationd')";

                                            $result = mysqli_query($con, $insertquery);

                                            if ($result) {
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
                                }
                                ?>

                            </div>
                        </div>

                    </div>
                </div>

                <?php include 'footer.html' ?>

            </div>



        </div>
    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $('.more-button,.body-overlay').on('click', function() {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });

        });
    </script>





</body>

</html>