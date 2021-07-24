<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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
        // criar um vetor que absorva o resultado 
        return implode(", ",$numeros);
    }
    // public function sorteioNome(){

    // }
    public function index(){       
        return view('principal');
    }
    // public function create(){
    // }
    // public function store(Request $request){
    // }
    // public function show($id){
    // }
    // public function edit($id){
    // }
    // public function update(Request $request, $id){
    // }
    // public function destroy($id){
    // }
}
