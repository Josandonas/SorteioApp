<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
