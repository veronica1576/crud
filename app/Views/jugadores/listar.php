<?= $cabecera ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<a class="btn btn-success" href="<?= base_url('crear') ?>">Ingresar un nuevo registro</a>



<div class="row">
    <div class="card col-md-17 colo-md-offset-17">
        <article class="card-body">

            <div class="form-outline mb-4">
                <input type="search" class="form-control" id="navbarListar" onkeypress="buscar()">
                <label class="form-label" for="datatable-search-input">Buscar</label>
            </div>
            <table class="table table-ligth">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Fecha de nacimiento</th>
                        <th>Email</th>
                        <th>Imagen</th>
                        <th>Nivel</th>
                        <th>Nombre de usuario</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($jugadores as $jugador) : ?>
                        <tr>
                            <td><?= $jugador['idjugadores'] ?></td>

                            <td><?= $jugador['nombrejugador'] ?></td>
                            <td><?= $jugador['fechanacimiento'] ?></td>
                            <td><?= $jugador['emailjugador'] ?></td>
                            <td>
                                <img class="img-thumbnail" src="<?= base_url() ?>/uploads/<?= $jugador['imagenperfil']; ?>" width=100 alt="">

                            </td>
                            <td><?= $jugador['nivel'] ?></td>
                            <td><?= $jugador['username'] ?></td>
                            <td><?= $jugador['password'] ?></td>
                            <td>

                                <a href="<?= base_url('editar/' . $jugador['idjugadores']); ?>" class="btn btn-info" type="button">Editar</a>
                                <a href="<?= base_url('borrar/' . $jugador['idjugadores']); ?>" class="btn btn-danger" type="button">Borrar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </article>
    </div>
</div>
<?= $pie ?>

<!-------------------------------EMPIEZA CODIGO AJAX ---------------------------->

<!----<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="typeahead.min.js"></script>
<script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'search.php?key=%QUERY',
        limit : 10
    });
});
-->
<?php
//$key=$_GET['idjugadores'];
  //      $array = array();
    //    $con=mysql_connect("localhost","root","");
      //  $db=mysql_select_db("crud",$con);
       // $query=mysql_query("select * from jugadores where idjugadores LIKE '%{$key}%'");
       // while($row=mysql_fetch_assoc($query))
        //{
        //  $array[] = $row['title'];
        //}
        ///return $this->response->redirect(site_url('/listar', $array()));
?>
