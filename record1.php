<?php
include_once('connection.php');
$w=$_POST["w1"];
$query="Select week from userinfo where fn='$w'";
$result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
  <title>
    <head>RECORDS</head>
  </title>
<body>
  <table align="center" border="1px" style="width:100%">
    <tr>
      <th colspan="4"><h2>WORKER RECORD</h2></th>
    </tr>
      <t>
      <th>FIRST NAME</th>
      <th>LAST NAME</th>
      <th>WEEK</th>
    </t>
    <?php
    while($work=mysqli_fetch_assoc($result))
    {
    ?>
    <tr>
        <td><?php echo $work['fn']; ?></td>
        <<td><?php echo $work['ln']; ?></td>
        <td><?php echo $work['week']; ?></td>
    </tr>
    <?php
  }
  ?>
  </table>
  <a href="FinalHomePage.html"><h3 style="background: black; margin-left: auto; margin-right: auto">Go back to Home</h3></a>
</body>
</html>
