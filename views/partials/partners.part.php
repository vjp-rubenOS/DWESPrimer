<div class="last-box row">
    <div class="col-xs-12 col-sm-4 col-sm-push-4 last-block">
        <div class="partner-box text-center">
            <p>
                <i class="fa fa-map-marker fa-2x sr-icons"></i>
                <span class="text-muted">35 North Drive, Adroukpape, PY 88105, Agoe Telessou</span>
            </p>
            <h4>Our Main Partners</h4>
            <hr>
            <div class="text-muted text-left">

                <?php

                if (count($arrayPartners) <= 3) { // si el array tiene 3 o menos elementos los muestra todos 
                    $mostrarPartner = $arrayPartners;
                } else {
                    if (count($arrayPartners) > 3) { // si el array tiene mas de 3 elementos solo muestra tres y llama al metodo obtenerTresPartners
                        $mostrarPartner = obtenerTresPartners($arrayPartners);
                    }
                }

                ?>
                <?php foreach ($mostrarPartner as $partner): ?>
                    <ul class="list-inline">
                        <li><img src="<?= $partner->getRutaLogo(); ?>" alt="<?= $partner->getDescripcion(); ?>" width="100px"></li>
                        <li><?= $partner->getNombre(); ?></li>
                    </ul>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>