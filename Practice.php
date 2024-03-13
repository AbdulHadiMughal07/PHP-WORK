<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <div class="row">
            <div class="col-lg-6">
                <form action="" method="POST">
                    <div class="form-grp">
                        <label for="">Username</label>
                        <input type="username" class="form-control" placeholder="Enter Your Name" autocomplete="off" name="username" id="">
                    </div>

                    <div class="form-grp">
                        <label for="">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Your Name" autocomplete="off" name="password" id="">
                    </div>

                    <div class="form-grp">
                        <label for="Cource"><h3>Select Cource</h3></label><br>
                        <input type="radio" name="Cource" value="UI/UX" id="">UI/UX <br> 
                        <input type="radio" name="Cource" value="Graphic" id="">Graphic <br>
                        <input type="radio" name="Cource" value="Web Development" id="">Web Development <br>
                        <input type="radio" name="Cource" value="Softwere Development" id="">Softwere Development <br>
                    </div>

                    <div class="form-grp">
                        <label for="Time"><h3>Select Timing</h3></label><br>
                        <input type="checkbox" name="Time" value="11am To 1pm" id="">11am To 1pm <br> 
                        <input type="checkbox" name="Time" value="3pm To 5pm" id="">3pm To 5pm <br>
                        <input type="checkbox" name="Time" value="5pm To 7pm" id="">5pm To 7pm <br>
                        <input type="checkbox" name="Time" value="7pm To 9pm" id="">7pm To 9pm <br>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-dark mt-3" name="submit" id="">
                </form>
            </div>
            <div class="col-lg-6">
                <?php
                echo "<pre>";
                print_r($_POST);
                echo "</pre>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>