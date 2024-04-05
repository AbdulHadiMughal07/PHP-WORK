<?php

    include("../config/one.php");

    $sql = "select * from employees3";

    $result = mysqli_query($conn , $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <table class="table fw-bold text-white">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

        <?php
            while($rows = mysqli_fetch_assoc($result)){
                echo "<tr>

                <td>".$rows['id']."</td>
                <td>".$rows['name']."</td>
                <td>".$rows['email']."</td>
                <td>".$rows['password']."</td>
                
                <td><img src=\"../images/{$rows['image']}\" height=50px;></td>
                <td><a href='curdupdate.php?id=".$rows['id']."' class='btn btn-success'>Edit <i class='bi bi-pencil-square'>
                </i></a></td>
                <td><a href='curddelete.php?id=".$rows['id']."' class='btn btn-danger'>Delete <i class='bi bi-trash3-fill'>
                </i></a></td>
                </tr>";
            }

        ?>
        </table>
    </div>
</body>
</html>