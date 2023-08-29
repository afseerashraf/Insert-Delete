<?php
include 'db.php';
$s_id = $_GET['id'];
$delete = "DELETE FROM STUDENT WHERE STUDENT_ID = '$s_id'";
if( mysqli_query($connection,$delete))
{
    header("Location:display.php");
    exit();
}else{
    echo "Failed to delete";

}

?>