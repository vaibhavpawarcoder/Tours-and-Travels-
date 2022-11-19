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
                        <div class="col-lg-12 col-md-12">
                            <div class="card" style="min-height: 490px">
                                <div class="row justify-content-evenly pt-5">
                                    <div class="col-md-11">
                                        <form class="row gy-2 gx-3 justify-content-evenly" method="POST">
                                            <div class="col-md-4">
                                                <?php
                                                $query = "SELECT DISTINCT(Tour) FROM inquery";
                                                $result = $con->query($query);
                                                if ($result->num_rows > 0) {
                                                    $Tour = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                }


                                                ?>
                                                <label class="" for="autoSizingInput">Tour</label>
                                                <select class="form-select" id="autoSizingSelect" name="Tour" require>
                                                    <option selected disabled value="">Choose...</option>
                                                    <?php
                                                    foreach ($Tour as $Tour) {
                                                    ?>
                                                        <option value="<?php echo $Tour['Tour']; ?>"><?php echo $Tour['Tour']; ?> </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <button type="submit" name="submit" class="btn btn-primary rounded-pill  mt-4">View</button>
                                            </div>

                                            <div class="row text-center justify-content-evenly mt-5">

                                            </div>
                                        </form>

                                        <h2 class="p-5 text-center">All Inquery Report</h2>
                                        <button onclick="exportTableToExcel('tblData')" class="btn bg-primary text-white m-3">Export Data To Excel File</button>

                                        <div class="table-responsive">
                                            <table class="table p-3" id="tblData">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Tour</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Mobile</th>
                                                        <th scope="col">Guest</th>
                                                        <th scope="col">Message</th>
                                                        <th scope="col">Date</th>
                                                    </tr>



                                                    <?php
                                                    include 'DB.php';
                                                    if (isset($_POST['submit'])) {
                                                        $Tour = $_POST['Tour'];
                                                        $email = $_SESSION['email'];
                                                        $query = "select * from inquery where Tour = '$Tour'";
                                                        $show = mysqli_query($con, $query);

                                                        $result = mysqli_num_rows($show);

                                                        while ($row = mysqli_fetch_array($show)) {
                                                            if ($show) {


                                                    ?>

                                                                <tr>
                                                                    <td><?php echo $row['ID'] ?></td>
                                                                    <td><?php echo $row['Tour'] ?></td>
                                                                    <td><?php echo $row['Name'] ?></td>
                                                                    <td><?php echo $row['email'] ?></td>
                                                                    <td><?php echo $row['mobile'] ?></td>
                                                                    <td><?php echo $row['guest'] ?></td>
                                                                    <td><?php echo $row['mess'] ?></td>
                                                                    <td><?php echo $row['Date'] ?></td>
                                                                </tr>
                                                            <?php
                                                            } else {
                                                                echo "No Request";
                                                            }
                                                        }
                                                    } else {
                                                        $email = $_SESSION['email'];
                                                        $query = "select * from inquery ";
                                                        $show = mysqli_query($con, $query);

                                                        $result = mysqli_num_rows($show);

                                                        while ($row = mysqli_fetch_array($show)) {
                                                            if ($show) {
                                                            ?>

                                                                <tr>
                                                                    <td><?php echo $row['ID'] ?></td>
                                                                    <td><?php echo $row['Tour'] ?></td>
                                                                    <td><?php echo $row['Name'] ?></td>
                                                                    <td><?php echo $row['email'] ?></td>
                                                                    <td><?php echo $row['mobile'] ?></td>
                                                                    <td><?php echo $row['guest'] ?></td>
                                                                    <td><?php echo $row['mess'] ?></td>
                                                                    <td><?php echo $row['Date'] ?></td>
                                                                </tr>
                                                    <?php
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
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