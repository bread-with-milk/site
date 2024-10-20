<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style--contactanos.css">
</head>
<body>

 <!-- Nav Section -->
 <header class="header">
        <nav class="header__nav">
            <div class="nav__logo-container">
                <img src="looogo.jpg" alt="Logo">
            </div>

            <div class="nav__ul-container">
                <ul class="nav__list">
                   <li class="nav__item">
                        <a href="index.html" class="nav__link">Inicio</a>
                   </li>
                   <li class="nav__item">
                         <a href="about-us.html" class="nav__link">Acerca de Nosotros</a>
                   </li>
                   <li class="nav__item">
                         <a href="#" class="nav__link">Contactanos</a>
                   </li>
                   <li class="nav__item">
                         <a href="store.html" class="nav__link">Tienda en linea</a>
                   </li>
                   <li class="nav__item">
                         <a href="#" class="nav__link link--login">Inicia Sesión</a>
                   </li>
                 </ul>
            </div>
    </nav>
</header>


<main class="main__form">

    <section class="main__section">
        <div class="section__title">
            <h1 class="section__item title-shadow">Contactanos</h1>
        </div>
    </section>
    <form class="form__container" method="posts">
        <div class="form__1">
            <input type="text" id="name" name="name" placeholder="   Alguien Apellido"  required>
            <input type="text" id="tel" name="tel" placeholder="   55 xxxx xxxx"  required>
         </div>
         
            <input type="email" id="email" name="email" placeholder="   alguien@example.com" required>
        
    <textarea id="message" name="message" placeholder="    Mensaje" required></textarea>
    <input type="submit" name='enviar' onclick ='validar()' id="button">
    </form>
</main>

<?php
    include('php_contactanos.php');
  ?>

</body>

<script>
    function validar(){
        event.preventDefault();
    nombre= document.getElementById('name').value;
    mail= document.getElementById('email').value;
    msg= document.getElementById('message').value;
    if(nombre != '' && mail != '' && msg != ''){
        alert('Gracias por contactarnos, nos pondremos en contacto con usted lo mas pronto posible');
    }
        
    
    
}
</script>
</html>
