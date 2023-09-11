<?php 
namespace App\Models;

use CodeIgniter\Model;

class Jugador extends Model{
    protected $table      = 'jugadores';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'idjugadores';
     protected $allowedFields =['nombrejugador', 'fechanacimiento', 'emailjugador', 'imagenperfil', 'nivel'];
}