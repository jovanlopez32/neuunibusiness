<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index() {
        return view('index');
    }

    public function empresas(){
        return view("pages.business");
    }

    public function nosotros() {
        return view('pages.us');
    }

    public function contacto(){
        return view('pages.contact');
    }

    public function capacitaciones(){
        return view('pages.training');
    }

    public function cuestionario(){
        return view('pages.questionary');
    }

    public function licenciaturas(){
        return view('pages.licenciaturas');

    }
    public function maestrias(){
        return view('pages.maestrias');

    }
    public function doctorado(){
        return view('pages.doctorado');

    }
}
