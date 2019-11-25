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
        <!-- <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    </head>

    <body>
        <header>
                <a href="#" class="logo">
                    Read Manhwa</a>
                <div class="menu-toggle"></div>
                <img src="images/icon.png" alt="" width="60px" height="60px">
                <nav>
                    <ul>
                        <li><a href="../ManhwaSite/home.php" class="active">Home</a></li>
                        <li><a href="#">Latest</a></li>
                        <li><a href="#">Manhwa List</a></li>
                        <li><a href="../ManhwaSite/siu.php">Sign In</a></li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
        </header>

        <!-- <div class="modal">
            <div class="modal__content">
                <a href="#" class="modal__close">&times;</a>
            </div>

        </div> -->
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
                <!-- <center>
                        <div class="container" id="container">
                                <div class="form-container sign-up-container">
                                    <form action="#">
                                            <h1>Create Account</h1>
                                            <div class="social-container">
                                                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <span>or use your email for registration</span>
                                            <input type="text" placeholder="Name"/>
                                            <input type="text" placeholder="Email"/>
                                            <input type="text" placeholder="Password"/>
                                            <button>Sign Up</button>
                                    </form>
                                </div>
                                <div class="form-container sign-in-container">
                                        <form action="#">
                                                <h1>Sign In</h1>
                                                <div class="social-container">
                                                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                                                </div>
                                                <span>or use your account</span>
                                                <input type="text" placeholder="Email"/>
                                                <input type="text" placeholder="Password"/>
                                                <a href="#" class="foru">Forget Your Password?</a>
                                                <button>Sign In</button>
                                        </form>
                                    </div>
                                    <div class="overlay-container" >
                                        <div class="overlay">
                                            <div class="overlay-panel overlay-left">
                                                <h1>Welcome Back!</h1>
                                                <p>
                                                    to keep us connected please login with your own info.
                                                </p>
                                                <button class="ghost" id="signIn">Sign In</button>
                                            </div>
                                            <div class="overlay-panel overlay-right">
                                                    <h1> Owh! Hello There</h1>
                                                    <p>
                                                       Enter you info for u to join our Journey.
                                                    </p>
                                                    <button class="ghost" id="signUp">Sign Up</button>
                                                </div>
                                        </div>
                                    </div>
                            </div>
             -->
        <!-- </center> -->
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

    



        <!-- <script src="../ManhwaSite/javascript/main.js"></script> -->

    </body>
</html>