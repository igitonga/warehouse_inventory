<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Search</title>
</head>
<body>
    <div class="wrapper">
        <nav class="navbar">
            <div class="title">
                <p>Warehouse Dashboard</p>
            </div>
        </nav>
        <!-- search panel for events -->
        <div class="search-section">
            <form action="search.php" method="POST">
                <div class="search-section_2">
                    <input type="text" name="searchBar" id="eventName" placeholder="Search here">
                    <input type="submit" name="btnSearch" id="btnSearch" value="Search" >
                </div>
            </form>    
        </div>
        <?php
            // php to display search results
            if(isset($_POST['btnSearch'])){

                include('backend/db_connection.php');
    
                $user_search = $_POST['searchBar'];
                $search = mysqli_real_escape_string($connection, $user_search);

                $search_query = "SELECT * FROM `inventory` WHERE `agent_name` LIKE '%$user_search%' OR `product_category` LIKE '%$user_search%' OR
                                    `employee` LIKE '%$user_search%' OR `type` LIKE '%$user_search%'";
                $exec = mysqli_query($connection, $search_query);
                
                $num_rows = mysqli_num_rows($exec);

                if($num_rows > 0){
                    echo "<div class='table_container'>";
                    echo "<table class='table table-hover'>";
                     echo "<thead>";
                        echo "<tr>";
                          echo "<th scope='col'>#</th>";
                          echo "<th scope='col'>Agent's Name</th>";
                          echo "<th scope='col'>Product Category</th>";
                          echo "<th scope='col'>Units</th>";
                          echo "<th scope='col'>Employee's Name</th>";
                          echo "<th scope='col'>Type</th>";
                          echo "<th scope='col'>Date</th>";
                        echo "</tr>";
                      echo "</thead>";
                            while($row = mysqli_fetch_array($exec)){
                            echo "<tr><td>". $row['id'] ."</td><td>". $row['agent_name'] ."</td><td>".  $row['product_category'] ."</td>
                            <td>".  $row['units'] ."</td><td>".  $row['employee'] ."</td><td>".  $row['type'] ."</td><td>".date("d-m-Y",strtotime($row['date']))."</td></tr>";
                    }
                      echo "<tbody>";
                      echo "</tbody>";
                    echo "</table>";
                  echo "</div>"; 
                }
                else{
                    echo "<h2 style='text-align: center;'>No result found</h2>";
                    echo "<img src='images/not_found.svg' style='height: 400px; 
                            margin-left: 27em;'/>";
                }
            }
        ?>
    </div>

     <!-- js files -->
     <script src="js/main.js"></script>
     <script src="js/jquery-3.5.1.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
</body>
</html>