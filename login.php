<?php
session_start();
include("links.php");
include("nav.php")
?>
<section class="contact_section ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="form_container pr-0 pr-lg-5 mr-0 mr-lg-2">
            <div class="heading_container">
              <h2>
                LOGIN
              </h2>
            </div>
            <form action="<?php $_php_self; ?>" method="post">
                <div>
                  <input name="name" type="text" placeholder="Name"  required />
                </div>
              <div>
                <input name="email" type="email" placeholder="Email"   required/>
              </div>
              <div>
              <input name="pass" type="password"  placeholder="password"  required />
              </div>
              <div class="d-flex ">
              <button type="submit" name="sub">
                send
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
$conn=mysqli_connect("localhost:3307","root","","pro");
if(!$conn){
 echo "sorry we cant conect";
}
if(isset($_POST['sub'])){
$name= $_POST['name'];
$email= $_POST['email'];
$pass=$_POST['pass'];
    if ($name == 'admin' AND $pass =='admin@123' AND $email=='admin@123') {
      header("location:./admin");
    }
    else{ 
      $_SESSION["usname"]=$name;
      $sql = "SELECT * FROM `reg` WHERE regname = '$name' AND regpass = '$pass' AND regemail = '$email'";
      $chackq=mysqli_query($conn,$sql);
      if (mysqli_num_rows($chackq) === 1) {

        $row = mysqli_fetch_assoc($chackq);
        echo $row['regname']; 
        if ($row['regname'] === $name && $row['regpass'] === $pass && $row['regemail'] === $email) {
        header("location:./user");
      }
    }
      else{
        echo"
        <script>
        alert('enter velid usernmae or password')
        </script>
        ";
      }
  }
}
  
?>
