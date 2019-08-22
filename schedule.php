<?php
include_once('connection.php');
$query="Select * from location";
$query1="Select fn from userinfo where week='1'";
$query2="Select fn from userinfo where week='2'";
$query3="Select fn from userinfo where week='3'";
$query4="Select fn from userinfo where week='4'";
$result=mysqli_query($con,$query);
$result1=mysqli_query($con,$query1);
$result2=mysqli_query($con,$query2);
$result3=mysqli_query($con,$query3);
$result4=mysqli_query($con,$query4);
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
      <tr>
      <th>WEEK 1</th>
      <th>WEEK 2</th>
      <th>WEEK 3</th>
      <th>WEEK 4</th>
    </tr>

    <tr>
      <?php
      $i=1;
      while($work=mysqli_fetch_assoc($result))
      {
      ?>
        <td><?php echo $work['places'];?></td>
        <?php
        if($i%4==0)
        {?>
        </tr>
        <tr><?php
      }
      $i=$i+1;
    }
      ?>
    </tr>
  </table>
  <table align="center" border="1px" style="width:100%">
    <tr>
      <th colspan="4"><h2>WORKER RECORD</h2></th>
    </tr>
      <tr>
      <th>WEEK</th>
      <th>P1</th>
      <th>P2</th>
      <th>P3</th>
      <th>P4</th>
      <th>P5</th>
      <th>P6</th>
      <th>P7</th>
      <th>P8</th>
    </tr>
    <tr>
    <td>WEEK1</td>
    <?php
    while($work=mysqli_fetch_assoc($result1))
    {
    ?>
        <td><?php echo $work['fn']; ?></td>
        <?php
      }
      ?>
    </tr>
    <tr>
    <td>WEEK2</td>
    <?php
    while($work=mysqli_fetch_assoc($result2))
    {
    ?>
        <td><?php echo $work['fn']; ?></td>
        <?php
      }
      ?>
    </tr>
    <tr>
    <td>WEEK3</td>
    <?php
    while($work=mysqli_fetch_assoc($result3))
    {
    ?>
        <td><?php echo $work['fn']; ?></td>
        <?php
      }
      ?>
    </tr>
    <tr>
    <td>WEEK4</td>
    <?php
    while($work=mysqli_fetch_assoc($result4))
    {
    ?>
        <td><?php echo $work['fn']; ?></td>
        <?php
      }
      ?>
    </tr>

  </table>
  <a href="FinalHomePage.html"><h3 style="background: black; margin-left: auto; margin-right: auto">Go back to Home</h3></a>
</body>
</html>
