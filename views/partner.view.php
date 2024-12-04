<?php include 'partials/inicio-doc.part.php'; ?>
<?php include 'partials/nav.part.php'; ?>

<!-- Principal Content Start -->
<div class="container">
    <div class="col-xs-12 col-sm-8 col-sm-push-2">
        <h1>Asociados</h1>
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


            <form class="form-horizontal" method="post" enctype="multipart/form-data" ><!--action=<?php $_SERVER['PHP_SELF'] ?>-->
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Nombre</label>
                        <input class="form-control" type="text" id="nombre" name="nombre"></input>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Logo</label>
                        <input class="form-control-file" type="file" id="logo" name="logo"></input>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Descripcion</label>
                        <textarea class="form-control" id="descripcion" name="descripcion"><?= $descripcion ?></textarea>
                        <button class="pull-right btn btn-lg sr-button">Enviar</button>
                    </div>
                </div>
            </form>
            <hr class="divider">
            <div class="imagenes_galeria">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Logo</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <?php foreach ($asociados as $asociado): ?>
                            <tr>
                                <th scope="row"><?= $asociado->getId() ?></th>
                                <td><?= $asociado->getNombre() ?></td>
                                <td><img src="<?= $asociado->getRutaLogo() ?>"
                                        alt="<?= $asociado->getDescripcion() ?>"
                                        title="<?= $asociado->getDescripcion() ?>"
                                        width="100px"></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Principal Content Start -->

<?php include 'partials/fin-doc.part.php' ?>