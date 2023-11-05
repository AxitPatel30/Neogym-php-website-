<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
include("links.php");
include("nav.php");?>
<table border="3px solid black" align="center" class="table table-striped">
    <th>
        <td>inqname</td>
        <td>inqemail</td>
        <td>inqphoneno</td>
        <td>massage</td>
    </th>
<?php
$conn=mysqli_connect("localhost:3307","root","","pro");
$show="SELECT * FROM inqury";
$result = mysqli_query($conn,$show);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          ?>
<tr>
    <td><?php echo $row['inqid'] ?></td>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['phoneno'] ?></td>
    <td><?php echo $row['message'] ?></td>
</tr>


<?php
        }
      } else {
        echo "0 results";
      }
?>

</body>
</html>