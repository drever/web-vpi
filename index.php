<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Welcome to Web-VPI</title>
	<link href="css/vpi.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div id="header">
    <h1>Welcome to Web-VPI</h1>
  </div>
  You will interact with a Virtual Partner. Your goal is to synchronize your movement in-phase with it thanks to your mouse.
    <div id="container">
    <div id="entrer">
    <a name="entree" id="entree"></a>
      <h2>To begin, click 
      <?php
      $_SESSION['xp'] = 0;
      echo "<a class=\"here\" href=\"";
        echo "trial.php";
        echo "\">here.</a>";        
        ?>
      
      </h2>
    </div>
  </div>
  <div id="footer">
<i>Project done by Guillaume Dumas and Johannes Drever</i>
<br>
<br>
<h2><u>References:</u></h2>
- <a href="http://www.scholarpedia.org/article/Haken-Kelso-Bunz_model">Kelso JAS (2008), Haken-Kelso-Bunz model. Scholarpedia, 3(10):1612. </a>
<br><br>
- <a href="www.plosone.org/article/info:doi%2F10.1371%2Fjournal.pone.0005749">Kelso JAS, de Guzman GC, Reveley C, Tognoli E (2009) Virtual Partner Interaction (VPI): Exploring Novel Behaviors via Coordination Dynamics. PLoS ONE 4(6): e5749. doi:10.1371/journal.pone.0005749</a>
  </div>
</body>
</html>
