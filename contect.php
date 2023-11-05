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
              Contact Us
            </h2>
          </div>
          <form action="<?php $_php_self; ?>" method="post">
            <div>
              <input type="text" placeholder="Name" name="name" required />
            </div>
            <div>
              <input type="email" placeholder="Email" name="email" required />
            </div>
            <div>
              <input type="text" placeholder="Phone Number" name="phoneno" required />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" name="msg" required />
            </div>
            <div class="d-flex ">
              <button type="submit" name="sub">
                Send
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
$conn = mysqli_connect("localhost:3307", "root", "", "pro");
if (!$conn) {
  echo "sorry we cant conect";
}
if (isset($_POST['sub'])) {
$name = $_POST['name'];
$email = $_POST['email'];
  $phoneno = $_POST['phoneno'];
  $msg = $_POST['msg'];
  $insq1 = "SELECT * FROM inqury where phoneno = '$phoneno' AND email= '$email' ";
  $chack = mysqli_query($conn, $insq1);
  if (mysqli_num_rows($chack) !== 0) {
    echo "<script>
    alert('you can inqury only one time');
    </script>";
  }
  else if (mysqli_num_rows($chack) == 0){
    $insq = "INSERT INTO inqury(name, email, phoneno, message) VALUES ('$name','$email','$phoneno','$msg')";
    $inqu = mysqli_query($conn, $insq);
    echo "<script>
  alert('succes');
          </script>";
  }
}
?>