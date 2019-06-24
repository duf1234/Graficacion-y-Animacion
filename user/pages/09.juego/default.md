---
title: Juego
date: '11:36 17-06-2019'
---

<html>
<head>
<meta name="viewport" content="width=30, initial-scale=1.0"/>
<style>
canvas {
    border:0x solid #f3ff;
    background-color: #30fff1;

}
      

</style>
</head>
<body onload="startGame()">

<script>
        var myGamePiece;
        var myObstacles = [];
        var myScore;
        var myObstacleup;
        var myObstacledown;
        var myinfo;
        function startGame() {
            //    myGamePiece = new component(30, 30, "smiley.gif", 10, 120, "image");

            myGamePiece = new component(30, 20, "smiley.gif", 15, 50,"image");
            myScore = new component("20px", "Consolas", "black", 280, 40, "text");
            myinfo = new component("12px", "Consolas", "black", 30, 60, "text"); //instruccion
            myObstacleup  = new component(480, 10, "green", 0, 0);
            myObstacledown  = new component(480, 270, "green",0, 260); 
            myGameArea.start();
        }
        var myGameArea = {
            canvas : document.createElement("canvas"),
            start : function() {
                this.canvas.width = 480;
                this.canvas.height = 270;
                this.context = this.canvas.getContext("2d");
                document.body.insertBefore(this.canvas, document.body.childNodes[0]);
                this.frameNo = 0;
                this.interval = setInterval(updateGameArea, 20);
                window.addEventListener('keydown', function (e) {
                    myGameArea.key = e.keyCode;
                })
                window.addEventListener('keyup', function (e) {
                    myGameArea.key = false;
                })
            },
            clear : function() {
                this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
            },
            stop : function() {
                clearInterval(this.interval);
            }
        }
        function component(width, height, color, x, y, type) {
        this.type = type;
        if (type == "image") {
        this.image = new Image();
        this.image.src = color;
        }
            this.width = width;
            this.height = height;
            this.speedX = 0;
            this.speedY = 3;    
            this.x = x;
            this.y = y; 
            this.gravity = 0.00005;
            this.gravitySpeed = 0.3;
            this.bounce = 0.7;
            this.update = function() {
                ctx = myGameArea.context;
                if (type == "image") {
                ctx.drawImage(this.image, this.x, this.y, this.width, this.height);
                } else {
                ctx.fillStyle = color;
                ctx.fillRect(this.x, this.y, this.width, this.height);
                }

                if (this.type == "text") {
                    ctx.font = this.width + " " + this.height;
                    ctx.fillStyle = color;
                    ctx.fillText(this.text, this.x, this.y);
                } else {
                    ctx.fillStyle = color;
                    ctx.fillRect(this.x, this.y, this.width, this.height);
                }
            }
            this.newPos = function() {
                this.gravitySpeed += this.gravity;
                this.x += this.speedX;
                this.y += this.speedY + this.gravitySpeed;
                this.hitBottom();
            }
            this.hitBottom = function() {
                var rockbottom = myGameArea.canvas.height - this.height;
                if (this.y > rockbottom) {
                    this.y = rockbottom;
                    this.gravitySpeed = -(this.gravitySpeed * this.bounce);
                }
            }
            this.crashWith = function(otherobj) {
                var myleft = this.x;
                var myright = this.x + (this.width);
                var mytop = this.y;
                var mybottom = this.y + (this.height);
                var otherleft = otherobj.x;
                var otherright = otherobj.x + (otherobj.width);
                var othertop = otherobj.y;
                var otherbottom = otherobj.y + (otherobj.height);
                var crash = true;
                if ((mybottom < othertop) || (mytop > otherbottom) || (myright < otherleft) || (myleft > otherright)) {
                    crash = false;
                }
                return crash;
            }
        }

        function updateGameArea() {
            var x, height, gap, minHeight, maxHeight, minGap, maxGap;
            for (i = 0; i < myObstacles.length; i += 1) {
                if (myGamePiece.crashWith(myObstacles[i])) {
                    myGameArea.stop();
                    return;
                } 
            }
            myGameArea.clear();
            myGameArea.frameNo += 1;
            if (myGameArea.frameNo == 1 || everyinterval(150)) {
                x = myGameArea.canvas.width;
                minHeight = 20;
                maxHeight = 200;
                height = Math.floor(Math.random()*(maxHeight-minHeight+1)+minHeight);
                minGap = 50;
                maxGap = 200;
                gap = Math.floor(Math.random()*(maxGap-minGap+1)+minGap);
                myObstacles.push(new component(10, height, "green", x, 0));
                myObstacles.push(new component(480, 10, "green", 0, 0)); // agregado arriba
                myObstacles.push(new component(480, 270, "green",0, 260)); // agregado abajo
                myObstacles.push(new component(10, x - height - gap, "green", x, height + gap));
            }
            for (i = 0; i < myObstacles.length; i += 1) {
              //  myObstacles[i].x += -1;
              if (myGameArea.frameNo < 500){
                myinfo.text ="precione tecla de direccion ↑|| precione tecla de direccion ↓"
                myObstacles[i].x += -1;  // velocidad del 
        }else{
            if (myGameArea.frameNo < 1000){

                myObstacles[i].x += -1.5;  // velocidad del 
                }else{
                     if (myGameArea.frameNo < 1500){
                        myObstacles[i].x += -2;

                     }else{
                        if (myGameArea.frameNo < 1500) {
                             myObstacles[i].x += -2.5;
                        }else{
                            if (myGameArea.frameNo < 1500) {
                             myObstacles[i].x += -3;
                            }
                            else{
                             myObstacles[i].x += -3.5;  
                            }
                        }
                     }

                }   
        }
                myObstacles[i].update();
            }
            myScore.text = "SCORE: " + myGameArea.frameNo;
           // myinfo.text ="precione tecla de direccion ↑|| precione tecla de direccion ↓"
            myScore.update();
            myinfo.update();
            myGamePiece.speedX = 0;
            myGamePiece.speedY = 0;
            myObstacleup.x -= 0; 
            myObstacledown.x -= 0;  
             myGamePiece.image.src = "angry.gif";   // imagen
            if (myGameArea.key && myGameArea.key == 38) {myGamePiece.speedY = -1; }
            if (myGameArea.key && myGameArea.key == 40) {myGamePiece.speedY = 1; }
                    myObstacleup.update();
        myObstacledown.update();
            myGamePiece.newPos();    
            myGamePiece.update();
        }

        function clearmove() {
        myGamePiece.image.src = "smiley.gif";
        myGamePiece.speedX = 0; 
        myGamePiece.speedY = 0; 
}

        function everyinterval(n) {
            if ((myGameArea.frameNo / n) % 1 == 0) {return true;}
            return false;
        }
    </script>
<form method="get" action="https://thebrayanmina.com/juego">
<input type="submit" value="Repetir" />
</body>
</html>