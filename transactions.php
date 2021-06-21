<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TRANSACTIONS</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/transactions.css" />
    
  </head>
  <body>
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
    <?php
      include 'connection.php';
      $sql = "SELECT * FROM `transaction`";
      $result=$con->query($sql);
    ?>
   <h2>Transaction History</h2>
   <br>
    <div class="container">
        
          
        <br>
        <div class="table-responsive-sm">
        <table class="table table-hover table-striped table-condensed table-bordered">
          <thead>
              <tr>
                  <th class="text-center">S.No.</th>
                  <th class="text-center">Sender</th>
                  <th class="text-center">Receiver</th>
                  <th class="text-center">Amount</th>
                  <th class="text-center">Date & Time</th>
              </tr>
            </thead>
            <tbody>
            <?php
                include 'connection.php';
                $sql = "SELECT * FROM `transaction`";
                $result=$con->query($sql);
              
                while($rows=mysqli_fetch_assoc($result)){
                
            ?>
            <tr>
              <td class="py-2"><?php echo $rows['sno']; ?></td>
              <td class="py-2"><?php echo $rows['sender']; ?></td>
              <td class="py-2"><?php echo $rows['receiver']; ?></td>
              <td class="py-2"><?php echo $rows['balance']; ?> </td>
              <td class="py-2"><?php echo $rows['datetime']; ?> </td>
            </tr>   
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
