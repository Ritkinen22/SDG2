<?php
  session_start();

  if (!$_SESSION['logged_in']){
    $_SESSION['email'];
  }else {
    // header("location: login.php");
  }

  $user= $email = $lastname = "";
  // denied the browsers 

  if (isset($_GET['login'])){
    if ($_GET['login'] == 'successful'){
      $user = $_SESSION['user_firstname'];
      $id = $_SESSION['logged_in'];
      $email = $_SESSION['user_identity'];
      // $user = $_SESSION['user_lastname'];
    }
  }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<header>
      <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand text-light" href="index.html"> The Life Changer</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav move-item">
            <li class="nav-item active">
              <a class="nav-link text-light" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="about.php">About</a>
            </li>
            <li cRlass="nav-item">
              <a class="nav-link text-light" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light " href="target.php">Target</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light " href="team.php">Team</a>
            </li>

            <?php
              if($_SESSION['logged_in']){
            ?>
                
                        
          
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <!-- <img class="img-xs rounded-circle ml-2" id="userImg" src="" alt="Profile image"></a> -->
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <!-- <img class="img-md rounded-circle" src="" alt="Profile image"> -->
                <p class="mb-1 mt-3"><?=$user; ?><span class="font-weight-normal"><?php //echo $_SESSION['user_lastname']; ?></span></p>
                <p class="font-weight-light text-muted mb-0"><?=$email; ?></p>
              </div>
              <a class="dropdown-item" href="edit.php?action=<?php echo $id ?>"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger"></span></a>
              <!-- <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
              <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
              <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a> -->
              <a href="logout.php" class="dropdown-item btn btn-danger"><i class="dropdown-item-icon icon-power text-primary"></i> LogOut</a>
            </div>
          </li>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="collapse" data-target="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </ul> 
      </div>
                <?php
                  }else{
  
                ?>
                      <li class="nav-item">
                        <a class="nav-link text-light" href="login.php">Login</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-light" href="signup.php">Sign Up</a>
                      </li>
                <?php
                  }
                ?>
                
                <!-- <li class="nav-item">
                  <a class="nav-link text-light " href="logout.php">Logout</a>
                </li> -->

              </ul>
            </div>
          </nav>
</header>