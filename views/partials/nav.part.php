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

        <li class="<?php echo esOpcionMenuActiva('/') ? "active" : "" ?> lien">
          <a href="<?php echo esOpcionMenuActiva('/') ? "#" : "/" ?>">
            <i class="fa fa-home sr-icons"></i> Home</a>
        </li>
        <li class="<?php echo esOpcionMenuActiva('/about') ? "active" : "" ?> lien">
          <a href="<?php echo esOpcionMenuActiva('/about') ? "#" : "/about" ?>">
            <i class="fa fa-bookmark sr-icons"></i> About
          </a>
        </li>
        <li class="<?php echo existeOpcionMenuActivaEnArray(['/blog', '/single_post']) ? "active" : "" ?> lien">
          <a href="<?php echo esOpcionMenuActiva('/blog') ? "#" : "/blog" ?>">
            <i class="fa fa-file-text sr-icons"></i> Blog</a>
        </li>
        <li class="<?php echo esOpcionMenuActiva('/contact') ? "active" : "" ?> lien">
          <a href="<?php echo esOpcionMenuActiva('/contact') ? "#" : "/contact" ?>">
            <i class="fa fa-phone-square sr-icons"></i> Contact</a>
        </li>
        <li class="<?php echo esOpcionMenuActiva('/gallery') ? "active lien" : "" ?> lien">
          <a href="<?php echo esOpcionMenuActiva('/gallery') ? "#" : "/gallery" ?>">
            <i class="fa fa-image sr-icons"></i> Gallery</a>
        </li>
        <li class="<?php echo esOpcionMenuActiva('/asociado') ? "active" : "" ?> lien">
          <a href="<?php echo esOpcionMenuActiva('/asociado') ? "#" : "/asociado" ?>">
            <i class="fa fa-hand-o-right"></i> Asociados</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- End of Navigation Bar -->