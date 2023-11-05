<?php
include("links.php");
include("nav.php");?>
<table border="3px solid black" align="center" class="table table-striped">
    <th>
        <td>regname</td>
        <td>regemail</td>
        <td>regphoneno</td>
        <td>pass</td>
    </th>
<?php
$conn=mysqli_connect("localhost:3307","root","","pro");
$show="SELECT * FROM reg";
$result = mysqli_query($conn,$show);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          ?>
<tr>
    <td><?php echo $row['regid'] ?></td>
    <td><?php echo $row['regname'] ?></td>
    <td><?php echo $row['regemail'] ?></td>
    <td><?php echo $row['regphoneno'] ?></td>
    <td><?php echo $row['regpass'] ?></td>
    <td><a href="del.php?id=<?php echo  $row['regid']?>">delete</a></td>
    <td></td>
</tr>


<?php
        }
      } else {
        echo "0 results";
      }
?>
