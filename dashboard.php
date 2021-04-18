<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="css/toast.css">
    <link rel="stylesheet" type='text/css' href="css/dashboard.php">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/toast.js"></script>


    <title>Document</title>
</head>
<body>
    
<nav class="navbar-top" id="top">
    <div class="inner">
      <p id="nav-text">My Dashboard</p>
    </div>
</nav>

<div class="toast-area" id="toasts">
  <div style="display: none">
    <div class="toast" id="clonemother">
      </div>
    </div>
  </div>

<nav>
    <a class="logo" href="">
    <?php
  session_start();
  $logedInUsername = $_SESSION['username'];
  $firstCharacter = strtoupper($logedInUsername[0]);
  ?>
    <h2 style="color:white"><?php echo($firstCharacter) ?></h2>
  </a> 



  <!-- <div class="label">Menu</div> -->
<div class="scrollbar" id="style-1">
  <a href=" ">
    <i class="fa fa-home fa-lg"></i>
    <span class="nav-text">Home</span>
  </a>

  <a href=" ">
    <i class="fa fa-user fa-lg"></i>
    <span class="nav-text">Profile</span>
  </a>
  
  <a href=" ">
      <i class="fa fa-envelope-o fa-lg"></i>
      <span class="nav-text">E-mail</span>
  </a>
  
  <div class="mid-block">

    <a href=" ">
     <i class="fa fa-users"></i>
      <span class="nav-text">Classes</span>
  </a>
  
  <a  href=" ">
  <i class="fa fa-calendar-alt"></i>
  <span class="nav-text">Calendar</span>
  </a>

  <a  href=" ">
    <i class="fa fa-flask fa-lg"></i>
    <span class="nav-text">Agenda</span>
  </a>

  <a  href=" ">
    <i class="fa fa-pencil"></i>
    <span class="nav-text">Homework</span>
  </a>
  <a  href=" ">
    <i class="fa fa-check"></i>
    <span class="nav-text">Grades</span>
  </a>
   
  </div>
   <a href=" ">
    <i class="fa fa-book fa-lg"></i>
    <span class="nav-text">Documentation</span>
  </a>
  <a href=" ">
   <i class="fa fa-cog fa-lg"></i>
    <span class="nav-text">Setting</span>
  </a>
  <a href=" ">
    <i class="fa fa-question-circle fa-lg"></i>
    <span class="nav-text">Help</span>
  </a>
</div> 
</nav>


</body>

</html>