// Layout and graphic related
var centerX = 500;
var scale = 150;

var canvas = document.getElementById('myCanvas');
var context = canvas.getContext('2d');

window.requestAnimFrame = (function(){
   return window.requestAnimationFrame       ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame    ||
              function( callback ){
                window.setTimeout(callback, 1000 / 60);
              };
   })();

// Position, velocity and acceleration 
var x1 = 0.1;
var x2 = 0;
var x1d = 0;
var x1dd = 0;
var x2d = 0
var x2dd = 0;

var mouseListenerCount = 0;
var mouseListenerStart = new Date().getTime() / 1000;
var mouseListener_dt = 0;

(function animloop(){
    requestAnimFrame(animloop);
    updateHKB();
    render();
})();
          
canvas.addEventListener('mousemove', function(evt) {
    var mousePos = getMousePos(evt);
    
    mouseListenerCount++;
    now = new Date().getTime() / 1000;
    mouseListener_dt = 1 / (mouseListenerCount / (now - mouseListenerStart));
   
    x2new = -(centerX - mousePos.x) /  scale;
	x2d = (x2 - x2new) * mouseListener_dt;
	x2 = x2new; 

}, false);

function drawCircle(centerX, centerY) {    
    var radius = 30;

    context.beginPath();
    context.arc(centerX, centerY, radius, 0, 2 * Math.PI, false);
    context.fillStyle = 'green';
    context.fill();
    context.lineWidth = 4;
    context.strokeStyle = '#000000';
    context.stroke();
}

function getMousePos(evt) {
   var rect = canvas.getBoundingClientRect();
   return {
       x: evt.clientX - rect.left,
       y: evt.clientY - rect.top
       };
   }

function render(){
    canvas.width = canvas.width;    
    drawCircle(x1 * scale + centerX, 200);
    drawCircle(x2 * scale + centerX, 400);        
}        

function updateHKB(){
   R = -2*k/(1+4*k); 
   x1dd = 
       (x1d - mu * x2d) * A * (1 + R * Math.pow((x1 - mu * x2), 2)) 
       - Math.pow(omega, 2) * x1 
       - x1d * (alpha * Math.pow(x1, 2) + beta * Math.pow(x1d, 2) - gamma);        
   x1d += dt * x1dd;
   x1 += dt * x1d;
}
