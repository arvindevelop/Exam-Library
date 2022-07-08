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
        body
        {
            background:white;
        }
        .head {
            text-align: center;
            color: red;
        }
        .about
        {
            background-color:#f1f1f1;
            padding:7%;
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
        .intro a
        {
            text-decoration:none;
        }
    </style>
</head>

<body>

    <!--navbar-->
    <div id="nav">
        <nav class="menubar">
            <div class="left-side">

                <img src="photo/logo.svg" width="90px" height="50px">
            </div>
            <div class="right-side" id="myTopnav">
                <a href="index.php"><b>HOME</b></a>
                <a href="about.php"><b>ABOUT US</b></a>
                <!--<a href="user.php"><b>USERS</b></a>-->
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
    <!--navbar end-->

    <!--About-->
    <div class="about">
            <h1>Exam Library</h1>
            <p id="introduction">Exam Library is established to provide the first-year student with the right guidance by Arvind Kumar Singh in 2021. 
                The contents are prepared in a manner that if anyone uses these materials they
                completely prepared for the exam, they will get all material which is required for preparation.
                It is prepared based on the engineering educational curriculum. Anyone wanted to contribute can contribute at 
                <a href=" https://github.com/arvindevelop" style="text-decoration:none;">our project.</a>
            </p>
    </div>
    <!--About end-->

    <!--intro container-->
    <div class="intro-container">
        <div class="head">
            <br>
            <h1 style="font-family: 'Times New Roman', Times, serif;color:black;">Founder</h2><br>
        </div>
        <div class="image">

            <img src="photo/My_photo.jpg" alt="my_photo" width="300px" height="300px"><br>
        </div>
        <div class="intro">
            <p><b>Arvind Kumar Singh</b><br>
            Email : arvindevelop@gmail.com<br>
            <a href="https://github.com/arvindevelop">Github</a><br>
            <a href="https://www.linkedin.com/in/arvind-kumar-singh-641439201/">LinkedIn</a><br>
            <a href="https://twitter.com/arvindk36055950">Twitter</a><br>
            </p><br>
        </div>
     </div>
     <!--into container end-->

     <!--footer-->
    <?php include 'footer.php';?>
</body>

</html>
