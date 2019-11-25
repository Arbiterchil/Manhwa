<?php

        session_start();

            $con = mysqli_connect('localhost','root','');
            mysqli_select_db($con,'manhwa');


            $name = $_POST['user'];
            $password = $_POST['password'];
            $type = 1;
            $s = "select * from usertype where name = '$name'";
            
            $son = "select * from usertype where name = '$name' && type= '$type'";
            $of = mysqli_query($con,$son);
            $God = array();
            $erc = mysqli_num_rows($of);

            $response = mysqli_query($con,$s);
            $result = array();
            $num = mysqli_num_rows($response);
            
            if($num == 1 ){
                $row = mysqli_fetch_assoc($response);
                if(password_verify($password,$row['password'])){
                    $_SESSION['username'] = $name;
                    header('location:index.php');
                }else{
                    header('location:siu.php');
                }
            }
            
            if($erc == 1){
                $wow = mysqli_fetch_assoc($of);
                if(password_verify($password,$wow['password'])){
                    $_SESSION['username'] = $name;
                    header('location:admin.php');
                }else{
                    header('location:siu.php');
                }
            }
                
        
        
    
        ?>