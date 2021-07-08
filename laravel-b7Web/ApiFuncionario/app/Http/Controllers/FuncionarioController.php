<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionario = \App\Models\Funcionario::all();

        return $funcionario;
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
        $name = $request->input('name');
        $role = $request->input('role');
        $amount = $request->input('amount');

        if($name && $role && $amount){
            $funcionario = new Funcionario();
            if($funcionario)
            {
                $funcionario->name = $name;
                $funcionario->role = $role;
                $funcionario->amount = $amount;
                $funcionario->save();
                return $funcionario;
            }else{
                return 'Dados nao enviados';
            }
        }else{
            return 'Os Campos nao foram enviados';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id){
            $funcionario = \App\Models\Funcionario::find($id);
            if($funcionario){
                return $funcionario;
            }else{
                return 'Objeto nao encontrado';
            }
        }else{
            return 'Id Inexistente';
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       if($id)
       {
            $name = $request->input('name');
            $role = $request->input('role');
            $amount = $request->input('amount');
            if($name && $role && $amount)
            {
                $funcionario = \App\Models\Funcionario::find($id);
                if($funcionario)
                {
                    $funcionario->name = $name;
                    $funcionario->role = $role;
                    $funcionario->amount= $amount;
                    $funcionario->save();
                    return $funcionario . "Editado Com Sucesso";
                }else{
                    return "Não foram enviados direito";
                }
            }else{
                return 'Dados nao foram passados';
            }
       }else{
            return 'Id Inexistente';
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($id)
        {
            $funcionario = \App\Models\Funcionario::find($id);
            $funcionario->delete();
            return "Deletado com sucesso";
        }else{
            return "Id Inexistente";
        }
    }
}
