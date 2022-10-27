<?php
  session_start();

  if (!$_SESSION['logged_in']){
    $_SESSION['email'];
  }else {
    // header("location: login.php");
  }

  $user= $email = $lastname = "";

  if (isset($_GET['login'])){
    if ($_GET['login'] == 'successful'){
      $user = $_SESSION['user_firstname'];
      $id = $_SESSION['logged_in'];
      $email = $_SESSION['user_identity'];
      // $user = $_SESSION['user_lastname'];
    }
  }
 
?>

  <?php
  include('./header.php');
  ?>
<main>
  <div class="main-info">
    <img src="headerpk.jpeg" alt="">
 
</main>
<?php
  include('includes/footer.php')
?>