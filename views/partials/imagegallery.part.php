<!-- Partial imagegallery.part.php -->
<div id="<?php echo $categoriaActiva; ?>" class="tab-pane active">
  <div class="row popup-gallery">
    <?php foreach ($imagenesCategoria as $imagen): ?>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="sol">
          <!-- Renderizar la imagen de la galería -->
          <img class="img-responsive" src="<?php echo $imagen->getUrlPortfolio(); ?>" alt="<?php echo $imagen->getDescripcion(); ?>">
          <div class="behind">
            <div class="head text-center">
              <ul class="list-inline">
                <li>
                  <!-- Usando getUrlGallery para la vista en galería -->
                  <a class="gallery" href="<?php echo $imagen->getUrlGallery(); ?>" data-toggle="tooltip" data-original-title="Quick View">
                    <i class="fa fa-eye"></i>
                  </a>
                </li>
                <li>
                  <a href="#" data-toggle="tooltip" data-original-title="Click if you like it">
                    <i class="fa fa-heart"></i>
                  </a>
                </li>
                <li>
                  <a href="#" data-toggle="tooltip" data-original-title="Download">
                    <i class="fa fa-download"></i>
                  </a>
                </li>
                <li>
                  <a href="#" data-toggle="tooltip" data-original-title="More information">
                    <i class="fa fa-info"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="row box-content">
              <ul class="list-inline text-center">
                <li><i class="fa fa-eye"></i> <?php echo $imagen->getNumVisualizaciones(); ?></li>
                <li><i class="fa fa-heart"></i> <?php echo $imagen->getNumLikes(); ?></li>
                <li><i class="fa fa-download"></i> <?php echo $imagen->getNumDownloads(); ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
