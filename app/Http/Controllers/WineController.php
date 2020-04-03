<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wine;

class WineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wines = Wine::all();
        // dd($wines);
        return view('wines.index', compact('wines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $data = $request->all();

        $request->validate([
            'categoria' => 'required|string|max:255',
            'colore' => 'required|string|max:255',
            'tipologia' => 'required|string|max:255',
            'regione' => 'required|string|max:255',
            'nome' => 'required|string|max:255',
            'prezzo' => 'required|numeric|min:1|max:999',
            'voto' => 'required|numeric|min:1|max:10',
            'annata' => 'required|date',
        ]);



        $wine = new Wine;

        // $wine->categoria = $data['categoria'];
        // $wine->colore = $data['colore'];
        // $wine->tipologia = $data['tipologia'];
        // $wine->regione = $data['regione'];
        // $wine->nome = $data['nome'];
        // $wine->prezzo = $data['prezzo'];
        // $wine->voto = $data['voto'];
        // $wine->annata = $data['annata'];

        $wine->fill($data);
        $save = $wine->save();

        
        if ($save == true) {

            // $shoe = Shoe::orderBy('id','desc')->first();

            $wine = Wine::all()->last();
            return redirect()->route('wines.show', compact('wine'));
        }

        dd('Prodotto non salvato');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function show($id)
    // {
    //     $wine = Wine::find($id);
    //     if (empty($wine)) {
    //         abort('404');
    //     }
    //     return view('wines.show', compact('wine'));
    // }

    public function show(Wine $wine)
    {
        // $wine = Wine::find($id);
        if (empty($wine)) {
            abort('404');
        }
        return view('wines.show', compact('wine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Wine $wine)
    {
        if (empty($wine)) {
            abort('404');
        }
        return view('wines.create', compact('wine'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
