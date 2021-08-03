<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\Environment\Console;

class PrincipalController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sorteioNumero(Request $request){
        $num1=$request->inicial;
        $num2=$request->final;
        $quantidade=$request->quantidade;
        $listaDeNumeros = range($num1, $num2);
        $numeros = array_rand(array_flip($listaDeNumeros), $quantidade);
        $numeros = array_map(function($value){
            return str_pad($value, 2, '0', STR_PAD_LEFT);   
        }, $numeros);
        $resultadoNomes=null;
        $resultadoNumero=implode(", ",$numeros);
         return view('principal',compact('resultadoNumero','resultadoNomes'));
    }

    public function sorteioNome(Request $request){
        $resultadoNumero=null;
        $quantidade=$request->quantidade;
        // preg_match_all("~|<[^>]+>(.*)</[^>]+>|U@/s",
        // $request->nomes, $out, PREG_PATTERN_ORDER);
        // $out[0][0] . ", " . $out[0][1];
        $nomes=explode(',',$request->nomes);
        $misturaNomes = array_rand(array_flip($nomes), $quantidade);
        $resultadoNomes=implode(", ",$misturaNomes);
        return view('principal',compact('resultadoNomes','resultadoNumero'));
    }
    public function index(){       
        $resultadoNumero=null;
        $resultadoNomes=null;
        return view('principal',compact('resultadoNumero','resultadoNomes'));
    }
    
    public function faleConosco(){
        return view('faleConosco');
    }
}
