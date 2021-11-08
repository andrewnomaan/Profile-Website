<?php
  include 'db_connect.php';
  if(!isset($_SESSION['login'])||$_SESSION['login']==''){
       ?>
        <script>
            window.location="login.php";
        </script>
       <?php
  }
?>