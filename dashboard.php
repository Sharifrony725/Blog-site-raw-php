 <?php 
 session_start();
 require_once 'header.php';
 if(!isset($_SESSION['user_id'])){
  echo "<script>window.location.href='index.php';</script>";
 } 
?>
            <!--state overview start-->
              <div class="row state-overview">
              <h1 style="margin: auto;"><?php echo $_SESSION['name']?></h1>
          
                 
              </div>
              <!--state overview end-->

<?php require_once'footer.php'?>