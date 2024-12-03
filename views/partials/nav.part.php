<!-- Navigation Bar -->
<nav class="navbar navbar-fixed-top navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand page-scroll" href="#page-top">
        <span>[PHOTO]</span>
      </a>
    </div>
    <div class="collapse navbar-collapse navbar-right" id="menu">
      <ul class="nav navbar-nav">
        <!-- Utilizacion de las funciones para comprobar si la URL coincide con la opcion  procedentes de utils-->
        <li class="<?php echo esOpcionMenuActiva("/index.php") ? "active" : "" ?> lien">
          <a href="<?php echo esOpcionMenuActiva("/index.php") ? "#" : "/" ?>">
            <i class="fa fa-home sr-icons"></i> Home
          </a>
        </li>
        <!-- Utilizacion de las funciones para comprobar si la URL coincide con la opcion  procedentes de utils-->
        <li class="<?php echo esOpcionMenuActiva("/about.php") ? "active" : "" ?> lien">
          <a href="<?php echo esOpcionMenuActiva("/about.php") ? "#" : "/about" ?>">
            <i class="fa fa-bookmark sr-icons"></i> About
          </a>
        </li>
        <!-- Utilizacion de las funciones para comprobar si la URL coincide con una de las dos opcion  procedentes de utils-->
        <li class="<?php echo existeOpcionMenuActivaEnArray(['/blog.php', '/single_post.php']) ? 'active' : '' ?> lien">
          <a href="<?php echo esOpcionMenuActiva("/blog.php") ? "#" : "/blog" ?>">
            <i class="fa fa-file-text sr-icons"></i> Blog
          </a>
        </li>
        <!-- Utilizacion de las funciones para comprobar si la URL coincide con la opcion  procedentes de utils-->
        <li class="<?php echo esOpcionMenuActiva("/contact.php") ? "active" : "" ?>lien">
          <a href="<?php echo esOpcionMenuActiva("/contact.php") ? "#" : "/contact" ?>">
            <i class="fa fa-phone-square sr-icons"></i> Contact
          </a>
          <!-- este lo hemos añadido despues-->
           <!-- Utilizacion de las funciones para comprobar si la URL coincide con la opcion  procedentes de utils-->
          <li class="<?php echo esOpcionMenuActiva("/galeria.php") ? "active" : "" ?>lien">
          <a href="<?php echo esOpcionMenuActiva("/galeria.php") ? "#" : "/galeria" ?>">
            <i class="fa fa-image sr-icons"></i> Gallery
          </a>
          <!-- este lo hemos añadido despues-->
           <!-- Utilizacion de las funciones para comprobar si la URL coincide con la opcion  procedentes de utils-->
          <li class="<?php echo esOpcionMenuActiva("/partners.php") ? "active" : "" ?>lien">
          <a href="<?php echo esOpcionMenuActiva("/partners.php") ? "#" : "/partners" ?>">
            <i class="fa fa-hand-o-right sr-icons"></i> Partners
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
