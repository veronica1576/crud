<?php

namespace App\Models;

use CodeIgniter\Model;

class Jugador extends Model
{
    protected $table      = 'jugadores';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idjugadores';
    protected $allowedFields = ['nombrejugador', 'fechanacimiento', 'emailjugador', 'imagenperfil', 'nivel', 'username', 'password'];


    public function validarUsuario()
    {
        $sql = "SELECT nombrejugador, fechanacimiento, emailjugador, imagenperfil, nivel, username  FROM jugadores WHERE username = ? AND 'password'=?";

        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->usuario);
        $stm->bindParam(2, $this->clave);
        $stm->execute();
        $user = $stm->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
}
