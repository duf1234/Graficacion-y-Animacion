<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Page:/var/www/html/grav/user/pages/02.home */
class __TwigTemplate_4a202663a153050c652f0ec38586328814eb293e898fbba57aeaa40f943a939e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<html><head>
    <title>PIXI Concentration</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>
    <script src=\"pixi.dev.js\"></script>
</head>

<body>
    <p id=\"Score\">Puntaje: 6 Nivel: 1</p>
    <script>
            //Mis variables
            var nivel = 1;
            var tamanoA = 4;
            var tamanoB = 6;
            var dimensionesA = 350;
            var dimensionesB = 500;
            var totalFicha = tamanoA * tamanoB;
            // first tile picked up by the player
            var firstTile = null;
            // second tile picked up by the player
            var secondTile = null;
            // can the player pick up a tile?
            var canPick = true;
            // create an new instance of a pixi stage with a grey background
            var stage = new PIXI.Stage(0xffffff);
            // create a renderer instance width=640 height=480
            //var renderer = PIXI.autoDetectRenderer(640, 480);
            var renderer = PIXI.autoDetectRenderer(dimensionesA,dimensionesB);
            // importing a texture atlas created with texturepacker
            var tileAtlas = [\"images.json\"];
            // create a new loader
            var loader = new PIXI.AssetLoader(tileAtlas);
            // create an empty container
            var gameContainer = new PIXI.DisplayObjectContainer();
            // add the container to the stage
            stage.addChild(gameContainer);
            // add the renderer view element to the DOM
            document.body.appendChild(renderer.view);
            // use callback
            loader.onComplete = onTilesLoaded
            //begin load
            loader.load();
            //agregando puntaje
            var score = 0;
            //Agregando el sonido

            function onTilesLoaded() {
                // choose 24 random tile images
                var chosenTiles = new Array();
                while (chosenTiles.length < 48) {
                    var candidate = Math.floor(Math.random() * 44);
                    if (chosenTiles.indexOf(candidate) == -1) {
                        chosenTiles.push(candidate, candidate)
                    }
                }
                // shuffle the chosen tiles
                for (i = 0; i < (tamanoA * tamanoB) * 2; i++) {
                    var from = Math.floor(Math.random() * (tamanoA * tamanoB));
                    var to = Math.floor(Math.random() * (tamanoA * tamanoB));
                    var tmp = chosenTiles[from];
                    chosenTiles[from] = chosenTiles[to];
                    chosenTiles[to] = tmp;
                }
                // place down tiles
                // Se definen las casillas que se renderizaran
                for (i = 0; i < tamanoA; i++) {
                    for (j = 0; j < tamanoB; j++) {
                        // new sprite
                        var tile = PIXI.Sprite.fromFrame(chosenTiles[i * 6 + j]);
                        // buttonmode+interactive = acts like a button
                        tile.buttonMode = true;
                        tile.interactive = true;
                        // is the tile selected?
                        tile.isSelected = false;
                        // set a tile value
                        tile.theVal = chosenTiles[i * 6 + j]
                        // place the tile
                        tile.position.x = 7 + i * 80;
                        tile.position.y = 7 + j * 80;
                        // paint tile black
                        tile.tint = 0x000000;
                        // set it a bit transparent (it will look grey)
                        tile.alpha = 0.5;
                        // add the tile
                        gameContainer.addChild(tile);
                        // mouse-touch listener
                        tile.mousedown = tile.touchstart = function (data) {
                            // can I pick a tile?
                            if (canPick) {
                                // is the tile already selected?
                                if (!this.isSelected) {
                                    // set the tile to selected
                                    this.isSelected = true;
                                    // show the tile
                                    this.tint = 0xffffff;
                                    this.alpha = 1;
                                    // is it the first tile we uncover?
                                    if (firstTile == null) {
                                        firstTile = this
                                    }
                                    // this is the second tile
                                    else {
                                        secondTile = this
                                        // can't pick anymore
                                        canPick = false;
                                        // did we pick the same tiles?
                                        if (firstTile.theVal == secondTile.theVal) {
                                            // wait a second then remove the tiles and make the player able to pick again
                                            setTimeout(function () {
                                                gameContainer.removeChild(firstTile);
                                                gameContainer.removeChild(secondTile);
                                                firstTile = null;
                                                secondTile = null;
                                                canPick = true;

                                            }, 800);
                                            //Aumenta 20 puntos si el usuario acerto
                                            score += 20;
                                            console.log('es correcto', score);
                                            //alert(\"Felicidades has acertado tienes buena memoria :) tu SCORE: \"+score);
                                            document.getElementById('Score').innerHTML = \"Puntaje: \" + score + \" Nivel: \" + nivel;

                                            var audioElement = document.createElement('audio');

                                            // indicamos el archivo de audio a cargar
                                            audioElement.setAttribute('src', 'Sounds/Woosh.mp3');
                                            audioElement.setAttribute('autoplay', 'autoplay');

                                            if (totalFicha == 0) {

                                                alert(\"Ganaste!! pasar siguiente nivel\");
                                                nivel = nivel + 1;
                                                switch (nivel) {
                                                    case 2:
                                                        tamanoA = 5;
                                                        tamanoB = 6;
                                                        dimensionesA = 600;
                                                        dimensionesB = 680;
                                                        totalFicha = tamanoA * tamanoB;
                                                        //onTilesLoaded();
                                                        loader.load();
                                                        document.getElementById('Score').innerHTML = \"Puntaje: \" + score + \" Nivel: \" + nivel;
                                                        break;

                                                    case 3:
                                                        tamanoA = 6;
                                                        tamanoB = 6;
                                                        dimensionesA = 480;
                                                        dimensionesB = 480;
                                                        totalFicha = tamanoA * tamanoB;
                                                        loader.load();
                                                        document.getElementById('Score').innerHTML = \"Puntaje: \" + score + \" Nivel: \" + nivel;
                                                        break;

                                                    case 4:
                                                        tamanoA = 6;
                                                        tamanoB = 8;
                                                        dimensionesA = 480;
                                                        dimensionesB = 650;
                                                        totalFicha = tamanoA * tamanoB;
                                                        loader.load();
                                                        document.getElementById('Score').innerHTML = \"Puntaje: \" + score + \" Nivel: \" + nivel;
                                                        break;

                                                }
                                            }
                                        }
                                        // we picked different tiles
                                        else {
                                            // wait a second then cover the tiles and make the player able to pick again
                                            setTimeout(function () {
                                                firstTile.isSelected = false
                                                secondTile.isSelected = false
                                                firstTile.tint = 0x000000;
                                                secondTile.tint = 0x000000;
                                                firstTile.alpha = 0.5;
                                                secondTile.alpha = 0.5;
                                                firstTile = null;
                                                secondTile = null;
                                                canPick = true
                                                //Disminuye dos puntos si el usuario no acerto
                                                score -= 2;
                                                console.log('es incorrecto', score);
                                                document.getElementById('Score').innerHTML = \"Puntaje: \" + score + \" Nivel: \" + nivel;
                                                //alert(\"Oh no te has equivocado, come mas sardina :) tu SCORE : \" + score);
                                            }, 800);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                requestAnimFrame(animate);
            }
            function animate() {
                requestAnimFrame(animate);
                renderer.render(stage);
            }
    </script><canvas width=\"350\" height=\"500\" style=\"cursor: inherit;\"></canvas>

</body></html>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/grav/user/pages/02.home";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<html><head>
    <title>PIXI Concentration</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>
    <script src=\"pixi.dev.js\"></script>
</head>

<body>
    <p id=\"Score\">Puntaje: 6 Nivel: 1</p>
    <script>
            //Mis variables
            var nivel = 1;
            var tamanoA = 4;
            var tamanoB = 6;
            var dimensionesA = 350;
            var dimensionesB = 500;
            var totalFicha = tamanoA * tamanoB;
            // first tile picked up by the player
            var firstTile = null;
            // second tile picked up by the player
            var secondTile = null;
            // can the player pick up a tile?
            var canPick = true;
            // create an new instance of a pixi stage with a grey background
            var stage = new PIXI.Stage(0xffffff);
            // create a renderer instance width=640 height=480
            //var renderer = PIXI.autoDetectRenderer(640, 480);
            var renderer = PIXI.autoDetectRenderer(dimensionesA,dimensionesB);
            // importing a texture atlas created with texturepacker
            var tileAtlas = [\"images.json\"];
            // create a new loader
            var loader = new PIXI.AssetLoader(tileAtlas);
            // create an empty container
            var gameContainer = new PIXI.DisplayObjectContainer();
            // add the container to the stage
            stage.addChild(gameContainer);
            // add the renderer view element to the DOM
            document.body.appendChild(renderer.view);
            // use callback
            loader.onComplete = onTilesLoaded
            //begin load
            loader.load();
            //agregando puntaje
            var score = 0;
            //Agregando el sonido

            function onTilesLoaded() {
                // choose 24 random tile images
                var chosenTiles = new Array();
                while (chosenTiles.length < 48) {
                    var candidate = Math.floor(Math.random() * 44);
                    if (chosenTiles.indexOf(candidate) == -1) {
                        chosenTiles.push(candidate, candidate)
                    }
                }
                // shuffle the chosen tiles
                for (i = 0; i < (tamanoA * tamanoB) * 2; i++) {
                    var from = Math.floor(Math.random() * (tamanoA * tamanoB));
                    var to = Math.floor(Math.random() * (tamanoA * tamanoB));
                    var tmp = chosenTiles[from];
                    chosenTiles[from] = chosenTiles[to];
                    chosenTiles[to] = tmp;
                }
                // place down tiles
                // Se definen las casillas que se renderizaran
                for (i = 0; i < tamanoA; i++) {
                    for (j = 0; j < tamanoB; j++) {
                        // new sprite
                        var tile = PIXI.Sprite.fromFrame(chosenTiles[i * 6 + j]);
                        // buttonmode+interactive = acts like a button
                        tile.buttonMode = true;
                        tile.interactive = true;
                        // is the tile selected?
                        tile.isSelected = false;
                        // set a tile value
                        tile.theVal = chosenTiles[i * 6 + j]
                        // place the tile
                        tile.position.x = 7 + i * 80;
                        tile.position.y = 7 + j * 80;
                        // paint tile black
                        tile.tint = 0x000000;
                        // set it a bit transparent (it will look grey)
                        tile.alpha = 0.5;
                        // add the tile
                        gameContainer.addChild(tile);
                        // mouse-touch listener
                        tile.mousedown = tile.touchstart = function (data) {
                            // can I pick a tile?
                            if (canPick) {
                                // is the tile already selected?
                                if (!this.isSelected) {
                                    // set the tile to selected
                                    this.isSelected = true;
                                    // show the tile
                                    this.tint = 0xffffff;
                                    this.alpha = 1;
                                    // is it the first tile we uncover?
                                    if (firstTile == null) {
                                        firstTile = this
                                    }
                                    // this is the second tile
                                    else {
                                        secondTile = this
                                        // can't pick anymore
                                        canPick = false;
                                        // did we pick the same tiles?
                                        if (firstTile.theVal == secondTile.theVal) {
                                            // wait a second then remove the tiles and make the player able to pick again
                                            setTimeout(function () {
                                                gameContainer.removeChild(firstTile);
                                                gameContainer.removeChild(secondTile);
                                                firstTile = null;
                                                secondTile = null;
                                                canPick = true;

                                            }, 800);
                                            //Aumenta 20 puntos si el usuario acerto
                                            score += 20;
                                            console.log('es correcto', score);
                                            //alert(\"Felicidades has acertado tienes buena memoria :) tu SCORE: \"+score);
                                            document.getElementById('Score').innerHTML = \"Puntaje: \" + score + \" Nivel: \" + nivel;

                                            var audioElement = document.createElement('audio');

                                            // indicamos el archivo de audio a cargar
                                            audioElement.setAttribute('src', 'Sounds/Woosh.mp3');
                                            audioElement.setAttribute('autoplay', 'autoplay');

                                            if (totalFicha == 0) {

                                                alert(\"Ganaste!! pasar siguiente nivel\");
                                                nivel = nivel + 1;
                                                switch (nivel) {
                                                    case 2:
                                                        tamanoA = 5;
                                                        tamanoB = 6;
                                                        dimensionesA = 600;
                                                        dimensionesB = 680;
                                                        totalFicha = tamanoA * tamanoB;
                                                        //onTilesLoaded();
                                                        loader.load();
                                                        document.getElementById('Score').innerHTML = \"Puntaje: \" + score + \" Nivel: \" + nivel;
                                                        break;

                                                    case 3:
                                                        tamanoA = 6;
                                                        tamanoB = 6;
                                                        dimensionesA = 480;
                                                        dimensionesB = 480;
                                                        totalFicha = tamanoA * tamanoB;
                                                        loader.load();
                                                        document.getElementById('Score').innerHTML = \"Puntaje: \" + score + \" Nivel: \" + nivel;
                                                        break;

                                                    case 4:
                                                        tamanoA = 6;
                                                        tamanoB = 8;
                                                        dimensionesA = 480;
                                                        dimensionesB = 650;
                                                        totalFicha = tamanoA * tamanoB;
                                                        loader.load();
                                                        document.getElementById('Score').innerHTML = \"Puntaje: \" + score + \" Nivel: \" + nivel;
                                                        break;

                                                }
                                            }
                                        }
                                        // we picked different tiles
                                        else {
                                            // wait a second then cover the tiles and make the player able to pick again
                                            setTimeout(function () {
                                                firstTile.isSelected = false
                                                secondTile.isSelected = false
                                                firstTile.tint = 0x000000;
                                                secondTile.tint = 0x000000;
                                                firstTile.alpha = 0.5;
                                                secondTile.alpha = 0.5;
                                                firstTile = null;
                                                secondTile = null;
                                                canPick = true
                                                //Disminuye dos puntos si el usuario no acerto
                                                score -= 2;
                                                console.log('es incorrecto', score);
                                                document.getElementById('Score').innerHTML = \"Puntaje: \" + score + \" Nivel: \" + nivel;
                                                //alert(\"Oh no te has equivocado, come mas sardina :) tu SCORE : \" + score);
                                            }, 800);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                requestAnimFrame(animate);
            }
            function animate() {
                requestAnimFrame(animate);
                renderer.render(stage);
            }
    </script><canvas width=\"350\" height=\"500\" style=\"cursor: inherit;\"></canvas>

</body></html>", "@Page:/var/www/html/grav/user/pages/02.home", "");
    }
}
