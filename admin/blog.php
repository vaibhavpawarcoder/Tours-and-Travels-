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
                    <div class="col-lg-7 col-md-12">
                        <div class="card" style="min-height: 550px">
                        
                        <h3 class="text-center mt-2">Post The Blog</h3>
                            <div class="col-md-10 pt-3 pb-5">
                                <form class="row g-3" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                                    <div class="col-mb-5">
                                        <label for="exampleInputEmail1" class="form-label">Blog_Title</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
                                    </div>
                                    <div class="col-mb-5">
                                        <label for="exampleInputEmail1" class="form-label">Bloger_Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="<?php echo $_SESSION['username'];  ?>" readonly>
                                    </div>
                                    <div class="col-mb-5">
                                        <label for="exampleInputEmail1" class="form-label">Bloger_email</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $_SESSION['email'];  ?>" readonly>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="formFile" class="form-label">Default file input example</label>
                                        <input class="form-control" name="file" type="file" id="formFile">
                                    </div>
                                    <div class="col-md-5">
                                        <label for="validationCustom03" class="form-label">Photo</label>
                                        <input type="File" class="form-control" id="validationCustom03" name="file2" required>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="formFile" class="form-label">Default file input example</label>
                                        <input class="form-control" name="file3" type="file" id="formFile">
                                    </div>
                                    <div class="col-md-5">
                                        <label for="validationCustom03" class="form-label">Photo</label>
                                        <input type="File" class="form-control" id="validationCustom03" name="file4" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Short Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="short_des"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Long Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="13" name="long_des"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </form>
                                <?php
                                include 'DB.php';

                                if (isset($_POST['submit'])) {
                                    $title = mysqli_real_escape_string($con, $_POST['title']);
                                    $name = mysqli_real_escape_string($con, $_POST['name']);
                                    $email = mysqli_real_escape_string($con, $_POST['email']);
                                    $short_des = mysqli_real_escape_string($con, $_POST['short_des']);

                                    $long_des = mysqli_real_escape_string($con, $_POST['long_des']);


                                    $File = $_FILES['file'];

                                    $filename = $File['name'];
                                    $fileerror = $File['error'];
                                    $filetemp = $File['tmp_name'];

                                    $fileext = explode('.', $filename);
                                    $filechk = strtolower(end($fileext));

                                    $fileextstore = array('png', 'jpg', 'jpeg');


                                    $File2 = $_FILES['file2'];

                                    $filename2 = $File2['name'];
                                    $fileerror2 = $File2['error'];
                                    $filetemp2 = $File2['tmp_name'];

                                    $fileext2 = explode('.', $filename2);
                                    $filechk2 = strtolower(end($fileext2));

                                    $fileextstore2 = array('png', 'jpg', 'jpeg');

                                    $File3 = $_FILES['file3'];

                                    $filename3 = $File3['name'];
                                    $fileerror3 = $File3['error'];
                                    $filetemp3 = $File3['tmp_name'];

                                    $fileext3 = explode('.', $filename3);
                                    $filechk3 = strtolower(end($fileext3));

                                    $fileextstore3 = array('png', 'jpg', 'jpeg');

                                    $File4 = $_FILES['file4'];

                                    $filename4 = $File4['name'];
                                    $fileerror4 = $File4['error'];
                                    $filetemp4 = $File4['tmp_name'];

                                    $fileext4 = explode('.', $filename4);
                                    $filechk4 = strtolower(end($fileext4));

                                    $fileextstore4 = array('png', 'jpg', 'jpeg');

                                    if (in_array($filechk, $fileextstore)) {
                                        $destination = '../Upload/Blog' . $filename;
                                        $destinationd =  $filename;
                                        move_uploaded_file($filetemp, $destination);

                                        if (in_array($filechk2, $fileextstore2)) {
                                            $destination2 = '../Upload/Blog' . $filename2;
                                            $destinationd2 =  $filename2;
                                            move_uploaded_file($filetemp2, $destination2);

                                            if (in_array($filechk3, $fileextstore3)) {
                                                $destination3 = '../Upload/Blog' . $filename3;
                                                $destinationd3 =  $filename3;
                                                move_uploaded_file($filetemp3, $destination3);

                                                if (in_array($filechk4, $fileextstore4)) {
                                                    $destination4 = '../Upload/Blog' . $filename4;
                                                    $destinationd4 =  $filename4;
                                                    move_uploaded_file($filetemp4, $destination4);

                                                    $insertquery = "INSERT INTO blog( title, name, email, short_des, long_des, pic_1, pic_2, pic_3, pic_4) VALUES ('$title','$name','$email','$short_des', '$long_des','$destinationd','$destinationd2','$destinationd3','$destinationd4')";

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
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12 ">
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