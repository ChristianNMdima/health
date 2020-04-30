<?php
//include 'action.php';
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
    <meta name="author" content= "Themba Sikosana">
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
    <span class="navbar-toggler-icon"></span>  </button>

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
        <a class="nav-link" href="Authorisereq.php">Authorise Requistion</a>
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
</div>
    <form class="form-inline" action="/action_page.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="submit">Search</button>
  </form>
</nav>
    <div class=container-fluid">
         
           <div class="row justify-content-center">
            <div class="col-md-10">
           
                    
            </div>
           </div>
            <div class="row">
            <div class="col-md-4">
            
            <img src="requisitionsimage.jpg" alt="requisitionsimage" width="120" height="170" align="center">
              
                <h3 class="text-center text-info">Add Record</h3>
                
                    <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="tracknum" class="form-control" placeholder=
                        "tracknum" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder=
                        "name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="surname" class="form-control" placeholder=
                        "surname" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="position" class="form-control" placeholder=
                        "position" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="facility" class="form-control" placeholder=
                        "facility" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="district" class="form-control" placeholder=
                        "district" required>
                     </div>
                     <div class="form-group">
                        <input type="text" name="demandnum" class="form-control" placeholder=
                        "demandnum" required>
                     </div>
                     <div class="form-group">
                        <input type="text" name="demandcode" class="form-control" placeholder=
                        "demandcode" required>
                     </div>
                     <input type="text" name="catnum" class="form-control" placeholder=
                        "catnum" required>
                     <br>
                     <div class="form-group">
                     <input type="text" name="Quantity Ordered" class="form-control" placeholder=
                        "Quantity Ordered" required>
                    </div>
                    <p><label>Enter date of receipt : </label>
                    <input type="date" id="Order Date" name="Order Date">
                    <div class="form-group">
                        <input type="file" name="image" class="custom-file">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="add" class="btn "btn-primary btn-block"
                         value="add record">
                    </div>    
            
                    
                   </form>
             </div>
            <div class="col-md-8">
              <br>
              
              <h1 class="text-center text-info">REQUSITIONS PAGE</h1>
             
              <br>
              <br>
              <h3 class="text-center text-green">Browse Records</H3>
            <table class="table table-bordered table-hover">
    <thead>
    
      <tr>
        <th>TrackNum</th>
        <th>PPdocs</th>
        <th>name</th>
        <th>surname</th>
        <th>demandnum</th>
        <th>catnum</th>
        <th>qty received</th>
        <th>qty ordered</th>
        
            
    
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