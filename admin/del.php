<?php 
$id=$_GET['id'];
$conn=mysqli_connect("localhost:3307","root","","pro");
$del="DELETE FROM `reg` WHERE regid=$id";
$result = mysqli_query($conn,$del);
if ($result) {
    echo  "
     <script>
         alert('sorry cant delete data try agein');
     </script>
     ";
     header("location:reg.php");
    }
    else {
    header("location:reg.php");
}
?>