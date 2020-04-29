<?php
include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="author" content= "Themba Sikosana">
    <meta http-equiv="X-UA-Compatible" content=" content="ie=EDGE">
    <META NAME="VIEWPORT" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <title>Requisitions</title>
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
        <a class="navbar-brand" href="requisitions">requsitions</a>
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav"> 
      <li class="nav-item">
        <a class="nav-link" href="#">Authorise requsition</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">UnAuthorised Requistion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Receive order</a>
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
                    <h3 class="text-center text-green">CAPTURE REQUISITION</H3>
                    </div>
           </div>
            <div class="row">
            <div class="col-md-4">
                <h3 class="text-center text-info">Add record</h3>
                    <form action="action.php" method="post" enctype="multipart/form-data">
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
                        <input type="file" name="image" class="custom-file">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="add" class="btn "btn-primary btn-block
                        " value="add record">
                    </div>    
                   </form>
             </div>
            <div class="col-md-8">
            <h3 class="text-center text-green">Requisition's Records</H3>
            <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>TrackingNum</th>
        <th>image</th>
        <th>name</th>
        <th>surnamename</th>
        <th>demandnum</th>
        <th>catnum</th>
        <th>qtyordered</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>123</td>
        <td><img src"" width="25"></td>
        <td>Themba</td>
        <td>Sikosana</td>
        <td>EDH123</td>
        <td>1234567</td>
        <td>123</td>
        <td>
            <a href="#" class="badge bagde-primary p-2">Details</a> |
            <a href="#" class="badge bagde-danger p-2">Delete</a> |
            <a href="#" class="badge bagde-succes p_2">Edit</a> |

      </tr>
    </tbody>
  </table>
</div>
</body>
</html>