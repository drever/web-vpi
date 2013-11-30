<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to Web-VPI</title>
<link href="../style_voyant2.css" rel="stylesheet" type="text/css" />
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
      $next=rand(1, 4);
switch ($next) {
    case 1:
        echo "couleurmot.php";
        break;
    case 2:
        echo "couleurson.php";
        break;
    case 3:
        echo "motmot.php";
        break;
    case 4:
        echo "sonmot.php";
        break;
        }
        echo "\">here</a>";
        
        ?>
      
      </h2>
    </div>
    <h1>More informations</h1>
    <h2>The approach : why such a special experiment?<a name="inedite" id="inedite"></a></h2>
    <h2>The investigation : why studying multisory perception of color?<a name="recherche" id="recherche"></a></h2>
    </p>
    <h2>The online survey : how does it work?<a name="oneline" id="oneline"></a></h2>
    </p>
  </div>
  <div id="footer">
Project done by Guillaume Dumas and Johannes Drever
  </div>
</body>
</html>
