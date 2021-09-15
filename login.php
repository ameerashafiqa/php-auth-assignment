<?php
   if(isset($_POST['submit'])){
        $d = file_get_contents("users.txt");
        $data = explode("\n", $d);
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];
        foreach ($data as $row => $data) {

            $row_user = explode('|', $data);
            $users = @(strtolower($row_user[0]));
            $pass = @trim(strtolower($row_user[1]), "\r");

            if (strcmp($users,$Username) === 0 && strcmp($pass,$Password) === 0) {
                echo '<script>     alert("Success")
                                window.location = (\"index.php\")
                                </script>';
                break;
            }else{
                echo '<script>alert("Failed")</script>';
                break;
        }
        }

    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>e-KenderaanMDHT</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styleee.css">
</head>

<style>
  body {
    background-image: url(images/d.jpeg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
  }
</style>

<body>
  <form class="box" action="" method="post">
    <h1>Login</h1>
    <input type="text" autocomplete="off" name="Username" id="Username" placeholder="Username">
    <input type="Password" name="Password" id="Password" placeholder="Password">
    <input type="submit" name="submit" value="Login">
  </form>
</body>
</html>
