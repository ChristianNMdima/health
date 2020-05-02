
<!DOCTYPE html>
<html>
<head>
    <title>Payment Pack</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/form.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css" />
</head>
<!-- Form for logging in the users -->

<body>
    <div class="container">
        <div class="background">
            <div class="transbox">
            <?php
            
            (isset($_GET['page']) ? $page = $_GET['page'] : $page = "welcome"); 

            switch ($page) {
                case "login":
                    include "src/login.php";
                    break;
                case "register":
                    include "src/regform.php";
                    break;
                case "welcome":
                    include "src/welcome.php";
                    break;
                default:
                    include "src/welcome.php";
            }
        ?>
            </div>
        </div>

          <!-- Register Modal -->
        <div class="modal" id="register">
            <div class="modal-dialog">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Register</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="index.php" class="was-validated">
                            <div class="form-group">
                                <label for="uname">Username:</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <div class="col-sm-9" style="text-align: right !important;">
                                    <a href="#" type="submit" class="btn btn-warning">Forgot Password</a>
                                    <a data-toggle="modal" data-target="#register" type="submit" class="btn btn-info">Register</a>
                                </div>

                            </div>
                        </form>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Submit</button>
                    </div>
                    
                </div>
            </div>
        </div>


    </div>
    <script src="/assets/bootstrap/js/bootstrap.js"></script>
</body>


</html>

</html>