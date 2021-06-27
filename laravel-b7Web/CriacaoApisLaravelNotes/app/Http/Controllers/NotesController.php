<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Mockery\Matcher\Not;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = \App\Models\Note::all();
        return $notes;
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
        $note = new Note();
        $title = $request->input('title');
        $body = $request->input('body');

        if ($title && $body) {
            $note->title = $title;
            $note->body =$body;
            $note->save();

            return $note;
        } else {
            return "deu ruim";
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
        $note = Note::find($id);
        if ($note) {
            return $note;
        } else {
            return "Id não encontrado";
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
       /* $note = Note::find($id);
        return $note;*/
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

        $title = $request->input('title');
        $body = $request->input('body');

        if($id && $title &&$body)
        {
            $note = Note::find($id);
            if($note){
                $note->title = $title;
                $note->body = $body;
                $note->save();
                return $note;
            }else{
                return "Id inexistente";
            }

        }else{
            return "Campos não enviados";
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
            $note = Note::find($id);
            if($note)
            {
                $note->delete();
                return "deletado com sucesso";
            }else{
                return "Id inesistente";
            }
        }else{
            return "Id inesistente";
        }
    }
}
