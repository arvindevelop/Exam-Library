<!DOCTYPE html>
<html lang="en">

<?php include 'header.php';?>
    <title>Home</title>
    <style>
        body
        {
            background-color:white;
        }
        .right-side a
        {
            font-weight:bold;
        }
        .side
        {
            float: left;
            margin-right:1%;
        }
        .side-right
        {
            padding-top:0.4%;
        }
        .photo {
            width: 100%;
            height: 600px;
        }

        @media screen and (max-width:700px) {
            .photo {
                height: 300px;
            }
        }

        .exam-tips {
            height: 462px;
        }

        @media screen and (max-width:800px) {
            .exam-tips {
                height: 540px;
            }
        }

        .aim {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .btn1
        {
            margin-top:5%;
        }
        #contents
        {
            margin-bottom:30px;
        }
    </style>
</head>

<body>
    <!--Navbar-->
    <div id="nav">
        <nav class="menubar">
            <div class="left-side">
                <img src="photo/logo.svg" width="90px" height="50px">
            </div>
            <div class="right-side" id="myTopnav">
                <a href="index.php">HOME</a>
                <a href="#contents">CONTENTS</a>
                <a href="about.php">ABOUT US</a>
                <!--<a href="user.php">USERS</a>-->
                    <?php
                    session_start();

                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true')
                    {
                        $name = $_SESSION['first_name'];
                        echo "<a href='#'> $name </a>";
                    }
                    else
                    {
                        ?>
                        <a href="register.php">LOGIN/SIGN UP</a>
                    <?php
                    }
                    ?>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </nav>
    </div>
    <!--Navbar end-->

    <!--Header-->
    <div class="head-container">
        <h1 class="header">EXAM LIBRARY</h1>
    </div>
    <!--Header end-->

    <!--like button-->
    <div style="padding-top:1%;padding-left:2%;">
        <?php
            include 'config.php';
            $sql = "SELECT * from support where id=0";
            $query = mysqli_query($conn,$sql);
            $sql1 = mysqli_fetch_array($query);?>
            <div class="side">
            <form method="post">
                <button type="submit" style="background-color : #3D85C6;color:white;padding-right:10px; padding-bottom:2px;padding-top:2px;width:100px;border-radius:5px;" name="like">
                <img src="photo/thumbs-up-regular.svg" style="margin-bottom:3px;" width="50px" height="20px">Like</button>
            </form></div><?php
            if(!isset($_POST['like']))
            {
                ?><div class="side side-right"><?php
                echo $sql1['like_me'] ." people like this" ;?></div><?php
            }
            else
            {
                $updatelike = $sql1['like_me'] + 1;
                ?><div class="side side-right"><?php echo $updatelike ." people like this" ;?></div><?php
                $sql = "UPDATE support set like_me=$updatelike where id=0";
                mysqli_query($conn,$sql);
            }
        ?>
    </div>
    <!--like end-->

    <!--Intro photo-->
    <div class="intro-photo">
        <img class="photo" src="photo/intro_photo.png" alt="Library">
    </div>
    <!--Intro photo end-->

    <!--Tips and Motivation-->
    <div class="row">
        <div class="column">
            <div class="card">
                <img class="exam-tips" src="photo/Exam_tips.jpg" alt="Library">
            </div>
        </div>
        <div class="column">
            <div class="card">
                <h3 style="text-align: center;">Motivation</h3>
                <p>1. First year is considered to be the most scoring year and yes it is. Score as much as
                    possible.<br><br>
                    2. Study for knowledge but not for CGPA, but the underlying truth is CGPA is reviewed as a gate pass
                    for interviews(mostly).<br><br>
                    3. If you study for knowledge, CGPA is achievable. Simply put, Knowledge is directly proportional to
                    CGPA. The key point is gaining the same knowledge at the appropriate time (I mean before
                    exams).<br><br>
                    4. Never drop any exam for scoring purpose if paper is tough in the first attempt</p><br>
                <div class="aim">
                    <img src="photo/aim_photo.gif" style="width: 16%; height:16%;" alt="aim"><br><br>
                </div><br>
            </div>
        </div>
    </div><br><br>
    <!--Tips and Motivation end-->

    <!--Subject Contents-->
    <div id="contents">
        <div class="row">
            <div class="column1">
                <div class="card">
                    <a href="english.php"><img src="photo/humanities_pic.jpg" width="100%" alt="humanities"></a>
                    <a href="english.php"
                        class="btn1 btn-warning btn-lg active" role="button" aria-pressed="true">English</a>
                    
                </div>
            </div>
            <div class="column1">
                <div class="card">
                    <a href="maths.php"><img src="photo/mathematics-subje.jpg" width="100%" alt="math"></a>
                    <a href="maths.php"
                        class="btn1 btn-warning btn-lg active" role="button" aria-pressed="true">Mathematics</a>
                    
                </div>
            </div>
            <div class="column1">
                <div class="card">
                    <a href="physics.php"><img src="photo/physi.png" width="100%" alt="physics"></a>
                    <a href="physics.php"
                        class="btn1 btn-warning btn-lg active" role="button" aria-pressed="true">Physics</a>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="column1">
                <div class="card">
                    <a href="environment.php"><img src="photo/season.jpeg" width="100%" alt="environment"></a>
                    <a href="environment.php"
                    class="btn1 btn-warning btn-lg active" role="button" aria-pressed="true">Environmental Science</a>
                </div>
            </div>
            <div class="column1">
                <div class="card">
                    <a href="computer.php"><img src="photo/computer_photo.jpeg" width="100%" alt="computer"></a>
                    <a href="computer.php"
                    class="btn1 btn-warning btn-lg active" role="button" aria-pressed="true">Computer Science</a>
                </div>
            </div>
            <div class="column1">
                <div class="card">
                    <a href="electrical.php"><img src="photo/electical_photo.jpg" width="100%" alt="electrical"></a>
                    <a href="electrical.php"
                    class="btn1 btn-warning btn-lg active" role="button" aria-pressed="true">Electrical</a>
                </div>
            </div>
        </div>
    </div><br>
    <!--Subject Contents end-->

    <?php include 'footer.php';?>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <!--end-->
</body>

</html>
