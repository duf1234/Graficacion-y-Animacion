---
title: A-Framework
date: '20:22 07-07-2019'
visible: true
---

<html lang="en">
  <head>
    <title>codevember </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
    <script src="https://cdn.rawgit.com/feiss/aframe-environment-component/ad57b15d/dist/aframe-environment-component.min.js"></script>
    <script src="https://rawgit.com/takahirox/aframe-rain/master/build/aframe-rain.min.js"></script>
  </head>
  <body>
    <a-scene rain="vector:0 -20 0; count:10000" >
      <a-assets>
        <a-asset-item id="cactus-obj" src="https://cdn.glitch.com/fcc55f29-57e3-4745-8728-174d815e0318%2Fcactus-king-3pxZaWfTlNc-model-triangulated.obj?1510033482443"></a-asset-item>
        <a-asset-item id="cactus-mtl" src="https://cdn.glitch.com/fcc55f29-57e3-4745-8728-174d815e0318%2Fcactus-king-3pxZaWfTlNc-materials.mtl?1510033482226"></a-asset-item>      
        <a-asset-item id="skull-obj" src="https://cdn.glitch.com/fcc55f29-57e3-4745-8728-174d815e0318%2FbmDtYdS-ALR_skull-model-triangulated.obj?1510033663046"></a-asset-item>
        <a-asset-item id="skull-mtl" src="https://cdn.glitch.com/fcc55f29-57e3-4745-8728-174d815e0318%2FbmDtYdS-ALR_skull-materials.mtl?1510033662784"></a-asset-item>      
        <a-asset-item id="bloom-obj" src="https://cdn.glitch.com/fcc55f29-57e3-4745-8728-174d815e0318%2Fbloom-cYdT_ntQiMr-model-triangulated.obj?1510033192622"></a-asset-item>
        <a-asset-item id="bloom-mtl" src="https://cdn.glitch.com/fcc55f29-57e3-4745-8728-174d815e0318%2Fbloom-cYdT_ntQiMr-materials.mtl?1510033192210"></a-asset-item>      
        <img id="sky" src="https://cdn.glitch.com/fcc55f29-57e3-4745-8728-174d815e0318%2Fsky5.jpg?1510027130614" crossorigin="anonymous" />
        <img id="cloud1" src="https://cdn.glitch.com/fcc55f29-57e3-4745-8728-174d815e0318%2Fdark-cloud.png?1510029343052" crossorigin="anonymous" />
        <img id="cloud2" src="https://cdn.glitch.com/fcc55f29-57e3-4745-8728-174d815e0318%2Fstorm_cloud-1.png?1510029342928" crossorigin="anonymous" />
        <audio id="sfx-storm" src="https://cdn.glitch.com/fcc55f29-57e3-4745-8728-174d815e0318%2FThunder%20storm%20rain_BLASTWAVEFX_31920.mp3?1510032301842" crossorigin="anonymous" ></audio>
      </a-assets>
        <a-entity id="env1" environment="
                                 preset:yavapai
                                 skyType:none;
                                 ground:canyon;
                                 seed:30;
                                 active:true;
                                 skyColor:#FFFFFF;
                                 fog:0;
                                 lightPosition:0.5 1 0;
                                 flatShading:true;
                                 groundTexture:walkernoise;
                                 groundColor:#C66344;
                                 groundColor2:#c96b4b;
                                 dressing:none;
                                 dressingAmount:1000;
                                 dressingColor:#C66344;
                                 dressingScale:1;
                                 dressingVariance:0.5 0.2 0.5;
                                 dressingOnPlayArea:0.05;
                                 gridColor:#239893;"></a-entity>
      <a-sky src="#sky"></a-sky>
      <a-image src="#cloud2" material="opacity:0.6;depthTest:false" position="0 55 -160" scale="500 250 1"></a-image>
      <a-entity id="cactus" obj-model="obj: #cactus-obj; mtl: #cactus-mtl" position="-1.8 2.148 -4.323" rotation="0 0 0" scale="2 2 2" shadow="cast:true;receive:true"></a-entity>
      <a-entity id="bloom" obj-model="obj: #bloom-obj; mtl: #bloom-mtl" position="-0.127 0.5 -6.038" scale="3 3 3" shadow="cast:true;receive:true"></a-entity>
      <a-entity id="skull" obj-model="obj: #skull-obj; mtl: #skull-mtl" position="1.73 0.409 -3.084" scale="3 3 3" shadow="cast:true;receive:true"></a-entity>
    <a-entity sound="src: #sfx-storm; autoplay: true; loop: true; rolloffFactor: 0 " position="0 0 -3.32;"></a-entity>
    </a-scene>
  </body>
  <script type="text/javascript">
    document.querySelector('a-scene').addEventListener('loaded', function () {
      document.querySelector("#env1").children[4].setAttribute("visible", "false");
      document.querySelector("#env1").setAttribute("environment", "dressing", "stones");
      document.querySelector("#env1").setAttribute("environment", "groundYScale", "9");
    })
  </script>
</html>