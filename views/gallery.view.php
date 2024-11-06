<?php include 'partials/inicio-doc.part.php'; ?>
<?php include 'partials/nav.part.php'; ?>
<!-- Principal Content Start --->
<div class="container">
    <div class="col-xs-12 col-sm-8 col-sm-push-2">
        <h1>GALERIA</h1>
        <hr>
        <!--- Compruebo a ver si estoy recibiendo los datos del formulario -->
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <!--Si el array de errores esta vacio muestro una alerta de tipo info. y en caso -->
            <!-- contrario muestro una alerta de tipo danger (son clases css de bootstrap)-->

            <div class="alert alert-<?= empty($errores) ? 'info' : 'danger'; ?> alert-dimissibre" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">x</span>
                </button>
                <?php if (empty($errores)): ?>
                    <p><?= $mensaje ?></p>
                <?php else : ?>
                    <ul>
                        <?php foreach ($errores as $error): ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

            </div>
        <?php endif; ?>
        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= $_SERVER['PHP_SELF'] ?>">
            <div class="form-group">
                <div class="col-xs-12">
                    <label class="label-control">Imagen</label>
                    <input class="form-control-file" type="file" name="imagen">
                </div>

            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <label class="form-control">Descripcion</label>
                    <textarea class="form-control" name="descripcion"><?= $descripcion ?></textarea>
                    <button class="pull-right btn btn-lg sr-button">ENVIAR</button>

                </div>
            </div>
        </form>
        <hr class="divider">

        <div class="imagenes_galeria">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Visualizaciones</th>
                        <th scope="col">Likes</th>
                        <th scope="col">Descargas</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php foreach ($imagenes as $imagen):?>
                        <tr>
                            <th scope="row"><?=$imagen->getId()?></th>
                            <td>
                                <img src="<?=$imagen->getUrlGallery()?>"
                                 alt="<?=$imagen->getDescripcion?>" title="<?$imagen->getDescripcion?>"
                                 width="100px">
                            </td>
                            <td><?=$imagen->getNumVisualizaciones()?></td>
                            <td><?=$imagen->getNumLike()?></td>
                            <td><?=$imagen->getNumDownloads()?></td>
                        </tr>
                        <?php endforeach;?>
                </tbody>
            </table>

        </div>
    </div>
</div>

</div>
<!-- Principal content Start -->
<?php include __DIR__ . '/partials/fin-doc.part.php' ?>