<?php

namespace App\Models;

use CodeIgniter\Model;

class Jugador extends Model
{


    protected $table='jugadores';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idjugadores';
    protected $allowedFields = ['nombrejugador', 'fechanacimiento', 'emailjugador', 'imagenperfil', 'nivel', 'username', 'password'];

    
   public function validarUsuario($usuario, $clave)
   {

       $db = \Config\Database::connect();
       $builder = $db->table('jugadores');
       $query = $builder->select('idjugadores')->getWhere(['username'=>$usuario, 'password'=>$clave]);
       if($query){
        echo "console.log('Hecho')";
       } else{
        echo "console.log('error')";
       }
      
      }

}
