<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:siu.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Read Manhwa</title>
        <!-- <link rel="stylesheet" type="text/css" href="../ManhwaSite/css/modal.css"> -->
       <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" type="text/css" href="../ManhwaSite/css/modal.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
        rel="stylesheet">
    </head>

    <body>
        <header>
                <a href="#" class="logo">
                    Read Manhwa</a>
                <div class="menu-toggle"></div>
                <img src="images/icon.png" alt="" class="float left percent-30" width="60px" height="60px">
                <nav>
                    <ul>
                        <li><a href="../ManhwaSite/home.php" class="active">Home</a></li>
                        <li><a href="#">Latest</a></li>
                        <li><a href="#">Manhwa List</a></li>
                        <!-- <li><a href="../ManhwaSite/siu.php">Sign In</a></li> -->
                        <li><a href="#">
                        <?php echo $_SESSION['username'];   
                        ?></a>
                        </li>
                        <li><a href="logout.php">Logout</a>
                        </li>

                    </ul>
                </nav>
                <div class="clearfix"></div>
        </header>
        
            <center>
            <div class="slider">
                <div class="sliderchild">
                        <div class="imagecon">
                                <div class="contain">
                                        Solo Leveling
                                    </div>
                        </div>
                        <div class="imagecon">
                                <div class="contain">
                            Chronicles of HeavenlyDemon
                            </div>
                        </div>
                        <div class="imagecon">
                                <div class="contain">
                            Descent of the Demonic Master
                        </div>
                        </div>
                        <div class="imagecon">
                                <div class="contain">
                            Mookhyang Dark Lady
                            </div>
                        </div>
                        <div class="imagecon">
                                <div class="contain">
                            I am Sorcerer King
                            </div>
                        </div>
                        
                </div>
            </div>
       </center>
                <br>
            <br>
            <br>    
            

        <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.menu-toggle').click(function(){
                    $('.menu-toggle').toggleClass('active')
                    $('nav').toggleClass('active')
                });
            });
        </script>


    </body>
</html>