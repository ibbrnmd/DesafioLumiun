<?php

namespace App\Http\Controllers;


use App\Models\Desafio;
use Illuminate\Http\Request;

class DesafioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $livros = Desafio::all();
        return view ('livros.index', compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livros.create');
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
        $request->validate([
            'title'          => 'required',
            'publisher'      => 'required',
            'author'         => 'required',
            'pgNumber'       => 'required',
            'category'       => 'required',
            'releasingYear'  => 'required',
        ]);

        $livro = new Desafio([
            'title'          => $request->get('title'),
            'publisher'      => $request->get('publisher'),
            'author'         => $request->get('author'),
            'pgNumber'       => $request->get('pgNumber'),
            'category'       => $request->get('category'),
            'releasingYear'  => $request->get('releasingYear')
        ]);

        $livro->save();
        return redirect('/livros')->with('sucess', 'Livro inserido!');
        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Desafio  $desafio
     * @return \Illuminate\Http\Response
     */
    public function show(Desafio $desafio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Desafio  $desafio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livro = Desafio::find($id);
        return view ('livros.edit', compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Desafio  $desafio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'          => 'required',
            'publisher'      => 'required',
            'author'         => 'required',
            'pgNumber'       => 'required',
            'category'       => 'required',
            'releasingYear'  => 'required',
        ]);

        $livro = Desafio::find($id);
        $livro-> title = $request->get('title');
        $livro->publisher = $request->get('publisher');
        $livro->author = $request->get('author');
        $livro->pgNumber = $request->get('pgNumber');
        $livro->category = $request->get('category');
        $livro->releasingYear = $request->get('releasingYear');
        

        $livro->save();
        return redirect('/livros')->with('sucess', 'Livro inserido!');
       



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Desafio  $desafio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livro = Desafio::find($id);
        $livro -> delete();

        return redirect('/livros') ->with ('sucess', 'deleteado!');

        
    }
}
