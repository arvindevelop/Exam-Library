<!DOCTYPE html>
<html lang="en">

<?php include 'header.php';?>
    <title>Computer</title>
    <style>
        .description {
            margin-left: 90px;
            flex: auto;
        }
    </style>
</head>

<body>
    <!--Navbar-->
    <?php include 'nav.php'; ?>
    <!--Navbar end-->

    <!--Main part of web page-->
    <div class="background-container">

        <!--header-->
        <div class="head-container">
            <h1 class="header">Computer Science</h1>
        </div>
        <!--header end-->

        <!--Instruction-->
        <div class="intro">
            <p id="introduction">The below contents are prepared in a manner that if anyone uses these materials they
                completely prepared for the exam, they will get all material which is required for preparation.
                It is prepared based on the engineering educational curriculum.</p>
        </div>
        <!--Instruction end-->

        <!--Tutorial-->
        <div class="tutorial" id="tutorial">
            <div class="header2">
                <h2 class="tutor">Tutorial</h2><br>
                <h5>Programming and DSA</h5>
            </div><br>
            <div class="button-container">
                <a href="https://www.geeksforgeeks.org/data-structures/?ref=shm" class="btn  btn-lg active " role="button"
                    aria-pressed="true">Data Structure</a>
                <a href="https://www.geeksforgeeks.org/fundamentals-of-algorithms/?ref=shm" class="btn btn-warning btn-lg active " role="button"
                    aria-pressed="true">Algorithm</a>
                <a href="https://www.geeksforgeeks.org/c-programming-language/" class="btn btn-warning btn-lg active " role="button"
                    aria-pressed="true">C Programming</a>
                <a href="https://www.geeksforgeeks.org/c-plus-plus/?ref=shm" class="btn btn-warning btn-lg active " role="button"
                    aria-pressed="true">C++</a>
                <a href="https://www.geeksforgeeks.org/java/?ref=shm" class="btn btn-warning btn-lg active " role="button"
                    aria-pressed="true">JAVA</a>
                <a href="https://www.geeksforgeeks.org/python-programming-language/?ref=shm" class="btn btn-warning btn-lg active " role="button"
                    aria-pressed="true">Python</a>
            </div>
        </div><br>
        <div class="header2">
            <h5>Fundamentals</h5>
        </div><br>
        <div class="button-container">
            <a href="https://www.tutorialspoint.com/computer_fundamentals/index.htm"
                class="btn btn-warning btn-lg active " role="button" aria-pressed="true">Computer</a>
            <a href="https://www.studytonight.com/operating-system/introduction-operating-systems"
                class="btn btn-warning btn-lg active " role="button" aria-pressed="true">Operating System</a>
                <a href="https://www.ibm.com/in-en/cloud/learn/networking-a-complete-guide"
                class="btn btn-warning btn-lg active " role="button" aria-pressed="true">Networking</a>
        </div>
    </div><br>
    <!--Tutorial end-->

    <!--Video Tutorial-->
    <div class="video-tutorial" id="video-tutorial">
        <div class="header2">
            <h2 class="video-tutor">Video-Tutorial</h2>
        </div><br>
        <div class="row">
            <div class="column text-center">
                <div class="video">
                    <iframe class="iframe-cont" width="500px" height="400px"
                        src="https://www.youtube.com/embed/PyqV5xmca2U"></iframe>
                </div>
                <div class="description text-center">
                    <h5>Computer System</h5>
                </div>

            </div>
            <div class="column text-center">
                <div class="video">
                    <iframe class="iframe-cont" width="500px" height="400px"
                        src="https://www.youtube.com/embed/zOjov-2OZ0E"></iframe>
                </div>
                <div class="description text-center">
                    <h5>Introduction to programming</h5>
                </div>
            </div>
        </div><br>
    </div>
    <!--video Tutorial end-->

    <!--Notes-->
    <div class="notes" id="notes">
        <div class="header2">
            <h2 class="studMat">Notes</h2><br>
            <h5>Some of the necessary notes</h5>
        </div><br>
        <div class="button-container">
            <a href="https://drive.google.com/file/d/1hUA8TUm_a0gwac8fvKWMC8V7Ril6VlIj/view?usp=sharing"
                class="btn btn-warning btn-lg active " role="button" aria-pressed="true">C Programming</a>
            <a href="https://drive.google.com/file/d/1TUqXango-YjrEmI8xDeZEP0DIxBbzAte/view?usp=sharing"
                class="btn btn-warning btn-lg active " role="button" aria-pressed="true">Data Structure</a>
        </div>
    </div><br>
    <!--Notes-end-->

    <!--E-Books-->
    <div class="e-book" id="e-book">
        <div class="header2">
            <h2 class="e-mat">E-Books</h2>
        </div><br>
        <div class="row">
            <div class="column1">
                <div class="card">
                    <img src="photo/c_program.jpg" width="100%" alt="humanities"><br>
                    <a href="https://drive.google.com/file/d/1hUA8TUm_a0gwac8fvKWMC8V7Ril6VlIj/view?usp=sharing"
                        class="btn1 btn-warning btn-lg active " role="button" aria-pressed="true">C Programming</a>
                </div>
            </div>
            <div class="column1">
                <div class="card">
                    <img src="photo/dsa.jpg" width="100%" alt="math"><br>
                    <a href="https://drive.google.com/file/d/1TUqXango-YjrEmI8xDeZEP0DIxBbzAte/view?usp=sharing"
                        class="btn1 btn-warning btn-lg active " role="button" aria-pressed="true">Data Structure</a>
                </div>
            </div>
            <div class="column1">
                <div class="card">
                    <img src="photo/python.jpg" width="100%" alt="physics"><br>
                    <a href="https://drive.google.com/file/d/1CN3jR_xN9LpLljpa9wBjtbYI9rOC2vMm/view?usp=sharing"
                        class="btn1 btn-warning btn-lg active " role="button" aria-pressed="true">Python</a>
                </div>
            </div>
        </div>
    </div><br>
    <!--E-books end-->

    <!--Main part of web page end-->

    <!--Footer-->
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