<?php
include_once('connection.php');
// Check conection
if ($con->connect_error) {
    die("conection failed: " . $con->conect_error);
}
else {
  //emailErr = $passErr = $passRErr = "";
  $fn = $_POST["fn"];
  $ln = $_POST["ln"];
  $psw = $_POST["psw"];
  $psw_repeat = $_POST["psw_repeat"];
  $address = $_POST["address"];
  $pin = $_POST["pin"];
  $phone=$_POST["phone"];
  $week=$_POST["week"];
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($fn)) {
      echo "First Name  is required";
    } else {
    if (empty($psw) ){
      echo "Password Field Empty";
    }
    if (empty($psw_repeat) ){
      if($psw!=$psw_repeat)
     echo "Password Field Empty. Please confirm Password OR Password Mismatch";
  }
}
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $sql = "Insert into userinfo values('$fn','$ln','$psw','$psw_repeat','$address','$pin','$phone','$week')";
  if (mysqli_query($con,$sql)) {

          echo '<script>

          window.location="thankyou.html";

          </script>';

  } else {
  echo "Error creating database: " . $con->error;
  }

  $con->close();
}
}


?>
