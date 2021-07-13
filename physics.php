<!DOCTYPE html>
<html lang="en">

<?php include 'header.php';?>
    <title>Physics</title>
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
            <h1 class="header">Physics</h1>
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
            </div><br>
            <div class="button-container">
                <a href="https://royalsocietypublishing.org/doi/10.1098/rspa.2012.0340" class="btn btn-warning btn-lg active " role="button"
                    aria-pressed="true">Theory of Relativity</a>
                <a href="https://www.data-connect.com/fiber_tutorial.htm" class="btn btn-warning btn-lg active " role="button"
                    aria-pressed="true">Fibre optics</a>
                <a href="https://www.rfwireless-world.com/Articles/Laser-basics-and-Laser-types.html" class="btn btn-warning btn-lg active " role="button"
                    aria-pressed="true">Laser</a>
                
            </div>
        </div><br>
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
                        src="https://www.youtube.com/embed/ttZCKAMpcAo"></iframe>
                </div>
                <div class="description text-center">
                    <h5>Theory of Relativity</h5>
                </div>

            </div>
            <div class="column text-center">
                <div class="video">
                    <iframe class="iframe-cont" width="500px" height="400px"
                        src="https://www.youtube.com/embed/0FBZFhwJgp8"></iframe>
                </div>
                <div class="description text-center">
                    <h5>Quantum Mechanics</h5>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="column text-center">
                <div class="video">
                    <iframe class="iframe-cont" width="500px" height="400px"
                        src="https://www.youtube.com/embed/K4_pV9aOZUo">
                    </iframe>
                </div>
                <div class="description text-center">
                    <h5>Fibre Optics</h5>
                </div>
            </div>
            <div class="column text-center">
                <div class="video">
                    <iframe class="iframe-cont" width="500px" height="400px"
                        src="https://www.youtube.com/embed/eQGVkFBjGzE">
                    </iframe>
                </div>
                <div class="description text-center">
                    <h5>Laser</h5>
                </div>
            </div>
        </div>
    </div>
    <!--video Tutorial end-->

    <!--Notes-->
    <div class="notes" id="notes">
        <div class="header2">
            <h2 class="studMat">Notes</h2><br>
            <h5>Some of the necessary notes</h5>
        </div><br>
        <div class="button-container">
            <a href="https://drive.google.com/file/d/1JU3g9GxCJcLj4bgVkpQ7jC1wlmxziI6o/view?usp=sharing"
                class="btn btn-warning btn-lg active " role="button" aria-pressed="true">Theory of
                relativity</a>

            <a href="https://drive.google.com/file/d/1LponleG-N-q6Oms1SlVemiC9OsDkLPnJ/view?usp=sharing"
                class="btn btn-warning btn-lg active " role="button" aria-pressed="true">Fiber
                optics</a>

            <a href="https://drive.google.com/file/d/1eOJiUf4khjO7D5RDrDRFMF70P6911J3C/view?usp=sharing"
                class="btn btn-warning btn-lg active " role="button" aria-pressed="true">Quantum
                mechanics</a>

            <a href="https://drive.google.com/file/d/1W4zWtx7QeRRddjKLq12ZmrSX84Cmm2UQ/view?usp=sharing"
                class="btn btn-warning btn-lg active " role="button" aria-pressed="true">Laser</a>
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
                    <img src="photo/laser.jpg" width="100%" alt="humanities"><br>
                    <a href="#"
                        class="btn1 btn-warning btn-lg active " role="button" aria-pressed="true">Laser</a>
                </div>
            </div>
            <div class="column1">
                <div class="card">
                    <img src="photo/fibre_optics.jpg" width="100%" alt="math"><br>
                    <a href="#"
                        class="btn1 btn-warning btn-lg active " role="button" aria-pressed="true">Fibre Optics</a>
                </div>
            </div>
            <div class="column1">
                <div class="card">
                    <img src="photo/engineering_physics.jpg" width="100%" alt="physics"><br>
                    <a href="#"
                        class="btn1 btn-warning btn-lg active " role="button" aria-pressed="true">Engineering Physics</a>
                </div>
            </div>
        </div>
    </div><br>
    <!--E-books end-->

    <!--Main part of web page end-->

    <!--Footer-->
    <?php include 'footer.php';?>
    <!--end-->
</body>

</html>