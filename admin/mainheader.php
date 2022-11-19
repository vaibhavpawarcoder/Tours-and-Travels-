<div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-warning">
                                    <span class="material-icons">equalizer</span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Packages</strong></p>
                                <h3 class="card-title">
                                <?php 
                                    include 'DB.php';
                                    $email=$_SESSION['email'] ;
                                    $result=mysqli_query($con,"SELECT count(email) as email from pakages ");
                                    $data=mysqli_fetch_assoc($result);
                                    if($data >0){
                                        echo $data['email'];
                                    }else{
                                        echo "0";
                                    }
                                    
                                    ?>
                                </h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons text-info">info</i>
                                    <a href="#pablo">See detailed report</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                    
                    <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-rose">
                                    <span class="material-icons">shopping_cart</span>

                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Blog</strong></p>
                                <h3 class="card-title">
                                <h3 class="card-title">
                                <?php 
                                    include 'DB.php';
                                    $email=$_SESSION['email'] ;
                                    $result=mysqli_query($con,"SELECT count(email) as email from blog ");
                                    $data=mysqli_fetch_assoc($result);
                                    if($data >0){
                                        echo $data['email'];
                                    }else{
                                        echo "0";
                                    }
                                    
                                    ?>
                                </h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">local_offer</i> Product-wise sales
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                    
                    <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-success">
                                    <span class="material-icons">
                                        follow_the_signs
                                    </span>

                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>inquery</strong></p>
                                <h3 class="card-title">
                                <h3 class="card-title">
                                <?php 
                                    include 'DB.php';
                                    $email=$_SESSION['email'] ;
                                    $result=mysqli_query($con,"SELECT count(email) as email from inquery ");
                                    $data=mysqli_fetch_assoc($result);
                                    if($data >0){
                                        echo $data['email'];
                                    }else{
                                        echo "0";
                                    }
                                    
                                    ?>
                                </h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">date_range</i> Weekly sales
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-info">

                                    <span class="material-icons">
                                    attach_money 
                                    </span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>My Blog / Packages</strong></p>
                                <h3 class="card-title">
                                <?php 
                                    $email=$_SESSION['email'] ;
                                    $result=mysqli_query($con,"SELECT count(email) as email from blog where email='$email'");
                                    $data=mysqli_fetch_assoc($result);
                                    if($data >0){
                                        echo $data['email'];
                                    }else{
                                        echo "0";
                                    }
                                   echo "/"; 
                                   
                                     $email=$_SESSION['email'] ;
                                    $result=mysqli_query($con,"SELECT count(email) as email from pakages where email='$email' ");
                                    $data=mysqli_fetch_assoc($result);
                                    if($data >0){
                                        echo $data['email'];
                                    }else{
                                        echo "0";
                                    }
                                    
                                    ?>
                                </h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">update</i> Just Updated
                                </div>
                            </div>
                        </div>
                    </div>
                </div>