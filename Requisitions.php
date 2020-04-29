<?php
include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">


<head>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
    <meta charset="UTF-8">
    <meta name="author" content= "sahil kumar">
    <meta http-equiv="X-UA-Compatible" content=" content="ie=EDGE">
    <META NAME="VIEWPORT" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <title>Transactions</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">TRANSACTIONS</a>
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav"> 
    <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li> 
    <li class="nav-item">
        <a class="nav-link" href="Requisitions.php">Capture Requisition</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#">Authorise Requistion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ReceiptReq.php">Receive Requisition</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Authorise Payment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="welcome.html">Exit</a>
      </li> 

        
       
    </ul>
</div>
    <form class="form-inline" action="/action_page.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="submit">Search</button>
  </form>
</nav>
    <div class=container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <h3 xlass="text-centre-dark mt-2">Transactions</h3>
              <hr>
              <?php if(isset($_SESSION['response'])){?>
              <div class="alert alert-<?= $_SESSION['res_type']; ?>
              alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <b class= text-center"><? $_SESSION['response']; ?></b>
              </div>
              <?php } unset($_SESSION['response']) ?>
          </div>
          </div>
            <div class="row">
            <div class="col-md-4">
                <h3 class="text-center text-info">Capture Requsition</h3>
                    <form action="action.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                          <input type="text" name="tracknum" class="form-control" placeholder=
                          "tracknum" required>
                      <div class="form-group">
                          <input type="text" name="name" class="form-control" placeholder=
                          "Name" required>
                      </div>
                      <div class="form-group">
                          <input type="text" name="surname" class="form-control" placeholder=
                          "Surname" required>
                      </div>
                      <div class="form-group">
                          <input type="text" name="position" class="form-control" placeholder=
                          "Position" required>
                      </div>
                      <div class="form-group">
                          <input type="text" name="facility" class="form-control" placeholder=
                          "Facility" required>
                      </div>
                      <div class="form-group">
                          <input type="text" name="Demandcode" class="form-control" placeholder=
                          "Demandcode" required>
                      </div>
                      <div class="form-group">
                          <input type="text" name="Demandnum" class="form-control" placeholder=
                          "enter Demand Number" required>
                      </div>
                      <div class="form-group">
                          <input type="text" name="Catnum" class="form-control" placeholder=
                          "Catalog Number" required>
                      </div>
                      <div class="form-group">
                          <input type="text" name="QtyOrdered" class="form-control" placeholder=
                          "Quantity Ordered" required>
                      </div>
                      <div class="form-group">
                          <input type="file" name="photo" class="custom-file">
                      </div>
                      <div class="form-group">
                          <input type="submit" name="add" class="btn "btn-primary btn-block
                          value= "add record">
                      </div>    
                   </form>
             </div>
            <div class="col-md-8">
              <?php
              $query="select * FROM requisitions";
              $stmt=$conn->prepare($query);
              $stmt->execute();
              $result=$stmt->get_result();
              ?>
            <h3 class="text-center text-green">Browse Records</H3>
            <table class="table table-hover">
    <thead>
      <tr>
      
        <th>Tracknum</th>
        <th>name</th>
        <th>surname</th>
        <th>position</th>
        <th>facility</th>
        <th>demandcode</th>
        <th>demandnum</th>
        <th>catnum</th>
        <th>qtyordered</th>
        <th>image</th>
        <th>action</th>
     </tr>
    </thead>
    <tbody>
    <?php while($row=$result->fetch_assoc()){?>;
      <tr>
        <td><?= $row['tracknum']; ?</td>
        <td><?= $row['name']; ?</td>
        <td><?= $row['surname']; ?</td>
        <td><?= $row['position']; ?</td>
        <td><?= $row['facility']; ?</td>
        <td><?= $row['demandcode']; ?</td>
        <td><?= $row['demandnum']; ?</td>
        <td><?= $row['catnum']; ?</td>
        <td><?= $row['orderqty']; ?</td>
        <td><img src="<?= $row['photo']; ?>" width="25"></td>
        <td>
            <a href="#" class="badge bagde-primary p-2">Details</a> |
            <a href="#" class="badge bagde-danger p-2">Delete</a> |
            <a href="#" class="badge bagde-succes p-2">Edit</a> |
        </td>
      </tr>
  <?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>