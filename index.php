<?php include 'header.php';?>
<div class="container">
  <div class="starter-template">
    <h1>wang is cool</h1>
    <form action="control.php" method="post" class="form-group">
      <input type="email" name="email" class="form-control"/>
      <input type="password" name="password" class="form-control">
      <input type="hidden" name="page" value="login"/>

      <?php 
      $wang ="show this input";
      echo "wang";
      session_start('wang');    
      ?>
      <div class="img-thumbnail"><img src="Picture/img1.png"/></div>
      <button>Go to other php</button>
    </form>
  </div>
</div>  
<?php include 'footer.php';?>
