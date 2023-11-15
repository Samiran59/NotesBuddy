<?php
session_start();

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="test.css">
</head>

<body>

  <div class="header">
    <h2>Home Page</h2>
  </div>
  <script>
    function myFunc() {
      window.location.href = "home.html";
    }
  </script>
</body>

</html>