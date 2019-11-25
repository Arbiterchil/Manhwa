<?php

    
        if(isset($_POST)){
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
                          echo"Register Successfull Save.";
                    }else{
                        echo"Something Went Wrong Nothing to Save.";    
                }
            }


        }else{
            echo"Something Went Wrong Nothing to Save.";
        }
          
          
        
    
        ?>