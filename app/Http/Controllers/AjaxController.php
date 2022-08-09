<?php

namespace App\Http\Controllers;

use App\Models\Apuracao;
use App\Models\Enquete;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    // Ajax redirecionador da página de auditoria de voto(contagem de votos)
    public function ajax(Enquete $enquete){  
        
        $votos = Apuracao::where('id_enquete', $enquete->id_enquete)->get();
        
        return view("ajax.questionaryAjax", compact('enquete', 'votos')); 

    }
    
    // Ajax redirecionador da página de auditoria de voto(contagem de votos)
    public function ajaxdet(Enquete $enquete){  
        
        $votos = Apuracao::where('id_enquete', $enquete->id_enquete)->get();
        
        return view("ajax.detalharAjax", compact('enquete', 'votos')); 

    }
}
