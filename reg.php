<?php
include("links.php");
include("nav.php");
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
                Regstration
              </h2>
            </div>
            <form action="<?php $_php_self; ?>" method="post">
              <div>
                <input name="name" type="text" placeholder="Name"  required/>
              </div>
              <div>
                <input name="email" type="email" placeholder="Email" required />
              </div>
              <div>
                <input name="phonenumber" type="text" placeholder="Phone Number" required />
              </div>
              <div>
                <input name="pass" type="password"  placeholder="password"  required/>
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
$name=$_POST['name'];
$email=$_POST['email'];
$phoneno=$_POST['phonenumber'];
$pass=$_POST['pass'];
$reginsquery="INSERT INTO reg(regname, regemail, regphoneno, regpass) VALUES ('$name','$email','$phoneno','$pass')";
$insreg=mysqli_query($conn,$reginsquery);
if ($insreg) {
  echo "<script>
  alert('succes');
          </script>";
}
}
?>