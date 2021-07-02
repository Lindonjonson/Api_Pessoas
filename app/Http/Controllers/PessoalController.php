<?php

namespace App\Http\Controllers;

use App\Models\Pessoal;
use Illuminate\Http\Request;



class PessoalController extends Controller
{
    private $pessoas =[
        ['id'=>1,'nome'=>'João','sobrenome'=>'Silva','email'=>'joao.silva@gmail.com','telefone'=>'84994874506','pessoa juridica'=>false,'cpf'=>'02115117492','cnpj'=>''],
        ['id'=>2,'nome'=>'Maria','sobrenome'=>'Silva','email'=>'maria.silva@gmail.com','telefone'=>'84994874506','pessoa juridica'=>true,'cpf'=>'','cnpj'=>'1236547895263'],
    ];
    function __construct(){
        $pessoas = session('pessoas');
        if (!isset($pessoas))
            session(['pessoas'=> $this->pessoas]);
    }
    
    public function index()
    {
       
        $pessoas = session('pessoas');
        
        return $pessoas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pessoal  $pessoal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pessoas = session('pessoas');  
        $index = $this->getIndex($id, $pessoas);
        $pessoas = $pessoas[$index];
        return $pessoas;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pessoal  $pessoal
     * @return \Illuminate\Http\Response
     */
    private function getIndex($id, $pessoas){
        $ids = array_column($pessoas,'id');
        $index = array_search($id,$ids);
        return $index;

    }
    public function edit(Pessoal $pessoal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pessoal  $pessoal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoal $pessoal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pessoal  $pessoal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoal $pessoal)
    {
        //
    }
}
