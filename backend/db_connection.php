<?php

define("HOST", "127.0.0.1");
define("USER", "root");
define("PASSWORD", NULL);
define("DATABASE", "warehouse_inventory");

$connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if(!$connection){

    echo "Server down " .mysqli_connect_error();
}
    

?>