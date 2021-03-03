<?php

include ('./index.php');

$active_id = $_SESSION['active_id'];

function inboundEntry($con, $fullname, $email, $phone, $prod_cat, $units, $bus_name, $location, $office_ph, $employee_id, $logistics){

    // insert to table query
    $sql = "INSERT INTO `inbound`(`fullname`, `email`, `phone_no`, `product_category`, `units`, `business_name`, `location`, 
    `office_phone`, `employee_id`, `logistics`, `timestamp`) 
    VALUES('$fullname', '$email', '$phone', '$prod_cat', '$units','$bus_name', '$location', '$office_ph', '$employee_id', '$logistics', Now())";
    $execute = mysqli_query($con, $sql);

    if($execute){
        header('Location: ../dashboard.php');
    }
    else{
        echo mysqli_error($con);
    }
}

// button functionality
if(isset($_POST['btnInbound'])){
   
    if(file_exists('db_connection.php')){
  
      require_once('db_connection.php');

      $fullname = $_POST['fullname']; 
      $email = $_POST['email']; 
      $phone = $_POST['phone']; 
      $product_category = $_POST['product_category']; 
      $units = $_POST['units']; 
      $business_name = $_POST['business_name']; 
      $location = $_POST['location']; 
      $office_no = $_POST['office_no']; 
      $employee_id = $active_id;
      $logistics = "inbound";

      inboundEntry($connection, $fullname, $email, $phone, $product_category, $units, $business_name, $location, $office_no, $employee_id, $logistics);
    }  
    else{
       // echo "File is not found";
    }
  }
  else{
     // echo "Technical issues";
  }

?>