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
                        <?php 
                        include 'DB.php';
                        $ids = $_GET['ids'];
                        $select="select * from pakages where ID='$ids'";
                        $query=mysqli_query($con, $select);
                        while($row=mysqli_fetch_array($query)){

                        
                        ?>
                        
                        <h3 class="text-center mt-2">Post The Blog</h3>
                            <div class="col-md-10 pt-3 pb-5">
                                <form class="row g-3" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                                <div class="col-mb-5">
                                        <label for="exampleInputEmail1" class="form-label">Package_ID</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ID" value="<?php echo $row['ID']; ?>">
                                    </div>
                                    <div class="col-mb-5">
                                        <label for="exampleInputEmail1" class="form-label">Package_Continents</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Continents" value="<?php echo $row['Continents']; ?>">
                                    </div>
                                    <div class="col-mb-5">
                                        <label for="exampleInputEmail1" class="form-label">Package_Country</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Country" value="<?php echo $row['Country']; ?>" >
                                    </div>
                                    <div class="col-mb-5">
                                        <label for="exampleInputEmail1" class="form-label">Min_Age</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Min_Age" value="<?php echo $row['Min_Age']; ?>" >
                                    </div>

                                    <div class="col-mb-5">
                                        <label for="exampleInputEmail1" class="form-label">Diff</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Diff" value="<?php echo $row['Diff']; ?>">
                                    </div>
                                    <div class="col-mb-5">
                                        <label for="exampleInputEmail1" class="form-label">Package_Type</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Type" value="<?php echo $row['Type']; ?>" >
                                    </div>
                                    <div class="col-mb-5">
                                        <label for="exampleInputEmail1" class="form-label">Days</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Days" value="<?php echo $row['Days']; ?>" >
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </form>
                                <?php }?>
                                <?php
                                include 'DB.php';

                                if (isset($_POST['submit'])) {
                                    $ID_S=$_POST['ID'];
                                    $Continents = mysqli_real_escape_string($con, $_POST['Continents']);
                                    $Country = mysqli_real_escape_string($con, $_POST['Country']);
                                    $Min_Age = mysqli_real_escape_string($con, $_POST['Min_Age']);
                                    $Diff = mysqli_real_escape_string($con, $_POST['Diff']);
                                    $Type = mysqli_real_escape_string($con, $_POST['Type']);
                                    $Days = mysqli_real_escape_string($con, $_POST['Days']);


                                    // $File = $_FILES['file'];

                                    // $filename = $File['name'];
                                    // $fileerror = $File['error'];
                                    // $filetemp = $File['tmp_name'];

                                    // $fileext = explode('.', $filename);
                                    // $filechk = strtolower(end($fileext));

                                    // $fileextstore = array('png', 'jpg', 'jpeg');


                                    // $File2 = $_FILES['file2'];

                                    // $filename2 = $File2['name'];
                                    // $fileerror2 = $File2['error'];
                                    // $filetemp2 = $File2['tmp_name'];

                                    // $fileext2 = explode('.', $filename2);
                                    // $filechk2 = strtolower(end($fileext2));

                                    // $fileextstore2 = array('png', 'jpg', 'jpeg');

                                    // $File3 = $_FILES['file3'];

                                    // $filename3 = $File3['name'];
                                    // $fileerror3 = $File3['error'];
                                    // $filetemp3 = $File3['tmp_name'];

                                    // $fileext3 = explode('.', $filename3);
                                    // $filechk3 = strtolower(end($fileext3));

                                    // $fileextstore3 = array('png', 'jpg', 'jpeg');

                                    // $File4 = $_FILES['file4'];

                                    // $filename4 = $File4['name'];
                                    // $fileerror4 = $File4['error'];
                                    // $filetemp4 = $File4['tmp_name'];

                                    // $fileext4 = explode('.', $filename4);
                                    // $filechk4 = strtolower(end($fileext4));

                                    // $fileextstore4 = array('png', 'jpg', 'jpeg');

                                    // if (in_array($filechk, $fileextstore)) {
                                    //     $destination = '../Upload/Blog' . $filename;
                                    //     $destinationd =  $filename;
                                    //     move_uploaded_file($filetemp, $destination);

                                    //     if (in_array($filechk2, $fileextstore2)) {
                                    //         $destination2 = '../Upload/Blog' . $filename2;
                                    //         $destinationd2 =  $filename2;
                                    //         move_uploaded_file($filetemp2, $destination2);

                                    //         if (in_array($filechk3, $fileextstore3)) {
                                    //             $destination3 = '../Upload/Blog' . $filename3;
                                    //             $destinationd3 =  $filename3;
                                    //             move_uploaded_file($filetemp3, $destination3);

                                    //             if (in_array($filechk4, $fileextstore4)) {
                                    //                 $destination4 = '../Upload/Blog' . $filename4;
                                    //                 $destinationd4 =  $filename4;
                                    //                 move_uploaded_file($filetemp4, $destination4);

                                                    // $insertquery = "INSERT INTO blog( title, name, email, short_des, long_des, pic_1, pic_2, pic_3, pic_4) VALUES ('$title','$name','$email','$short_des', '$long_des','$destinationd','$destinationd2','$destinationd3','$destinationd4')";

                                                    $update="UPDATE pakages SET Continents='$Continents',Country='$Country',Min_Age='$Min_Age',Diff='$Diff',Type='$Type',Days='$Days' WHERE ID='$ID_S'";

                                                    $result = mysqli_query($con, $update);

                                                    if ($result) {
                                ?>
                                                        <script>
                                                            alert("data Update Successlly");
                                                            window.location.href = "package-view.php";
                                                        </script>
                                                    <?php
                                                    
                                                    } else {
                                                    ?>
                                                        <script>
                                                            alert("data Update Un-Successlly");
                                                        </script>
                                <?php

                                                    }
                                                }
                                //             }
                                //         }
                                //     }
                                // }
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