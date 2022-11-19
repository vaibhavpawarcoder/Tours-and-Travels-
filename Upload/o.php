<?php 
include 'dbConfig.php';
$select="select * from login";

$result = mysqli_query($con, $select);
                            // mysqli_query($query);

                            while ($row = mysqli_fetch_array($result)) {
?>
<img src="../admin/<?php echo $row['pic']; ?>" >
<?php
                            }
?>