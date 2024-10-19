<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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


<div class="contact_form">

</div>
<!-- 
<?php
    include('php_contactanos.php');
  ?>
 -->

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
