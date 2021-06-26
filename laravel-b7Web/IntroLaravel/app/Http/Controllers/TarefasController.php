<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tarefa;
class TarefasController extends Controller
{
    public function list()
    {
        //$list = DB::select('SELECT * FROM tarefas');
        $list = Tarefa::all();
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
        $input->validate([
         'titulo'=>['required','string']
        ]);
        $title = $input->input('titulo');
        /*DB::insert('INSERT INTO tarefas(titulo)values(:titulo)', ['titulo' => $title]);*/
        $tarefa = new Tarefa();
        $tarefa->titulo = $title;
        $tarefa->save();
        $url = route('tarefas.list');
        return redirect($url);


    }
    public function edit($id)
    {
        /*$data = DB::select('SELECT * FROM tarefas WHERE id = :id',[
            'id'=>$id
        ]);*/
        $data = Tarefa::find($id);
       if($data){
            return view('tarefas.edit',[
             'data'=> $data,
            ]);
       }else{
           return redirect()->route('tarefas.list');
       }

    }
    public function editAction(Request $input,$id)
    {
        $input->validate([
            'titulo' => ['required', 'string']
        ]);
            $titulo = $input->input('titulo');

        /*
              DB::update('UPDATE tarefas set titulo = :titulo WHERE id = :id',[
                  'id'=>$id,
                  'titulo'=>$titulo
              ]);*/
             /* $tarefa = Tarefa::find($id);
              $tarefa->titulo = $titulo;
              $tarefa->save();*/
              Tarefa::find($id)->update(['titulo'=> $titulo]);
                return redirect()->route('tarefas.list');


    }
    public function del($id)
    {

            /*DB::delete('DELETE FROM tarefas WHERE id = :id',[
                'id'=>$id
            ]);*/
            $tarefa = Tarefa::find($id);
            $tarefa->delete();
            return redirect()->route('tarefas.list');

    }
    public function done($id)
    {
       /* DB::update('UPDATE tarefas set resolvido = 1 - resolvido WHERE id = :id',['id'=>$id]);*/
       $t = Tarefa::find($id);
       if($t){
            $t->resolvido = 1 - $t->resolvido;
            $t->save();
       }

        return redirect()->route('tarefas.list');
    }
}
