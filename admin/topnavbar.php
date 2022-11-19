

<div class="top-navbar">
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
            <span class="material-icons">arrow_back_ios</span>
        </button>
        
        <a class="navbar-brand" href="#"> <?php  ?> </a>
        
        <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="material-icons">more_vert</span>
        </button>

        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">   
                <li class="dropdown nav-item active">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                       <span class="material-icons">notifications</span>
                       <span class="notification">5</span>
                   </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">You have 5 new messages</a>
                        </li>
                        <li>
                            <a href="#">You're now friend with Mike</a>
                        </li>
                        <li>
                            <a href="#">Wish Mary on her birthday!</a>
                        </li>
                        <li>
                            <a href="#">5 warnings in Server Console</a>
                        </li>
                        <li>
                            <a href="#">5 warnings in Server Console</a>
                        </li>
                      
                    </ul>
                </li>

                <?php
                            $email = $_SESSION['email'];
                            //echo $email;
                            include 'DB.php';
                            $query = "SELECT * FROM login WHERE email = '$email' ";
                            $result = mysqli_query($con, $query);
                            // mysqli_query($query);

                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                <li class="dropdown nav-item active">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                       <span class="material-icons">person</span>
                   </a>
                    <ul class="dropdown-menu">
                        <li>
                        <img src="admin_img/<?php echo $row['pic']; ?>" class="img-fluid" alt="" srcset=""> <a href="#"></a>
                        </li>
                        <li>
                        <a href="#">Name : - <?php echo  $_SESSION['username']; ?></a>
                        </li>
                        <li>
                        <a href="#">email : - <?php echo  $_SESSION['email']; ?></a>
                        </li>
                        <li>
                            <a href="profile.php" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal"> Edit Profile</a>
                        </li>
                        <li>
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Log-Out</a>
                        </li>
                      
                    </ul>
                </li>
                <?php } ?>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">
                    <span class="material-icons">apps</span>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">
                    <span class="material-icons">settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Ready To Log-Out</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form action="logout.php" method="post">
<button class="btn btn-primary" name="logout">Log-Out</button>
</form>
</div>
<div class="modal-footer">
<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary">Save changes</button> -->
</div>
</div>
</div>
</div>