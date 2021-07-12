<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/join.css">
    <title>About me</title>
    <style>
        * {
            font-family: 'Lexend Mega', sans-serif;
        }

        .head {
            text-align: center;
            color: red;
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-radius: 10px;
        }

        .intro {
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="nav">
        <nav class="menubar">
            <div class="left-side">

                <img src="photo/logo.svg" width="90px" height="50px">
            </div>
            <div class="right-side" id="myTopnav">
                <a href="index.php"><b>Home</b></a>
                <a href="about.php"><b>About us</b></a>
                <a href="user.php"><b>Users</b></a>
                    <?php
                    session_start();

                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true')
                    {
                        $name = $_SESSION['first_name'];
                        //echo "<a href='user.php?id=".$_SESSION["first_name"]."'><b> $name </b></a>";
                        echo "<a href='#'><b> $name </b></a>";
                    }
                    else
                    {
                        ?>
                        <a href="register.php"><b>LOGIN/SIGN UP</b></a>
                    <?php
                    }
                    ?>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </nav>
    </div>
    <header class="whole_body">
        <div class="head">
            <br>
            <h1 style="font-family: 'Times New Roman', Times, serif;">FOUNDER</h1><br>
        </div>
        <div class="image">

            <img src="photo/My_photo.jpg" alt="my_photo" width="300px" height="300px"><br>
        </div>
        <div class="intro">
            <p>Arvind Kumar Singh<br>
            Email : arvindevelop@gmail.com<br>
            <a style="text-decoration: none;" href="https://github.com/arvindevelop">Github</a>
                <br>
            <a style="text-decoration: none;"
                    href="https://www.linkedin.com/in/arvind-kumar-singh-641439201/">LinkedIn</a>
            </p><br>
            <!--<p>I am pursuing B.Tech
                in<br> Computer Science and Engineering from<br> National Institute of Technology, Sikkim.</p>-->
        </div>
    </header>
    <footer style=" 

    bottom:0;
    width:100%;
    height:50px;   
    background:#000;
    color: wheat;
    text-align: center;
    ">
        <p style="margin-top: 20px;"> Copyright &copy <a style="text-decoration:none; color: orangered;" href="#">Exam-Library</a> All Rights Reserved | Contact Us: +91 7631353674</p>
    </footer>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "right-side") {
                x.className += " responsive";
            } else {
                x.className = "right-side";
            }
        }
    </script>
</body>

</html>