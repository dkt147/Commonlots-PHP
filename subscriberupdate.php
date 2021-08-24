<?php
ob_start();
if (isset($_POST['update'])) {

        $name = $_POST['name'];
        $add = $_POST['add'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $eid = $_POST['id'];
    
 $con = mysqli_connect("markg18140.domaincommysql.com", "real_state", "2439123Mm!", "real_state") or die("Query Failed!!!");

        $query = "UPDATE `signup` SET `Name`='$name',`Address`='$add',`City`='$city',`State`='$state',`Zip`='$zip',`Phone`='$phone',`Email`='$email' WHERE Id = $eid";
        $res = mysqli_query($con, $query);
    header("Location: http://www.commonlots.net/subscriberlist.php");
        mysqli_close($con);
      
}
ob_flush();
?>