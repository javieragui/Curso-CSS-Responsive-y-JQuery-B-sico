<!DOCTYPE html>
<html>
  <?php require_once('head.html'); ?>
  <body>
     <nav id="navbar">
       <div class="myicono"><i class="fa fa-bars" aria-hidden="true"></i></div>
       <ul class="lista-sm">
         <li><a href="index.php">Inicio</a></li>
         <li><a href="servicios.php">Servicios</a></li>
         <li><a href="acercade.php">Acerca de</a></li>
         <li><a href="contacto.php">Contacto</a></li>
       </ul>     

    </nav>
    <div id="content">
      
      <section id="principal">
        <h2>Formulario de contacto</h2>
        <form>
          <div>Nombre:<input type="text" name="nombre"></div>
          <div>Email:<input type="email" name="email"></div>
          <div><button type="submit">Enviar mensaje</button></div>
        </form>
      </section>

      <?php require_once('footer.html'); ?>
    </div>
  </body>
</html>