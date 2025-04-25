<div id="nav">
        <nav class="menubar">
            <div class="left-side">
                <img src="photo/logo.svg" width="90px" height="50px">
            </div>
            <div class="right-side" id="myTopnav">
                <a href="index.php">HOME</a>
                <a href="#tutorial">TUTORIAL</a>
                <a href="#video-tutorial">VIDEO TUTORIAL</a>
                <a href="#notes">NOTES</a>
                <a href="#e-book">E-BOOKS</a>
                <?php
                    // session_start();

                    // if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true')
                    // {
                    //     $name = $_SESSION['first_name'];
                    //     echo "<a href='#'> $name </a>";
                    // }
                    // else
                    // {
                        ?>
                        <!-- <a href="register.php">LOGIN/SIGN UP</a> -->
                    <?php
                    // }
                    ?>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </nav>
    </div>
    <div id="nav">
        <div class="right-side sub-list" style="background-color:rgb(167, 106, 224);padding-left:12%;justify-content: center;" id="myTopnav1">
            <a  href="english.php">ENGLISH</a>
            <a  href="maths.php">MATHEMATICS</a>
            <a  href="physics.php">PHYSICS</a>
            <a  href="environment.php">ENVIROMENTAL SCIENCE</a>
            <a  href="computer.php">COMPUTER SCIENCE</a>
            <a  href="electrical.php">ELECTRICAL</a>
            <a  href="javascript:void(0);" class="icon" onclick="myFunction1()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>