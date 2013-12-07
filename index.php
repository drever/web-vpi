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
  <div id="container">
    <div id="consigne">
      <h1>Instruction</h1>
    </div>
    <div id="entrer">
    <a name="entree" id="entree"></a>
      <h2>To begin, click </h2>
      <h2 class="here">

      <?php
      $_SESSION['xp'] = 0;
      echo "<a class=\"here\" href=\"";
        echo "trial.php";
        echo "\">here</a>";
        
        ?>
      
      </h2>
    </div>
  </div>
  <div id="footer">
Project done by Guillaume Dumas and Johannes Drever
  </div>
</body>
</html>
