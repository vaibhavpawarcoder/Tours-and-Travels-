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

                <div class="row ">
                <div class="col-lg-6 col-md-12 ">
                        <div class="card" style="min-height: 485px">
                            <div class="row justify-content-around">
                                <div class="col-md-8 mt-5">
                                    <h4>Packages You Post</h4>
                                    <?php $email = $_SESSION['email'];

                                    $pack_select = "select * from pakages where email='$email'";
                                    $query = mysqli_query($con, $pack_select);
                                    while ($row = mysqli_fetch_array($query)) {
                                        if ($query) {

                                    ?>
                                            <div class="row mt-3">
                                                <div class="col-md-4">
                                                    <img src="../Upload/Gallery/<?php echo $row['pic_1'];  ?>" width="100px" alt="" srcset="">
                                                </div>
                                                <div class="col-md-8">
                                                    <p>Continents:- <?php echo $row['Continents'];  ?></p>
                                                    <p>Country:- <?php echo $row['Country'];  ?></p>
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

                    <div class="col-lg-6 col-md-12 ">
                        <div class="card" style="min-height: 485px">
                            <div class="row justify-content-around">
                                <div class="col-md-8 mt-5">
                                    <h4>Blog You Post</h4>
                                    <?php $email = $_SESSION['email'];

                                    $pack_select = "select * from blog where email='$email'";
                                    $query = mysqli_query($con, $pack_select);
                                    while ($row = mysqli_fetch_array($query)) {
                                        if ($query) {

                                    ?>
                                            <div class="row mt-3">
                                                    <div class="col-md-4">
                                                 <img src="../Upload/Gallery/<?php echo $row['pic_1'];  ?>" width="100px" alt="" srcset="">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p >Continents:- <?php echo $row['title'];  ?></p>
                                                        <p >Country:- <?php echo $row['name'];  ?></p>
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