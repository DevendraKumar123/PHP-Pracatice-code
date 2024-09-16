<?php include "config.php"; ?>

<?php
if(isset($_GET['delete'])){
    $sid =$_GET['delete'];
    $sql = "DELETE FROM `employee` WHERE id=$sid";
    $result = mysqli_query($conn,$sql);
    header("Location: index.php");
}
?>