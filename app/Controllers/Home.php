<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $datos['pie'] = view('template/piedepagina');
        $datos['cabecera'] = view('template/cabecera');
        return view('home',$datos);
    }

    public function login(): string

    {
        $datos['pie'] = view('template/piedepagina');
        $datos['cabecera'] = view('template/cabecera');
        return view('login',$datos);
    }

}
