<?php

session_start();
$connect = mysqli_connect("mysql8.db4free.net:3307", "dianis", "coronita2794", "mascotas24");

if(isset($_POST["user"]) && isset($_POST["pass"])){
  $user = mysqli_real_escape_string($connect, $_POST["user"]);
  $pass = mysqli_real_escape_string($connect, $_POST["pass"]);
  $sql = "SELECT Usuario FROM usuarios WHERE Usuario='$user' AND Password='$pass'";
  $result = mysqli_query($connect, $sql);
  $num_row = mysqli_num_rows($result);
  if ($num_row == "1") {
    $data = mysqli_fetch_array($result);
    $_SESSION["user"] = $data["Usuario"];
    echo "1";
  } else {
    echo "error";
  }
} else {
  echo "error";
}

?>
