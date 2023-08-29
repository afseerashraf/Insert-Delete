<?php
include 'db.php';
if (isset($_GET['delete'])) {
    $deleteId = $_GET['delete'];
    $deleteQuery = "DELETE FROM students WHERE student_id = $deleteId";
    mysqli_query($connection, $deleteQuery);
    // Redirect to refresh the page and update the table
    header("Location: display.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <table class="table table-striped">
    <tr>
        <th>Student_id</th>
        <th>name</th>
        <th>phone</th>
        <th>email</th>
        <th>Date of birth</th>
        <th>address</th>
        <th>operation</th>
        



    </tr>
    
        <?php
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
            <td><?php echo $row['student_id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['phone'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['address'];?></td>
            <td><button class="btn btn-outline-danger"><a href="delete.php?id=<?php echo $row['student_id']; ?>" style="text-decoration: none;">Delete</td>

            
            

            
        <?php

        }
        ?>
    </tr>
</table>
<button class="btn-outline-primary shadow p-3 mb-5 bg-body rounded" role="button"><a href="studentform.html"style="text-decoration: none;">Inesert</button>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>