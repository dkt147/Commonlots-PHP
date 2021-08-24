<?php
ob_start();
if (isset($_POST['edit'])) {


    echo $desc = $_POST['desc'];
    echo $price = $_POST['price'];
    echo $image = $_POST['file'];
    echo $eid = $_POST['id'];

 $con = mysqli_connect("markg18140.domaincommysql.com", "real_state", "2439123Mm!", "real_state") or die("Query Failed!!!");
   
        echo $query = "UPDATE `land` SET `Description`='$desc',`Price`='$price' WHERE Id = $eid";
        $res = mysqli_query($con, $query);
    header("Location: http://www.commonlots.net/dashboard.php");
        mysqli_close($con);
   
}
ob_flush();
?>