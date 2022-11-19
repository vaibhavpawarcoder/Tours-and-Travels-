<?php session_start();
if (!$_SESSION['email']) {
    header("Location:login.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vaibhav Tour</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    
<?php
                            $email = $_SESSION['email'];
                            //echo $email;
                            include 'dbConfig.php';
                            $query = "SELECT * FROM login WHERE email = '$email' ";
                            $result = mysqli_query($con, $query);
                            // mysqli_query($query);

                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <div class="row justify-content-center">
                                    <div class="col-md-10 mt-5 ">
                                        <h3>Administrator Details</h3>
                                        <h5> Name : <?php echo $row['username']; ?> </h5>
                                        <h5> Email : <?php echo $row['email']; ?> </h5>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <div class="card" style="min-height: 485px">
                            <div class="row justify-content-center">
                                <div class="col-md-10 mt-5">
                                    <img src="../admin/<?php echo $row['pic']; ?>" class="img-fluid" alt="" srcset="">
                                </div>
                            </div>

                        </div>
                    </div>
                <?php
                            }
                ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>