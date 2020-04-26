<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: yellow; 
}

.navbar a {
  float: left;
  font-size: 16px;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: Green;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: Green;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: black;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="#home">Home</a>
  <div class="subnav">
    <button class="subnavbtn">File <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#Logoff">Logoff</a>
      <a href="#Reports">Reports</a>
      <a href="#Printer Setup">Printer Setup</a>
      <a href="#Exit">Exit</a>
    </div>
  </div> 

  <div class="subnav">
    <button class="subnavbtn">General <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#Medicine">Medicine</a>
      <a href="#Districts">Districts</a>
      <a href="#Facilities">Facilities</a>
      <a href="#Facility Requisitions">Requisitions</a>
      <a href="#Facility Receipts">Receipts</a>
      <a href="#browse Payment packs">browse Payment packs</a>
    </div>
    
  </div> 

  <div class="subnav">
    <button class="subnavbtn">Transact <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">

    
      <a href="#Capture Requisition">Capture Requisition</a>
      <a href="#Capture Receipt">Capture Receipt</a>
      <a href="#Authorise Payments">Authorise Payments</a>
      <a href="#Upload DDV Order">Upload DDV Order</a>
      <a href="#Upload Payment Pack Docs">Upload Payment Pack Docs</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Queries <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#View Authorised Payments">View Authorised Payments</a>
      <a href="#View Unauthorised Payments">View Unauthorised Payments</a>
      <a href="#Search Facility">Search Facility</a>
      <a href="#Search Tracking number">Search Tracking number</a>
    </div>
  </div> 

  <div class="subnav">
    <button class="subnavbtn">Tools <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#View System Settings">System Settings</a>
      <a href="#View Unauthorised Payments">User Admin</a>
      </div>
  </div> 

  <div class="subnav">
    <button class="subnavbtn">Tracking <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#Payment Pack Process">Payment Pack Process</a>
      <a href="#Deliveries">Deliveries</a>
      </div>
  </div>
  <a href="#contact">Contact</a>
</div>


</body>
</html>



<link rel="stylesheet" href="form.css">

<div class="welcome">
<div class="alert success">
    welcome 
    <?php 
        session_start();
        if(isset($_SESSION['name'])){
            echo $_SESSION['name'] . '! ' . $_SESSION['message'];
        } else {
            echo "Session expired! <a href='welcome.html'><button>Login Again</button></a>";
        }
        
    ?>
 
</div>

<body>

        <button onclick="openWin()">LOGOFF</button>
        <button onclick="closeWin()">EXIT</button>
        
        <script>
        var myWindow;
        
        function openWin() {
          myWindow = window.open("index.php", "_blank", "width=5000, height=5000");
        }
        
        function closeWin() {
          myWindow.close();
        }
        </script>
        
        </body>   
        