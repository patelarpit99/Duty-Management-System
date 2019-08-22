<?php
include_once('connection.php');
// Check conection
if ($con->connect_error) {
    die("connection failed: " . $con->conect_error);
}
else {
  //emailErr = $passErr = $passRErr = "";
  $fn = $_POST["fn"];
  $msg = $_POST["message"];
  $sql = "Insert into feedback values('$fn','$msg')";
  if (mysqli_query($con,$sql)) {
    echo '<script>

    window.location="thankyou.html";

    </script>';
  } else {
  echo "Error creating database: " . $con->error;
  }

  $con->close();
}
?>
