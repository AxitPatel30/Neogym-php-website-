<style>
    h1{
        text-align: center;
    }
    table{
        text-align: center;
        margin: auto;
        margin-top:15%;
    }
    tr:nth-child(even){
        background-color: gray;
    }
</style>

<?php
$conn=mysqli_connect("localhost:3307","root","","pro");
if(!$conn){
 echo "sorry we cant conect";
}
include("links.php");
include("nav.php");
$loguser=$_SESSION['usname'];
$sql = "SELECT * FROM `reg` WHERE regname = '$loguser'";
      $chackq=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($chackq);
?>
<table border="5px solid black">
    <tr>
        <td colspan="2">your data from neo gym</td>
    </tr>
    <tr>
        <td>your id</td>
        <td><?php echo $data['regid'] ?></td>
    </tr>
    <tr>
        <td>your name</td>
    <td><?php echo $data['regname'] ?></td>
    </tr>
    <tr>
        <td>your registered email</td>
    <td><?php echo $data['regemail'] ?></td>
    </tr>
    <tr>
        <td>your ragistered phoneno</td>
    <td><?php echo $data['regphoneno'] ?></td>
    </tr>
    <tr>
        <td>your password</td>
    <td><?php echo $data['regpass'] ?></td>
    </tr>
</table>