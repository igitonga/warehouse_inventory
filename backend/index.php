<?php
session_start();

// verify details
function loginUser($con, $email, $pass){

    $sql = "SELECT  `id`, `email`, `password` FROM `users` WHERE `email` = '$email' LIMIT 1";
    $execute = mysqli_query($con, $sql);

    if($execute){

        $num_rows = mysqli_num_rows($execute);

        if($num_rows ==  1){

            $row = mysqli_fetch_assoc($execute);

            $stored_password = $row['password'];
            $stored_email = $row['email'];
            $user_id = $row['id'];

            //verify if password is correct
            if($pass == $stored_password){
                $_SESSION['active_email'] = $stored_email;
                $_SESSION['active_id'] = $user_id;

                header('Location: ../dashboard.php');
            }
            else{

                setcookie('email', $stored_email, time()+1, "/");
                header('Location: ../index.php');
                $_SESSION["error"] = "Wrong credentials";
                echo "2";
            }
        }
        else{

            header('location: ../index.php');
            $_SESSION["error"] = "User does not exist";
        }
    }
    else{

        mysqli_error($con);
    }
}

// button functionality
if(isset($_POST['btnLogin'])){
   
    if(file_exists('db_connection.php')){
  
      require_once('db_connection.php');
  
      $email = $_POST['email'];
      $password = $_POST['password'];

      loginUser($connection, $email, $password);

    }  
    else{
       // echo "File is not found";
    }
  }
  else{
     // echo "Technical issues";
  }
  

?>