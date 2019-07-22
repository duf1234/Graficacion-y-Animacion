---
title: 'tareas mes de Julio'
date: '09:48 01-07-2019'
content:
    items: '- ''@self.children'''
    limit: '5'
    order:
        by: date
        dir: desc
    pagination: '1'
    url_taxonomy_filters: '1'
feed:
    limit: '10'
    description: ''
---

<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Trabajo sobre Aplicaciones</h1>
<p>NodeJS es un código abierto de JavaScript (razón por la cual se incluye el distintivo JS) que está diseñado para generar aplicaciones web de forma altamente optimizada. Desde su nacimiento hacia el año 2009 ha logrado convertirse en todo un must dentro del desarrollo web.</p>
<h3>A continuación, les dejare una breve descripción y los links de tres aplicaciones Vuejs, AngularJS y Reactjs</h3>
 <p> <h4>Vusjs</h4> Es un Framework progresivo, es decir, es un Framework que sirve para consumir interfaz del usuario.</p> 
 <p>Fue creado por Evan You que trabajaba en Google realizando prototipos y en el core del Framework de Meteor, hasta que pensó en otra forma de hacer una opción más fácil que abarcara las necesidades a la hora de hacer prototipos. Así surgió Vue en el 2014, desde entonces ha tenido una gran evolución y sigue creciendo en su versión 2. </p>  
 <p>link para aceder a la plataforma<a href="http://thebrayanmina.com:88/">VUEJS</a></p>
 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQR5ByelHJGkRLEeSc3Xan_2QvJhDh55VnYn2SgHRctGCbgCIvI">
  <p> <h4>Angularjs</h4> Es un framework MVC de JavaScript para el Desarrollo Web Front End que permite crear aplicaciones SPA Single-Page Applications.</p> 
 <p>Su objetivo es aumentar las aplicaciones basadas en navegador con capacidad de Modelo Vista Controlador (MVC), en un esfuerzo para hacer que el desarrollo y las pruebas sean más fáciles. </p>  
 <p>link para aceder a la plataforma<a href="http://thebrayanmina.com:89/">ANGULARJS</a></p>
 <img src="https://angular.io/assets/images/logos/angular/angular.png">
 <p> <h4>Reactjs</h4>Es una librería enfocada en la visualización. Si estamos iniciando un proyecto podemos basarnos en la arquitectura Flux, pero si ya tenemos un proyecto usando un Framework MVC como AngularJS podemos dejar AngularJS como Controlador y que ReactJS se encargue de las vistas. Esto tiene sentido pues ReactJS tiene un performance superior al momento para manipular el DOM, y esto tiene un gran impacto cuando se trata con listas largas que cambian constantemente en nuestra visualización.</p> 
 <p>link para aceder a la plataforma <a href="http://thebrayanmina.com:92/">REACTJS</a></p>
 <img src="https://cdn4.iconfinder.com/data/icons/logos-3/600/React.js_logo-512.png">
</body>
</html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<h1>Trabajo sobre Marcadores</h1>
<h1>AR.js</h1>
<p>AR.js es una solución eficiente de Realidad Aumentada en la Web. Se ejecuta al 100% en su navegador web, esto significa que no hay que instalar ninguna aplicación. No hay necesidad de un dispositivo específico, por ejemplo, Tango o iPhone. Se ejecuta en todas las plataformas móviles: Android, iOS11 y Windows móvil. Puedes usarlo con tu propio teléfono.</p>
<p>A-Frame es muy fácil de usar, así que quería asegurarme de que AR.js estaba funcionando bien con él. Por lo tanto, al combinar A-Frame y AR.js, es fácil para todos crear contenido de AR en la web.</p>
    
<p>Aqui puedes probar el uso de los marcadores para obtener informacion de los laboratorios <a href="https://thebrayanmina.com/marcadores/ejemploarjs.html">AR.JS</a>?<br />
</p>
    
    <p>en este link se encuentran los marcadores para buscar la informacion <a href="https://thebrayanmina.com/marcadores/ubicacionMarcadores.html">Marcadores</a>?<br />
¡en el siguiente link encuentra los marcadores con los que trabajaremos ;-)</p>

    <img src="http://blogs.ubc.ca/augmentedreality/files/2013/10/qr-code-denso.png">
</body>
</html>
<html> 
    <head>
	<title>PIXI Concentration</title>
	<style>
		body {
			margin: 0;
			padding: 0;
           
		}
	</style>
	<script src="pixi.dev.js"></script>

<h1>Examen Juego de Pixi.js</h1>
<body >
    <h3>Disfruta nuestro juego Hecho en PIXIJS</h3>
    <p id="Score">Puntaje: 6 Nivel: 1</p>
     <body>
<h1>Pixi.js</h1>
<p>Pixi es un motor de renderizado 2d muy potente, lo que significa que te ayuda a mostrar y animar gráficos interactivos, lo que facilita la creación de juegos en javascript y HTML5 sin tener que acceder directamente a la API de WebGL.</p>
<p>Como se puede apreciar Pixi es un framework bastante potente para el desarrollo de juegos ya que nos proporciona una serie de métodos muy sencillos y potentes para el tratamiento de la parte que más recursos necesita de nuestro juego que son los gráficos.</p>
</body>
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
			var tileAtlas = ["images.json"];
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
											//alert("Felicidades has acertado tienes buena memoria :) tu SCORE: "+score);
											document.getElementById('Score').innerHTML = "Puntaje: " + score + " Nivel: " + nivel;

											var audioElement = document.createElement('audio');

											// indicamos el archivo de audio a cargar
											audioElement.setAttribute('src', 'Sounds/Woosh.mp3');
											audioElement.setAttribute('autoplay', 'autoplay');

											if (totalFicha == 0) {

												alert("Ganaste!! pasar siguiente nivel");
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
														document.getElementById('Score').innerHTML = "Puntaje: " + score + " Nivel: " + nivel;
														break;

													case 3:
														tamanoA = 6;
														tamanoB = 6;
														dimensionesA = 480;
														dimensionesB = 480;
														totalFicha = tamanoA * tamanoB;
														loader.load();
														document.getElementById('Score').innerHTML = "Puntaje: " + score + " Nivel: " + nivel;
														break;

													case 4:
														tamanoA = 6;
														tamanoB = 8;
														dimensionesA = 480;
														dimensionesB = 650;
														totalFicha = tamanoA * tamanoB;
														loader.load();
														document.getElementById('Score').innerHTML = "Puntaje: " + score + " Nivel: " + nivel;
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
												document.getElementById('Score').innerHTML = "Puntaje: " + score + " Nivel: " + nivel;
												//alert("Oh no te has equivocado, come mas sardina :) tu SCORE : " + score);
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
	</script><canvas width="350" height="500" style="cursor: inherit;"></canvas>



</body>

  </head>
</html>



