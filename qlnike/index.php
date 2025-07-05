<link rel="stylesheet" href="../qlnike/index.css">
<div class="login-box">
  <h2>Login</h2>
  <form action="login.php" method="post">
    <div class="user-box">
      <input type="text" name="th_tendn">
      <label>Username</label>
       <?php
            if(isset($_GET['tendn'])){
                echo $_GET['tendn'];
            }
        ?>
    </div>
    <div class="user-box">
      <input type="password" name="th_mk">
      <label>Password</label>
      <?php
            if(isset($_GET['mk'])){
                echo $_GET['mk'];
            }
        ?>
    </div>
    <a href="login.php">
    <button type="submit">Submit</button>
    </a>
  </form>
</div>