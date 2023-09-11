<?=$cabecera;?>

<?php


print_r($player);?>

<div class="card">
    <div class="" card-body>
        <h5 class="card-tittle">Ingrese sus datos</h5>
        <p class="card-text">

        <form method="post" action="<?=site_url('/actualizar')?>" enctype="multipart/form-data">

            <input type="hidden" name="id" id="id" value="<?=$player['idjugadores']?>">
        
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input id="nombre"  value="<?=$player['nombrejugador']?>" class="form-control" type="text" name="nombre">
            </div>

            <div class="form-group">
                <label for="date">Fecha de nacimiento</label>
                <input id="date" value="<?=$player['fechanacimiento']?>" class="form-control" type="date" name="date">
            </div>

            <div class="" form-group>
                <label for="email">Email</label>
                <input id="email" class="form-control" type="email" value="<?=$player['emailjugador']?>" name="email">
            </div>

            <div class="" form-group>
                <label for="imagen">Avatar</label>
                <br/>
                <img class="img-thumbnail" src="<?=base_url()?>/uploads/<?=$player['imagenperfil'];?>" width="100" alt="">
                <input id="imagen" class="form-control-file" type="file" name="imagen">
            </div>

            <div class="" form-group>
                <label for="nivel">Nivel</label>
                <select name="nivel" id="nivel" class="form-control" value="<?=$player['nivel']?>">
                    <option value="Bajo">Bajo</option>
                    <option value="Medio">Medio</option>
                    <option value="Alto">Alto</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>

        </form>
        </p>
    </div>
</div>

<?=$pie;?>