<!DOCTYPE HTML>
<html>
   <head>
       <link href="css/vpi.css" rel="stylesheet" type="text/css">
       
       <title>Trial</title>
   </head>
   <body>
       <canvas id="myCanvas" width="1000" height="500" class="vpi-canvas"></canvas>
       <div>
        <script>
<?php 
        $mu = (2 * rand(0, 1)) - 1;
        echo "var mu = ".$mu.";";
        echo "var A = ".myRand(0, 1).";";
        echo "var B = -0.025;";
        echo "var dt = 0.01;";
        echo "var omega = 1.6 * 2 * 3.142;";
        echo "var alpha = 0.641;";
        echo "var beta = 0.05;";
        echo "var gamma = 12.457;";
        echo "var k = ".myRand(0, 1).";";
        ?>
        </script>
        <script>
           <?php
           echo "var timer = setInterval(function(){alert('Hello')},3000);";
        ?>
        </script>
           <script src="js/vpi.js"></script>
       </div>
  </body>
</html>

<?php
        function myRand($min, $max, $nSamples=100){
            $value = rand(0, $nSamples);
            return $min + (($value / $nSamples) * ($max - $min));
        }
?>
