<?php
include('./connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displaying Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center my-3">User Data</h1>
    <div class="container">
        <div class="table-responsive">
            <table class="table bordered">
                <thead class="table-primary">
                    <th>Sr. no</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Operations</th>

                </thead>
                <tbody>
                    <?php
                    $sql = "select * from `seriescrud`";
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $fname =  $row['fname'];
                        $lname =  $row['lname'];
                        $email =  $row['email'];
                        $mobile =  $row['mobile'];
                        echo '
                    <tr>
                        <td>' . $id . '</td>
                        <td>' . $fname . '</td>
                        <td>' . $lname . '</td>
                        <td>' . $email . '</td>
                        <td>' . $mobile . '</td>
                        <td><a href="update.php?updateid=' . $id . '" class="btn btn-success">Update</a>
                        <a href="delete.php?deleteid=' . $id . '" class="btn btn-danger">Delete</a></td>
                    </tr>
                    ';
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>