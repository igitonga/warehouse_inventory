<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/bb8cdd0579.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>
<body>
    <div class="wrapper">
      <nav class="navbar">
              <div class="menu">
                  <i class="fas fa-bars" id="dropmenu"></i>
                  <i class="fas fa-times" id="cancelmenu"></i>
              </div>
              <ul class="navigation-drawer" id="navigation-drawer">
                  <li><a href="">Search</a></li>
                  <li><a href="inbound.php">Inbound</a></li>
                  <li><a href="outbound.php">Outbound</a></li>
                  <li><a href="backend/logout.php">Log Out</a></li>
              </ul>
              <div class="title">
               <p>Warehouse Dashboard</p>
              </div>
      </nav>
    </div>
    <div class="table_container">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Agent's Name</th>
            <th scope="col">Product Category</th>
            <th scope="col">Units</th>
            <th scope="col">Employee's Name</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>
        <?php 
            
            //include('backend/db_connection.php');

          // $sql = mysqli_query($connection,  "SELECT `id`, `first_name`, `last_name` FROM `users`");

            // while($row = mysqli_fetch_assoc($sql)){
            //     echo "<tr><td>". $row['id'] ."</td><td>". $row['first_name'] ."</td><td>".  $row['last_name'] ."</td></tr>";
            // }

            ?>
        </tbody>
      </table>
    </div>

    <!-- js files -->
    <script src="js/main.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>