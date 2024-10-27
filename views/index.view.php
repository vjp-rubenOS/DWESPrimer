<?php
include __DIR__ . '/partials/inicio-doc.part.php';
include __DIR__ . '/partials/nav.part.php';
?>

<!-- Principal Content Start -->
<div id="index">

  <!-- Header -->
  <div class="row">
    <div class="col-xs-12 intro">
      <div class="carousel-inner">
        <div class="item active">
          <img class="img-responsive" src="images/index/woman.jpg" alt="header picture">
        </div>
        <div class="carousel-caption">
          <h1>FIND NICE PICTURES HERE</h1>
          <hr>
        </div>
      </div>
    </div>
  </div>

  <div id="index-body">
    <!-- Pictures Navigation table -->
    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <!-- Cambiamos los enlaces para que cada uno cargue la categoría correcta -->
            <td><a class="link <?php echo ($categoriaActiva === 'category1') ? 'active' : ''; ?>" href="index.php?category1">Category I</a></td>
            <td><a class="link <?php echo ($categoriaActiva === 'category2') ? 'active' : ''; ?>" href="index.php?category2">Category II</a></td>
            <td><a class="link <?php echo ($categoriaActiva === 'category3') ? 'active' : ''; ?>" href="index.php?category3">Category III</a></td>
          </tr>
        </thead>
      </table>
      <hr>
    </div>

    <!-- Gallery Content -->
    <div class="tab-content">
      <!-- Solo mostramos el partial para la categoría activa -->
      <?php include __DIR__ . '/partials/imagegallery.part.php'; ?>
    </div><!-- End of Gallery Content -->

  </div><!-- End of Index-body box -->

  <!-- Other Content (Newsletter, Partners, etc.) -->
  <!-- Add your newsletter form and partner content here -->

</div><!-- End of index box -->

<!-- Footer -->
<footer class="home-page">
  <div class="container text-muted text-center">
    <div class="row">
      <ul class="nav col-sm-4">
        <li class="footer-number"><i class="fa fa-phone sr-icons"></i> (00228)92229954 </li>
        <li><i class="fa fa-envelope sr-icons"></i> kouvenceslas93@gmail.com</li>
        <li>Photography Fanatic Template &copy; 2017</li>
      </ul>
      <ul class="list-inline social-buttons col-sm-4 col-sm-push-4">
        <li><a href="#"><i class="fa fa-facebook sr-icons"></i></a>
        </li>
        <li><a href="#"><i class="fa fa-twitter sr-icons"></i></a>
        </li>
        <li><a href="#"><i class="fa fa-google-plus sr-icons"></i></a>
        </li>
      </ul>
    </div>
  </div>
</footer>

<?php
include __DIR__ . '/partials/fin-doc.part.php';
?>
