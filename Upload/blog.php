<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>vaibhav tour</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10">

                <form class="row g-3" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                    <div class="col-mb-5">
                        <label for="exampleInputEmail1" class="form-label">Blog_Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
                    </div>
                    <div class="col-mb-5">
                        <label for="exampleInputEmail1" class="form-label">Bloger_Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
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
                        $destination = 'Blog/' . $filename;
                        $destinationd =  $filename;
                        move_uploaded_file($filetemp, $destination);

                        if (in_array($filechk2, $fileextstore2)) {
                            $destination2 = 'Blog/' . $filename2;
                            $destinationd2 =  $filename2;
                            move_uploaded_file($filetemp2, $destination2);

                            if (in_array($filechk3, $fileextstore3)) {
                                $destination3 = 'Blog/' . $filename3;
                                $destinationd3 =  $filename3;
                                move_uploaded_file($filetemp3, $destination3);

                                if (in_array($filechk4, $fileextstore4)) {
                                    $destination4 = 'Blog/' . $filename4;
                                    $destinationd4 =  $filename4;
                                    move_uploaded_file($filetemp4, $destination4);

                                    $insertquery = "INSERT INTO blog( title, name, short_des, long_des, pic_1, pic_2, pic_3, pic_4) VALUES ('$title','$name','$short_des', '$long_des','$destinationd','$destinationd2','$destinationd3','$destinationd4')";

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
            <p></p>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>