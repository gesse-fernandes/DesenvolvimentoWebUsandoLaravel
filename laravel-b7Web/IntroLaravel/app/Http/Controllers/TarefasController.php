<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TarefasController extends Controller
{
    public function list()
    {
        $list = DB::select('SELECT * FROM tarefas');

        return view('tarefas.list',[
            'list'=>$list
        ]);
    }

    public function add()
    {
        return view('tarefas.add');
    }
    public function addAction(Request $input)
    {
        if($input->filled('titulo'))
        {
            $title =$input->input('titulo');
            DB::insert('INSERT INTO tarefas(titulo)values(:titulo)',['titulo'=>$title]);
            $url = route('tarefas.list');
            return redirect($url);
        }else{

            return redirect()->route('tarefas.add')->with('warning', 'Voce nao preencheu o titulo');
        }


    }
    public function edit($id)
    {
        $data = DB::select('SELECT * FROM tarefas WHERE id = :id',[
            'id'=>$id
        ]);
       if(count($data) > 0){
            return view('tarefas.edit',[
             'data'=> $data[0],
            ]);
       }else{
           return redirect()->route('tarefas.list');
       }

    }
    public function editAction(Request $input,$id)
    {
        if($input->filled('titulo')){
            $titulo = $input->input('titulo');
            $data = DB::select('SELECT * FROM tarefas WHERE id = :id', [
                'id' => $id
            ]);
            if (count($data) > 0) {
              DB::update('UPDATE tarefas set titulo = :titulo WHERE id = :id',[
                  'id'=>$id,
                  'titulo'=>$titulo
              ]);
                return redirect()->route('tarefas.list');
            }
        }else{
            return redirect()->route('tarefas.edit',['id'=>$id])->with('warning', 'Voce nao preencheu o titulo');
        }
    }
    public function del($id)
    {

            DB::delete('DELETE FROM tarefas WHERE id = :id',[
                'id'=>$id
            ]);
            return redirect()->route('tarefas.list');

    }
    public function done($id)
    {
        DB::update('UPDATE tarefas set resolvido = 1 - resolvido WHERE id = :id',['id'=>$id]);
        return redirect()->route('tarefas.list');
    }
}
