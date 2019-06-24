---
title: 'Pagina de Inicio'
media_order: style.css
---

<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>contacto</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" /> -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1 class="brand"><span>Tarea </span>Animacion Y Graficacion</h1>
    <div class="wrapper">
      <div class="company-info">
        <ul>
          <li><i class="fa fa-road"></i> Envienos sus comentarios y sugerencias de mejoras</li>
          <li><i class="fa fa-road"></i> Brayan Mina Vernaza</li>
          <li><i class="fa fa-road"></i> EmpresaAES Y Familia</li>
          <li><i class="fa fa-phone"></i> (+593) 0968545903</li>
          <li><i class="fa fa-envelope"></i> brayanminavervaza19@gmail.com</li>
        </ul>
      </div>
      <div class="contact">
        <h3>Email </h3>
        <div class="alert">Your message has been sent</div>
        <form id="contactForm">
          <p>
            <label>Name</label>
            <input type="text" name="name" id="name" required>
          </p>
          <p>
            <label>Company</label>
            <input type="text" name="company" id="company">
          </p>
          <p>
            <label>Email Address</label>
            <input type="email" name="email" id="email" required>
          </p>
          <p>
            <label>Phone Number</label>
            <input type="text" name="phone" id="phone">
          </p>
          <p class="full">
            <label>Message</label>
            <textarea name="message" rows="5" id="message"></textarea>
          </p>
          <p class="full">
            <button type="submit">Submit</button>
          </p>
        </form>
      </div>
    </div>
  </div>

  <script src="/__/firebase/6.1.1/firebase-app.js"></script>
  <script src="main.js"></script>
</body>
</html>