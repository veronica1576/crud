<?= $cabecera ?>
FORMULARIO DE REGISTRO

<?php if(session('mensaje')){?>

    <div class="alert alert-danger" role="alert">
    <?php
    echo session("mensaje");
    ?>
    </div>
    <?php
}?>

<div class="card">
    <div class=" card-body">
        <h5 class="card-tittle">Ingrese sus datos</h5>
        <p class="card-text">

        <form method="post" action="<?=site_url('/guardar')?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input id="nombre" value="<?=old('nombrejugador')?>" class="form-control" type="text" name="nombre">
            </div>

            <div class="form-group">
                <label for="date">Fecha de nacimiento</label>
                <input id="date" class="form-control" type="date" name="date">
            </div>

            <div class=" form-group">
                <label for="email">Email</label>
                <input id="email" class="form-control" type="email" name="email">
            </div>

            <div class="form-group">
                <label for="imagen">Avatar</label>
                <input id="imagen" class="form-control-file" type="file" name="imagen">
            </div>

            <div class="form-group">
                <label for="nivel">Nivel</label>
                <select name="nivel" id="nivel" class="form-control">
                    <option value="Bajo">Bajo</option>
                    <option value="Medio">Medio</option>
                    <option value="Alto">Alto</option>
                </select>
            </div>

            <div class:"form-group">
                <label for="username">Nombre de usuario</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>

            <div class:"form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>

        </form>
        </p>
    </div>
</div>

<?= $pie ?>