<?php
session_start();
?>
<style>
.header_section{
    background: #000;
}
</style>
<header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              Neogym
            </span>
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">about user</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contect.php">contect</a>
                </li>
                <li class="nav-item">
                  <form action="<?php $_php_self; ?>" method="post">
                  <input type="submit" value="logout" name="logout">
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
<?php
if(isset($_POST['logout'])){
  header("location:..");
}
?>