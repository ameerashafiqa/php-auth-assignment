<?php
   if(isset($_POST['submit'])){
        $d = file_get_contents("users.txt");
        $data = explode("\n", $d);
        $username = $_POST['username'];
        $password = $_POST['password'];
        foreach ($data as $row => $data) {

            $row_user = explode('|', $data);
            $users = @(strtolower($row_user[0]));
            $pass = @trim(strtolower($row_user[1]), "\r");

            if (strcmp($users,$username) === 0 && strcmp($pass,$password) === 0) {
                echo '<script>alert("Success")</script>';
                break;
            }else{
                echo '<script>alert("Failed")</script>';
                break;
        }
        }

    }
?>

<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method ="POST">
  <label for="username">First name:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">Last name:</label><br>
  <input type="password" id="password" name="password"><br><br>
  <input type="submit" name="submit" value="Login">
</form> 




</body>
</html>
