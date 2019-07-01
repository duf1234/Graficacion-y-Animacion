---
title: Contacto
date: '11:50 01-07-2019'
---

[style.css](style.css)<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Form</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1 class="brand"><span>From</span></h1>
    <div class="wrapper animated bounceInLeft">
      <div class="company-info">
        <h3>Contact Form</h3>
        <ul>
          <li><i class="fa fa-road"></i> Brayan Mina Vernaza</li>
          <li><i class="fa fa-phone"></i> (593) 0968545903</li>
          <li><i class="fa fa-envelope"></i> brayanminavernaza19@gmail.com</li>
        </ul>
      </div>
      <div class="contact">
        <h3>Email Us</h3>
        <form>
          <p>
            <label>Name</label>
            <input type="text" name="name">
          </p>
          <p>
            <label>Company</label>
            <input type="text" name="company">
          </p>
          <p>
            <label>Email Address</label>
            <input type="email" name="email">
          </p>
          <p>
            <label>Phone Number</label>
            <input type="text" name="phone">
          </p>
          <p class="full">
            <label>commentary</label>
            <textarea name="message" rows="5"></textarea>
          </p>
          <p class="full">
            <button>Check</button>
          </p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>