<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>USERS</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/table.css" />
    
  </head>
  <body>
  <?php
    include 'connection.php';
    $sql = "SELECT * FROM users";
    $result=$con->query($sql); 
    ?>
    <div class="header">
      <nav class="navbar">
        <a href="./index.php" class="nav-logo">SparkBank.</a>
        <ul class="nav-menu">
          <li class="nav-item">
            <a href="./index.php" class="nav-link">HOME</a>
          </li>
          <li class="nav-item">
            <a href="./user.php" class="nav-link">USERS</a>
          </li>
          <li class="nav-item">
            <a href="./transactions.php" class="nav-link">TRANSACTIONS</a>
          </li>
        </ul>
        <div class="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </nav>
    </div>
    <br>
    <h2>Select Sender</h2>
    <div class="container">
    <br>
    
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php 
                              while($rows=mysqli_fetch_assoc($result)){
                          ?>
                          <tr>
                              <td class="py-2"><?php echo $rows['id'] ?></td>
                              <td class="py-2"><?php echo $rows['name']?></td>
                              <td class="py-2"><?php echo $rows['email']?></td>
                              <td class="py-2"><?php echo $rows['balance']?></td>
                              <td><a href="userDetails.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="color:#456268;">Pay</button></a></td> 
                          </tr>
                          <?php
                              }
                          ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
          </div>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
