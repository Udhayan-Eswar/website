<?php
include('connect.php'); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container" id="divone"  >
    <div class="jumbotron">
    <div class="row">
    <div class="col-md-4">
    </div>
    <div class="card" style="width: 25rem;">
  <div class="card-header" id="card">
    <h1>Resgitration Form</h1>
  </div>
 <br>

     <form id="formone" method="POST" action="1.php">
     <div class="form-group">
     <div colspan='2' align="center">
     <label for="username">Username </label>
    <input type="text" placeholder="Enter your name" name="name" id="name">
    </div>
    </div>
    <div class="form-group">
    <div colspan='2' align="center">
    <label for="password">Password </label>
    <input type="password" placeholder="Enter your password" name="password" id="password">
    </div>
    </div>
    
    <div colspan='2' align='center'>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        
    </div>
     </form>
    <?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $password = $_POST['password'];
        if($name!=" " && $password!=" ")
        {
        $sql = "INSERT INTO `login` (`name`,`password`) VALUES('$name','$password')";
        if($con->query($sql))
        {
            header("location:2.php");
        }
        else
        {
            echo "UNABLE TO INSERT";
        }
    }
    else
    {
        echo "Input all values";
    }
    }
    else
    {
     //   echo " Input values ";
    }

    ?>
    </div>
    </div>
    </div>

</body>
</html>