<!DOCTYPE html>
<html>
    <head>
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <title>Read Manhwa</title>
            <link rel="stylesheet" type="text/css" href="css/modal1.css">
        
            <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    </head>
        
    <body>
    <div>
       
            <div class="container" id="container">
                    <div class="form-container sign-up-container">
                        <form action="siu.php" method="post">
                                <h1>Create Account</h1>
                                <div class="social-container">
                                        <a href="#" class="social"><img src="images/facebook_circle-512.png" width="30px" height="30px"></img></a>
                                        <a href="#" class="social"><img src="images/google-plus-512.png" width="30px" height="30px"></img></a>
                                        <a href="#" class="social"><img src="images/social-linkedin-circle-512.png" width="30px" height="30px"></img></a>
                                    </div>
                                <span>or use your email for registration</span>
                                <input type="text" name="user" placeholder="Name" id="user" required/>
                                <input type="text" name="email" placeholder="Email" id="email" required/>
                                <input type="password" name="password" placeholder="Password" id="password" required/>
                                <input type="password" name="conpass" placeholder="Confirm Password" id="conpass" required/>
                                <button type="submit" name="create" id="register"
                                >Sign Up</button>
                        </form>
                    </div>
                    <div class="form-container sign-in-container">
                            <form action="login.php" method="POST">
                                    <h1>Sign In</h1>
                                    <div class="social-container">
                                            <a href="#" class="social"><img src="images/facebook_circle-512.png" width="30px" height="30px"></img></a>
                                        <a href="#" class="social"><img src="images/google-plus-512.png" width="30px" height="30px"></img></a>
                                        <a href="#" class="social"><img src="images/social-linkedin-circle-512.png" width="30px" height="30px"></img></a>
                                    </div>
                                    <span>or use your account</span>
                                    <input type="text" name="user" placeholder="Username / Name" required/>
                                    <input type="password" name="password" placeholder="Password" required/>
                                    <a href="#" class="foru">Forget Your Password?</a>
                                    <button type="submit" >Sign In</button>
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




                <script src="javascript/main.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
                <script type="text/javascript">
                           
                        $(function(){
                                $('#register').click(function(e){
                                    var valid = this.form.checkValidity();

                                    if (valid) {
                                        var user = $('#user').val();
                                var email = $('#email').val();
                                var password = $('#password').val();
                                var conpass = $('#conpass').val();

                                
                                
                                

                                e.preventDefault();
                                        $.ajax({
                                            type: 'POST',
                                            url: 'process.php',
                                            data: {user: user,email: email,password: password,conpass: conpass},
                                            success: function(data){
                                                Swal.fire({
                                                    title:'Account Register',
                                                    text:data,
                                                    imageUrl: 'images/icon.png',
                                                    imageHeight: 70,
                                                    imageWidth:70
                                            })
                              

                            document.getElementById("user").value = "";
                            document.getElementById("email").value = "";
                            document.getElementById("password").value = "";
                            document.getElementById("conpass").value = "";
                                            },
                                            error: function(data){
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Oops...',
                                                    text: data,
                                                    footer: '<a href>Why do I have this issue?</a>'
                                                    })
                                            }
                                        });

                                        
                                    }else{

                                    }

                                });
                        });              
            

                </script>

                            <script type="text/javascript">

                           

                            </script>
                

    </body>
    

</html>