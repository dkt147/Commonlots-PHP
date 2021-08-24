<?php
ob_start();
if (isset($_GET['id'])) {

    $did = $_GET['id'];

 $con = mysqli_connect("markg18140.domaincommysql.com", "real_state", "2439123Mm!", "real_state") or die("Query Failed!!!");
          
    $query = "DELETE FROM `land` WHERE Id = $did";
    $res = mysqli_query($con, $query);
    header("Location: http://www.commonlots.net/dashboard.php");
    mysqli_close($con);
}

ob_flush();
?>
