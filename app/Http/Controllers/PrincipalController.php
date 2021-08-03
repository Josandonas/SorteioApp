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

        $resultadoNumero=implode(", ",$numeros);
         return view('principal',compact('resultadoNumero'));
        // return view('principal',compact('resultadoNumero'))->with('success', 'Sorteio Realizado Com Sucesso');
    }
    public function sorteioNome(Request $request){
        $quantidade=$request->quantidade;
        $nomes=explode(',',$request->nomes);
        $chaves=array_keys($nomes);
        
        $numChaves= count($chaves);

        $listaChaves = range(0, $numChaves);

        $numeros = array_rand(array_flip($listaChaves), $quantidade);
        
        $numeros = array_map(function($value){
            return str_pad($value,STR_PAD_LEFT);   
        }, $numeros);
        $indiceBusca=0;
        $indiceAux=0;
        for($indiceBusca=0; ;$indiceBusca++){

        }
        dd();
        // pattern="[a-zA-Záãâéêíîóôõú\s]+$[^:;.!?][^0-9]"
        // array_search — Procura por um valor em um array e retorna sua chave correspondente caso seja encontrado
    }
    public function index(){       
        $resultadoNumero=null;
        return view('principal',compact('resultadoNumero'));
    }
    
    public function faleConosco(){
        return view('faleConosco');
    }
}
