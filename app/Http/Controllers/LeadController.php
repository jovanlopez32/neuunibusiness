<?php

namespace App\Http\Controllers;

use App\Mail\BusinessMail;
use App\Mail\NotificationMail;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    //

    /* Funcion que recive los datps del formulario */
    public function contactando(Request $u){


        $lead = new Lead();


        $lead->name = $u->name;
        $lead->ocupation = $u->ocupation;
        $lead->cel = $u->cel;
        $lead->email = $u->email;
        $lead->tel = $u->tel;
        $lead->business = $u->business;
        $lead->interes = $u->interes;

        $lead->save();
        /* Mail::to = Direccion donde sera enviado el correo electronico, BusinessMail esta definida en app/Mail/BusinessMail.php */
        /* send(new BusinessMail($u)) = Cargamos el mail que definimos en el archivo */

        Mail::to($u->email)->send(new BusinessMail($u));

        /* Mail::to("j.campos@unineuuni.edu.mx")->send(new NotificationMail($u));
        Mail::to("gg.garay@unineuuni.edu.mx")->send(new NotificationMail($u));
        Mail::to("everest.studio32@gmail.com")->send(new NotificationMail($u)); */

        $enviado = true;

        return view('pages.contact', compact('enviado'));

    }

    public function Aceptarlead(Request $a){

        $id_lead = $a->id;

        Lead::query()->where('id', $id_lead)->update(['aceptado' => true]);

        return redirect()->route('dashboard');

    }


    public function conexionesAceptadas(){
        $leads_aceptados = Lead::query()->where('aceptado', true)->get();

        return view('Admin.acepted-lead', compact('leads_aceptados'));
    }

}


