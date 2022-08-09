<?php

namespace App\Http\Controllers;

use App\Models\Apuracao;
use App\Models\Enquete;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //
    public function ajax(Enquete $enquete){  
        
        $votos = Apuracao::where('id_enquete', $enquete->id_enquete)->get();
        
        return view("ajax.questionaryAjax", compact('enquete', 'votos')); 

    }

    public function ajaxdet(Enquete $enquete){  
        
        $votos = Apuracao::where('id_enquete', $enquete->id_enquete)->get();
        
        return view("ajax.detalharAjax", compact('enquete', 'votos')); 

    }
}
