
    <?=$cabecera?>
    <a class="btn btn-success" href="<?=base_url('crear')?>">Ingresar un nuevo registro</a>
    <table class="table table-ligth">
        <thead class="thead-light">
             <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha de nacimiento</th>
                <th>Email</th>
                <th>Imagen</th>
                <th>Nivel</th>
                <th>Acciones</th>
             </tr>
        </thead>
        <tbody>
            <?php foreach($jugadores as $jugador): ?>
            <tr>
                <td><?=$jugador['idjugadores']?></td>
                
                <td><?=$jugador['nombrejugador']?></td>
                <td><?=$jugador['fechanacimiento']?></td>
                <td><?=$jugador['emailjugador']?></td>
                <td>
                    <img class="img-thumbnail" src="<?=base_url()?>/uploads/<?=$jugador['imagenperfil'];?>" width=100 alt="">
            
                </td>
                <td><?=$jugador['nivel']?></td>
                <td>

                    <a href="<?=base_url('editar/'.$jugador['idjugadores']);?>" class="btn btn-info" type="button">Editar</a>
                    <a href="<?=base_url('borrar/'.$jugador['idjugadores']);?>" class="btn btn-danger" type="button">Borrar</a>
              </td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
    <?=$pie?>

