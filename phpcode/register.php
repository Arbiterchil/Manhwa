<?php

    session_start();


        $con = mysqli_connect('localhost','root','');

        mysqli_select_db($con,'manhwa');

        $name = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $type = 2;

        $s = "select * from usertype where name = '$name'";

        $result = mysqli_query($con,$s);

        $num = mysqli_num_rows($result);

        if($num == 1){
                // echo"Username is Already taken";
        }else{
            $password = password_hash($password,PASSWORD_DEFAULT);
        
            $reg = "insert into usertype(name,email,password,type)values('$name','$email','$password','$type')";
            mysqli_query($con,$reg);
            // echo"Register Successfull";
        }

?>

<html>



<div>
        <?php
        if(isset($_POST['create'])){
            $con = mysqli_connect('localhost','root','');
            mysqli_select_db($con,'manhwa');
            $name = $_POST['user'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $conpassword = $_POST['conpass'];
            $type = 2;
    
            $s = "select * from usertype where name = '$name'";
    
            $result = mysqli_query($con,$s);
    
            $num = mysqli_num_rows($result);

                if($num == 1){
                    echo"Username is Already taken";
                }
                else{
                    if($password === $conpassword){
                        $password = password_hash($password,PASSWORD_DEFAULT);
                        $reg = "insert into usertype(name,email,password,type)values('$name','$email','$password','$type')";
                        mysqli_query($con,$reg);
                        //   echo"Register Successfull";
                    }else{

                }
            }
          
        
        }else{

            // echo"Somethng Went Wrong!";
        }
        ?>
    </div>
    $(function(){
                                $('#register').click(function(e){
                                    var valid = this.form.checkValidity();
                                    if(valid){
                                         var name = $('#name').val();
                                var email = $('#email').val();
                                var password = $('#password').val();
                                var conpass = $('#conpass').val();
                                   
                                        e.preventDefault();
                                        $.ajax({
                                            type: 'POST',
                                            url: 'process.php',
                                            data: {name: name,email: email,password: password,conpass: conpass},
                                            success: function(data){
                                                Swal.fire({
                                                       'title':'Register Account.',
                                                       'text': 'Successfull',
                                                       'type':'success'
                                                     
                                                })

                                            },
                                            error: function(data){
                                                Swal.fire({
                                                       'title':'Error Register',
                                                       'text': 'There were Errors While Saving Data.',
                                                       'type':'error'
                                                     
                                                })
                                            }
                                        });
                                        // alert('true');
                                    }else{
                                        alert('false');
                                    }

                          

                        
                    });
                        });


</html>