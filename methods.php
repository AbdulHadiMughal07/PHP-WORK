<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background: black;
            color: white;
        }

        #adm-form{
            background-color: cyan;
            color: black;
            text-align: center;
            padding: 20px;
            font-size: 40px;
            font-weight: bold;
        }

        #mq{
            font-size: 25px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <marquee behavior="" direction="" id="mq">Admission Form</marquee>
    <h2 id="adm-form">Admission Form</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="" method="POST">
                    <div class="form-grp">
                        <lable for"">Username</lable>
                        <input type="username" class="form-control" placeholder="Enter Your Name" autocomplete="off" name="username" id="">
                    </div>

                    <div class="form-grp">
                        <lable for"">Email</lable>
                        <input type="email" class="form-control" placeholder="Enter Your Email" autocomplete="off" name="email" id="">
                    </div>

                    <div class="form-grp">
                        <lable for"">Password</lable>
                        <input type="password" class="form-control" placeholder="Enter Your Password" autocomplete="off" name="password" id="">
                    </div>

                    <div class="form-grp">
                        <lable for"">Select Your Cource</lable><br>
                        <input type="radio" name="Cource" value="UI/UX" id="">UI/UX<br>
                        <input type="radio" name="Cource" value="GRAPHIC" id="">GRAPHIC<br>
                        <input type="radio" name="Cource" value="WEB DEVELOPMENT" id="">WEB DEVELOPMENT<br>
                        <input type="radio" name="Cource" value="SOFTWERE DEVELOPMENT" id="">SOFTWERE DEVELOPMENT<br>
                    </div>

                    <div class="form-grp">
                        <lable for"">Select Your Cource</lable><br>
                        <input type="CheckBox" name="Time" value="11am To 1pm" id="">11am To 1pm<br>
                        <input type="CheckBox" name="Time" value="1pm To 3pm" id="">1pm To 3pm<br>
                        <input type="CheckBox" name="Time" value="3pm To 5pm" id="">3pm To 5pm<br>
                        <input type="CheckBox" name="Time" value="SOFTWERE DEVELOPMENT" id="">5pm To 7pm<br>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-dark mt-3" name="submit">
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