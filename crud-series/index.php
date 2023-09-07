<?php
include('connect.php');
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // insert query
    $sql = "insert into `seriescrud` (fname,lname,email,mobile) values ('$fname','$lname','$email','$mobile')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        //    after submiting form redirected to read.php file
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
    <title>PHP Crud Series</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container w-50">
        <h2 class="text-center my-4">Registration form</h2>
        <form action="" method="post" class="form-group">
            <input type="text" name="fname" class="form-control `my-3`" placeholder="Enter Firstname" autocomplete="off">
            <input type="text" name="lname" class="form-control my-3" placeholder="Enter Lastname">
            <input type="email" name="email" class="form-control my-3" placeholder="Enter Email">
            <input type="text" name="mobile" class="form-control my-3" placeholder="Enter Mobile">
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
            <button class="btn btn-primary" type="reset" name="reset">Reset</button>
        </form>
    </div>
</body>

</html>