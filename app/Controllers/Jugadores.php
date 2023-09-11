<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Jugador;
class Jugadores extends Controller{

    public function index(){

    $player=new Jugador();
      $datos['jugadores']= $player->orderBy('idjugadores', 'ASC')->findAll();

      $datos['pie']=view('template/piedepagina');
      $datos['cabecera']=view('template/cabecera');
      
     return view('jugadores/listar', $datos);
    }

    public function crear(){
        $datos['pie']=view('template/piedepagina');
        $datos['cabecera']=view('template/cabecera');

        return view('jugadores/crear', $datos);

    }
    public function guardar(){

        $player = new Jugador();

        //$validacion = $this->validate([
           // 'imagen' =>[
               //'uploaded[imagen]',
                //'mime_in[imagen,image/jpg,image/jpeg,image/png ]',
                //'max_size[imagen,1024]',
          //  ]
       //]);

      // if(!$validacion){
          //  $session =session();
          //  $session->setFlashdata('mensaje', 'Revise la informacion');
            //return redirect()->back()->withInput();
       // }

        
            if($imagen=$this->request->getFile('imagen')){
                $newName=$imagen->getRandomName();
                $imagen->move('../public/uploads/',$newName);
                $datos=[
                    'nombrejugador'=> $this->request->getVar('nombre'),
                    'fechanacimiento'=> $this->request->getVar('date'),
                    'emailjugador'=> $this->request->getVar('email'),
                    'imagenperfil'=> $newName,
                    'nivel'=> $this->request->getVar('nivel')
                    ];

                    $player->insert($datos);
            }
        
        return $this->response->redirect(site_url('/listar'));

    }

    public function borrar($id=null){

        $player =new Jugador();
        $dataPlayer=$player->where('idjugadores', $id)->first();
        $ruta=('../public/uploads/'.$dataPlayer['imagenperfil']);
        unlink($ruta);
        $player->where('idjugadores', $id)->delete($id);
        return $this->response->redirect(site_url('/listar'));
        
    }

    public function editar($id=null){
        print_r($id);
        $player=new Jugador();
        $datos['player']=$player->where('idjugadores', $id)->first();
        $datos['pie']=view('template/piedepagina');
        $datos['cabecera']=view('template/cabecera');

        return view('jugadores/editar', $datos);

    }

    public function actualizar(){
        $player = new Jugador();
        
            $datos=[
                'nombrejugador'=> $this->request->getVar('nombre'),
                'fechanacimiento'=> $this->request->getVar('date'),
                'emailjugador'=> $this->request->getVar('email'),
                'nivel'=> $this->request->getVar('nivel')
            ];
             $id=$this->request->getVar('id');


             //$validacion=$this->validate([
               // 'nombrejugador'=> 'required|min_length[3]']);
                //'fechanacimiento'=> 'required|min_length[3]',
                //'emailjugador'=> $this->request->getVar('email'),
                //'nivel'=> $this->request->getVar('nivel')

             //]);

                $player->update($id, $datos);

                $validacion = $this->validate([
                    'imagen' =>[
                        'uploaded[imagen]',
                        'mime_in[imagen,image/jpg,image/jpeg,image/png ]',
                        'max_size[imagen,1024]',
                    ]

                    ]);

                    if($validacion){

                        if($imagen=$this->request->getFile('imagen')){
                            
                        $dataPlayer=$player->where('idjugadores',$id)->first();
                        $ruta=('../public/uploads/'.$dataPlayer['imagenperfil']);
                        unlink($ruta);

                        $newName=$imagen->getRandomName();
                        $imagen->move('../public/uploads/',$newName);

                        $datos=['imagenperfil'=> $newName];
                        $player->update($id, $datos);
                        }

                    }
                
                    return $this->response->redirect(site_url('/listar'));




    }
             
    }