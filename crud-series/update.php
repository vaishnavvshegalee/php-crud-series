<?php
include('connect.php');
$id = $_GET['updateid'];

$sql = "Select * from `seriescrud` where id = '$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$fname = $row['fname'];
$lname = $row['lname'];
$email = $row['email'];
$mobile = $row['mobile'];

if (isset($_POST['update'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $sqlupdate = "update `seriescrud` set fname='$fname',lname='$lname',email='$email',mobile='$mobile' where id='$id'";
    $res = mysqli_query($con, $sqlupdate);
    if ($res) {
        header('location:read.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container my-3 w-50">
        <h1 class="text-center">Update Data</h1>
        <form action="" method="post" class="form-group ">
            <input type="text" name="fname" placeholder="Firstname" class="form-control my-3" value=<?php echo $fname ?> autocomplete="off">
            <input type="text" name="lname" placeholder="Lastname" class="form-control my-3" value=<?php echo $lname ?> autocomplete="off">
            <input type="text" name="email" placeholder="Email" class="form-control my-3" value=<?php echo $email ?> autocomplete="off">
            <input type="text" name="mobile" placeholder="Mobile" class="form-control my-3" value=<?php echo $mobile ?> autocomplete="off">
            <button class="btn btn-dark" type="submit" name="update">Update</button>
        </form>
    </div>
</body>

</html>