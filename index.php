<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Ninja Gold</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/start/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
</head>
<body>
   <div class="wrapper">
     <div id="score">
       <p>Your gold</p>
       <div id="update_score">
         <?php
            if(!isset($_SESSION['gold'])) {
            echo "0";
          } else {
            echo $_SESSION['gold'];
          }
        ?>
       </div>
     </div>
     <div id="buildings">
       <div class="building" id="farm">
         <p>Farm</p>
         <p>(earns 10-20 golds)</p>
         <form action="process.php" method="post">
           <input type="hidden" name="building" value="farm" />
           <input type="submit" value="Find Gold!"/>
         </form>
       </div>
       <div class="building" id="cave">
         <p>Cave</p>
         <p>(earns 5-10 golds)</p>
         <form action="process.php" method="post">
           <input type="hidden" name="building" value="cave" />
           <input type="submit" value="Find Gold!"/>
         </form>
       </div>
       <div class="building" id="house">
         <p>House</p>
         <p>(earns 2-5 golds)</p>
         <form action="process.php" method="post">
           <input type="hidden" name="building" value="house" />
           <input type="submit" value="Find Gold!"/>
         </form>
       </div>
       <div class="building" id="casino">
         <p>Casino</p>
         <p>(earns/takes 0-50 golds)</p>
         <form action="process.php" method="post">
           <input type="hidden" name="building" value="casino" />
           <input type="submit" value="Find Gold!"/>
         </form>
       </div>
    </div><!--end of buildings</div>-->
      <button id="reset"><a href="logout.php">Reset game</a></button>
      <div id="activities">
      <span><strong><u>Activities</u></strong></span>
      <?php
      if($_SESSION['history'] != "" || $_SESSION['history'] != null ) {

        echo $_SESSION['history'];
    }
      ?>
  </div>
   </div><!--end of wrapper-->
</body>
</html>
