<?php include_once 'connection/db.php'; ?>
<?php  include_once 'connection/mysqli.php';?>


<?php
  session_start();
  if($_SESSION['logged_in'] != 1){
      header('location:index.php');
  }
  else{
    $getfullname = $_SESSION['get_fullname'];
    $getage = $_SESSION['get_age'];
    $getaddress = $_SESSION['get_address'];
    $getposition = $_SESSION['get_position'];
  }
?>


<?php
  if(isset($_POST['logout'])){

      $_SESSION['logged_in'] = 0;
      header('location: index.php');
  }
?>


<div class="container">
  <div class="container" id="title_container">
    <div class="container-fluid">
      <h1 class="brand">INVY- Inventory Management System</h1>
    </div>
    <?php if($_SESSION['get_position'] != 'USER') {?>
    <div class="btn-group">
      <a class="btn btn-default" href="home.php"><span class="fa fa-home"></span>&nbsp;&nbsp;Home</a>
      <a class="btn btn-default" href="add_stock.php"><span class="fa fa-cart-plus"></span>&nbsp;&nbsp;Add Stock</a>
      <a class="btn btn-default" href="stock_manager.php"><span class="fa fa-area-chart"></span>&nbsp;&nbsp;Stock Manager</a>
      <a class="btn btn-default" href="account_registration.php"><span class="fa fa-area-chart"></span>&nbsp;&nbsp;account Registration</a>
      <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> <span class="fa fa-user-circle"></span>
        <?php echo $getfullname; ?>&nbsp;&nbsp;<img src="images/online.png" width="10">&nbsp;&nbsp;<span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#" data-toggle="modal" data-target="#change">Change Password</a></li>
          <li>
            <form class="" action="header.php" method="post">
              <button class="btn btn-link" type="submit" name="logout">Logout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
    <?php } else {?>
    <!-- btn group end -->

    <div class="btn-group">
      <a class="btn btn-default" href="home.php"><span class="fa fa-home"></span>&nbsp;&nbsp;Home</a>
      <a class="btn btn-default" href="stock_manager.php"><span class="fa fa-area-chart"></span>&nbsp;&nbsp;Stock Manager</a>
      <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> <span class="fa fa-user-circle"></span>
        <?php echo $getfullname; ?>&nbsp;&nbsp;<img src="images/online.png" width="10">&nbsp;&nbsp;<span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#" data-toggle="modal" data-target="#change">Change Password</a></li>
          <li>
            <form class="" action="header.php" method="post">
              <button class="btn btn-link" type="submit" name="logout">Logout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>

    <?php }?>
  </div>
</div>




