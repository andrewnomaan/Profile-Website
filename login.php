<?php
include 'db_connect.php';
include 'function.php';
  $email='';
  $password='';
  $email_err='';
  $pass_err='';
  $login_err='';
  $er=0;
  if(isset($_POST['submit'])){
      $email=get_safe_value($conn,$_POST['email']);
      $password=get_safe_value($conn,$_POST['password']);
      if($email==''){
          $email_err="*Email required";
          $er++;
      }
      if($password==''){
          $pass_err="*Password required";
          $er++;
      }
     if($er==0){
         $sql=mysqli_query($conn,"SELECT * FROM admin where email='$email' and password='$password'");
         if(mysqli_num_rows($sql)>0){
             $row=mysqli_fetch_assoc($sql);
             $email_err='';
             $pass_err='';
             $login_err='';
             $er=0;
             ?>
               <script>
                   window.location="index.php";
                   $_SESSION['login']='yes';
                   $_SESSION['email']=$row['email'];
               </script>
             <?php
         }
         else{
             $login_err='Invalid login details';
         }
     }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login page</title>
     <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="center">
  <form class="w-50" action="" method="post">
    <div class="w-75 m-auto bg-light p-4 rounded">
    <small id="emailHelp" class="form-text text-muted err text-center"><?php echo $login_err;?></small>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted err"><?php echo $email_err;?></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <small id="emailHelp" class="form-text text-muted err"><?php echo $pass_err;?></small>
  </div>
  <button type="submit" name="submit" class="btn btn-success w-100 mt-2 p-2">Login</button>
  </div>  
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>