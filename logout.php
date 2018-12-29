<?php
  if (isset($_GET['logout'])) {
    shell_exec("/usr/bin/nohup killall Xorg 2>/tmp/log.txt &");
  }
  if (isset($_GET['restart'])) {
    shell_exec("/bin/su --login -c reboot 2>/tmp/log.txt &");
  }
  if (isset($_GET['shutdown'])) {
   shell_exec("/var/www/html/slide/logout.sh 2> /tmp/log.txt &");
  }
  if (isset($_GET['cancel'])) {
    echo "cancel";
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    background-image: url("img/logout/white_circle/bg.png");
    background-size:100%;
    background-repeat: no-repeat;
}
* {
    box-sizing: border-box;
}

/* center */
.centered-box {
    width: 500px;
    left: 50%;
    top: 43vh;

    margin-left: -250px;
    position: fixed;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 10px;
    text-align: center; 
}
.column:hover {
    background: url("img/logout/highlight.png");
    background-size:50%;
    background-repeat: no-repeat;
    background-position: center; 
    text-align: center; 
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

p  {
    color: #FFF;
    font-size: 60%;
    text-align: center; 
}
</style>
</head>
<body>
<div class="centered-box">
  <div class="column">
   <a href="logout.php?logout=true"><img src="img/logout/white_circle/icons/logout.png" height="48" width="48"></a>
     <p>Logout</p>
  </div>
  <div class="column">
   <a href="logout.php?restart=true"><img src="img/logout/white_circle/icons/restart.png" height="48" width="48"></a>
     <p>Restart</p>
  </div>
  <div class="column">
    <a href="logout.php?shutdown=true"><img src="img/logout/white_circle/icons/shutdown.png" height="48" width="48"></a>
     <p>Shutdown</p>
  </div>
  <div class="column">
    <a href="logout.php?cancel=true"><img src="img/logout/white_circle/icons/cancel.png" height="48" width="48"></a>
     <p>Cancel</p>
  </div>
</div>

</body>
</html>
