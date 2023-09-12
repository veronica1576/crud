<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Jugador;


include("login.js");

class Jugadores extends Controller
{

    private $modeloJ;


    public function __construct(){
        //instanciar los modelos
        $this->modeloJ = $this->('Jugador');

    }
    
    public function ingresar(){
    $error = false;
    //validar la sesión
    // if(isset($_SESSION['SESION INICIADA']) && $_SESSION['SESION INICIADA'] == true){
    //     header("Location: ".URL."usuarioController/principal");
    //     exit();
    // }
    if(isset($_POST['btnIngresar'])){
        $datos['jugadores'] = $player->__SET('username', $_POST['loginName']);
        $datos['jugadores'] = $player->__SET('password', $_POST['loginPassword']);
        $_POST = [];
        //llamamos al método de validación del modelo
        $validar = $this->modeloJ->validarUsuario();

        //revisar la validación
        if($validar == true){
            $_SESSION['SESION INICIADA'] = true;
            $error = false;
            $_SESSION['nombrejugador'] = $validar['nombre'];
            $_SESSION['fechanacimiento'] = $validar['fecha'];
            $_SESSION['emailjugador'] = $validar['email'];
            $_SESSION['imagenperfil'] = $validar['avatar'];
            $_SESSION['nivel'] = $validar['nivel'];

            //después de la validación correcta cargar el admin
            header("Location:'/app/Views/jugadores/listar.php'");
        }else{
            $error = true;
        }
    }

    require './app/Views/login.php';
}

public function cerrarSesion(){
    if (isset($_SESSION['SESION INICIADA'])) {
    //  $_SESSION['SESION INICIADA'] = false;
    session_destroy();
    }

    header("Location: '/app/Views/home.php'");
    exit();
}

    

    public function registroLogin()
    {
        $player = new Jugador();

        if ($imagen = $this->request->getFile('registerAvatar')) {
            $newName = $imagen->getRandomName();
            $imagen->move('../public/uploads/', $newName);
            $datos = [
                'nombrejugador' => $this->request->getVar('registerName'),
                'fechanacimiento' => $this->request->getVar('registerDate'),
                'emailjugador' => $this->request->getVar('registerEmail'),
                'imagenperfil' => $newName,
                'nivel' => $this->request->getVar('registerNivel'),
                'username' => $this->request->getVar('registerUsername'),
                'password' => $this->request->getVar('registerPassword')
            ];

            $player->insert($datos);
        }

        return $this->response->redirect(site_url('/login'));

    }


    public function registro()
    {
        $player = new Jugador();

        //$validacion = $this->validate([
        //'imagen' =>[
        //uploaded[imagen]',
        //'mime_in[imagen,image/jpg,image/jpeg,image/png ]',
        //'max_size[imagen,1024]',
        //  ]
        //]);

        // if(!$validacion){
        //  $session =session();
        //  $session->setFlashdata('mensaje', 'Revise la informacion');
        //return redirect()->back()->withInput();
        // }


        if ($imagen = $this->request->getFile('imagen')) {
            $newName = $imagen->getRandomName();
            $imagen->move('../public/uploads/', $newName);
            $datos = [
                'nombrejugador' => $this->request->getVar('nombre'),
                'fechanacimiento' => $this->request->getVar('date'),
                'emailjugador' => $this->request->getVar('email'),
                'imagenperfil' => $newName,
                'nivel' => $this->request->getVar('nivel'),
                'username' => $this->request->getVar('username'),
                'password' => $this->request->getVar('password')
            ];

            $player->insert($datos);
        }

        return $this->response->redirect(site_url('/login'));
    }

    public function borrar($id = null)
    {

        $player = new Jugador();
        $dataPlayer = $player->where('idjugadores', $id)->first();
        $ruta = ('../public/uploads/' . $dataPlayer['imagenperfil']);
        unlink($ruta);
        $player->where('idjugadores', $id)->delete($id);
        return $this->response->redirect(site_url('/listar'));
    }

    public function editar($id = null)
    {
        //print_r($id);
        $player = new Jugador();
        $datos['player'] = $player->where('idjugadores', $id)->first();
        $datos['pie'] = view('template/piedepagina');
        $datos['cabecera'] = view('template/cabecera');

        return view('jugadores/editar', $datos);
    }

    public function listar()
    {

        $player = new Jugador();
        $datos['jugadores'] = $player->orderBy('idjugadores', 'ASC')->findAll();

        $datos['pie'] = view('template/piedepagina');
        $datos['cabecera'] = view('template/cabecera');

        return view('jugadores/listar', $datos);
    }

    public function crear()
    {
        $datos['pie'] = view('template/piedepagina');
        $datos['cabecera'] = view('template/cabecera');

        return view('jugadores/crear', $datos);
    }
    public function guardar()
    {

        $player = new Jugador();

        //$validacion = $this->validate([
        //'imagen' =>[
        //uploaded[imagen]',
        //'mime_in[imagen,image/jpg,image/jpeg,image/png ]',
        //'max_size[imagen,1024]',
        //  ]
        //]);

        // if(!$validacion){
        //  $session =session();
        //  $session->setFlashdata('mensaje', 'Revise la informacion');
        //return redirect()->back()->withInput();
        // }


        if ($imagen = $this->request->getFile('imagen')) {
            $newName = $imagen->getRandomName();
            $imagen->move('../public/uploads/', $newName);
            $datos = [
                'nombrejugador' => $this->request->getVar('nombre'),
                'fechanacimiento' => $this->request->getVar('date'),
                'emailjugador' => $this->request->getVar('email'),
                'imagenperfil' => $newName,
                'nivel' => $this->request->getVar('nivel'),
                'username' => $this->request->getVar('username'),
                'password' => $this->request->getVar('password')
            ];

            $player->insert($datos);
        }

        return $this->response->redirect(site_url('/listar'));
    }

    public function actualizar()
    {
        $player = new Jugador();

        $datos = [
            'nombrejugador' => $this->request->getVar('nombre'),
            'fechanacimiento' => $this->request->getVar('date'),
            'emailjugador' => $this->request->getVar('email'),
            'nivel' => $this->request->getVar('nivel'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password')
        ];
        $id = $this->request->getVar('id');


        //$validacion=$this->validate([
        // 'nombrejugador'=> 'required|min_length[3]']);
        //'fechanacimiento'=> 'required|min_length[3]',
        //'emailjugador'=> $this->request->getVar('email'),
        //'nivel'=> $this->request->getVar('nivel')

        //]);

        $player->update($id, $datos);

        $validacion = $this->validate([
            'imagen' => [
                'uploaded[imagen]',
                'mime_in[imagen,image/jpg,image/jpeg,image/png ]',
                'max_size[imagen,1024]',
            ]

        ]);

        if ($validacion) {

            if ($imagen = $this->request->getFile('imagen')) {

                $dataPlayer = $player->where('idjugadores', $id)->first();
                $ruta = ('../public/uploads/' . $dataPlayer['imagenperfil']);
                unlink($ruta);

                $newName = $imagen->getRandomName();
                $imagen->move('../public/uploads/', $newName);

                $datos = ['imagenperfil' => $newName];
                $player->update($id, $datos);
            }
        }

        return $this->response->redirect(site_url('/listar'));
    }

   


}
