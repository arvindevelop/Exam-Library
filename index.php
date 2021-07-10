<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/join.css">
    <title>Home</title>
    <style>
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
                <a href="index.html">HOME</a>
                <a href="#contents">CONTENTS</a>
                <a href="about_me.html">ABOUT ME</a>
                <a href="#">USERS</a>
                    <?php
                    session_start();

                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true')
                    {
                        $name = $_SESSION['first_name'];
                        echo "<a href='user.html?id=".$_SESSION["first_name"]."'> $name </a>";
                    
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
                    <a href="english.html"><img src="photo/humanities_pic.jpg" width="100%" alt="humanities"></a>
                    <p style="text-align: center;"><a href="english.html">Learn English</a></p>
                </div>
            </div>
            <div class="column1">
                <div class="card">
                    <a href="maths.html"><img src="photo/mathematics-subje.jpg" width="100%" alt="math"></a>
                    <p style="text-align: center;"><a href="maths.html">Mathematics</a></p>
                </div>
            </div>
            <div class="column1">
                <div class="card">
                    <a href="physics.html"><img src="photo/physi.png" width="100%" alt="physics"></a>
                    <p style="text-align: center;"><a href="physics.html">Physics</a></p>
                </div>
            </div>
            <div><br>
                <div class="row">
                    <div class="column1">
                        <div class="card">
                            <a href="environment.html"><img src="photo/season.jpeg" width="100%" alt="environment"></a>
                            <p style="text-align: center;"><a href="environment.html">Environmental Science</a></p>
                        </div>
                    </div>
                    <div class="column1">
                        <div class="card">
                            <a href="computer.html"><img src="photo/computer_photo.jpeg" width="100%"
                                    alt="computer"></a>
                            <p style="text-align: center;"><a href="computer.html">Computer Science</a></p>
                        </div>
                    </div>
                    <div class="column1">
                        <div class="card">
                            <a href="electrical.html"><img src="photo/electical_photo.jpg" width="100%"
                                    alt="electrical"></a>
                            <p style="text-align: center;"><a href="electrical.html">Electrical</a></p>
                        </div>
                    </div>
                </div>
            </div><br>
            <!--Subject Contents end-->

            <!--Footer-->
            <div class="footer">
                <div class="footer1"><a style="color: white;" href="about_me.html">About me</a><br>
                    <a style="color: white;" href="https://github.com/arvindevelop">Contact</a><br>
                    <a style="color: white;" href="https://www.quora.com/">Help</a>
                </div><br>
                <p>&copy 2021 Exam Library</p>
            </div>
            <!--Footer end-->

            <!--For bar in small screen-->
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
            <!--end-->
</body>

</html>