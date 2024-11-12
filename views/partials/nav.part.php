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
        <li class="<?php echo esOpcionMenuActiva("/index.php") ? "active" : "" ?> lien">
          <a href="<?php echo esOpcionMenuActiva("/index.php") ? "#" : "index.php" ?>">
            <i class="fa fa-home sr-icons"></i> Home
          </a>
        </li>
        <li class="<?php echo esOpcionMenuActiva("/about.php") ? "active" : "" ?> lien">
          <a href="<?php echo esOpcionMenuActiva("/about.php") ? "#" : "about.php" ?>">
            <i class="fa fa-bookmark sr-icons"></i> About
          </a>
        </li>
        <li class="<?php echo existeOpcionMenuActivaEnArray(['/blog.php', '/single_post.php']) ? 'active' : '' ?> lien">
          <a href="<?php echo esOpcionMenuActiva("/blog.php") ? "#" : "blog.php" ?>">
            <i class="fa fa-file-text sr-icons"></i> Blog
          </a>
        </li>
        <li class="<?php echo esOpcionMenuActiva("/contact.php") ? "active" : "" ?>">
          <a href="<?php echo esOpcionMenuActiva("/contact.php") ? "#" : "contact.php" ?>">
            <i class="fa fa-phone-square sr-icons"></i> Contact
          </a>
          <!-- este lo hemos añadido despues-->
          <li class="<?php echo esOpcionMenuActiva("/galeria.php") ? "active" : "" ?>">
          <a href="<?php echo esOpcionMenuActiva("/galeria.php") ? "#" : "galeria.php" ?>">
            <i class="fa fa-image sr-icons"></i> Gallery
          </a>
          <!-- este lo hemos añadido despues-->
          <li class="<?php echo esOpcionMenuActiva("/asociados.php") ? "active" : "" ?>">
          <a href="<?php echo esOpcionMenuActiva("/asociados.php") ? "#" : "/asociados.php" ?>">
            <i class="fa fa-hand-o-right sr-icons"></i> Partners
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
