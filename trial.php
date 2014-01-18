<!DOCTYPE HTML>
<html>
   <head>
       <link href="css/vpi.css" rel="stylesheet" type="text/css">
       <title>Trial</title>
   </head>
   <body>
       <div style="height:580px;width:1050px;">
        <canvas id="myCanvas" width="1000" height="500" class="vpi-canvas"></canvas>

        <script>
<?php 
        $trialDuration = 20 * 1000; // [s * 1000]
        $mu = (2 * rand(0, 1)) - 1;
        $a = myRand(0, 3);
        $k = myRand(0, 1);
        echo "var mu = ".$mu.";";
        echo "var A = ".$a.";";
        echo "var B = -0.025;";
        echo "var dt = 0.01;";
        echo "var omega = 1. * 2 * 3.142;";
        echo "var alpha = 0.641;";
        echo "var beta = 0.05;";
        echo "var gamma = 12.457;";
        echo "var k = ".$k.";";
        ?>
        </script>
        <script>
        <?php
           echo "var timer = setInterval(trialEnd,".$trialDuration.");";
        ?>
        function trialEnd(){
           <?php echo "window.location = 'answer.php?mu=".$mu."&k=".$k."&a=".$a."';" ?>
        }
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
