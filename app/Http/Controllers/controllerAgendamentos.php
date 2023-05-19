<?php

namespace App\Http\Controllers;
use App\Models\agendamentos;

use Illuminate\Http\Request;

class controllerAgendamentos extends Controller
{
    
    public function store(Request $request) {

        $control = new agendamentos();

        $control->nome = $request->txtNome;
        $control->telefone = $request->txtTelefone;
        $control->origem = $request->txtOrigem;
        $control->data_contato = $request->dateContato;
        $control->observacao = $request->txtObservacao;

        $control->save();

        return redirect('/');

    }

    public function consultaragenda(){
        $consulta = new agendamentos();
        return view('consulta', ['agendas' => $consulta->all()]);
    }

    public function Editar($id){
        
        $consulta = agendamentos::findOrFail($id);

        return view('editar', ['agendas' => $consulta]);

    }

    public function UPDATE(Request $request){

        /*        
        agendamentos::findOrFail($request->id)->update($request->all());

        $control = new agendamentos();

        $control->nome = $request->txtNome;
        $control->telefone = $request->txtTelefone;
        $control->origem = $request->txtOrigem;
        $control->data_contato = $request->dateContato;
        $control->observacao = $request->txtObservacao;
        
        agendamentos::where($request->id)->update($control);
        */

        $agendamentos = agendamentos::where('id',$request->id)->update([
        'nome' => $request->txtNome,
        'telefone' => $request->txtTelefone,
        'origem' => $request->txtOrigem,
        'data_contato' => $request->dateContato,
        'observacao' => $request->txtObservacao
        ]); 

        return redirect('/consultar');
    }

    public function DELETE($id){

        agendamentos::findOrFail($id)->delete();

        return redirect('/consultar');
    }

}
