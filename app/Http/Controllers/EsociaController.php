<?php

namespace App\Http\Controllers;

use App\Models\Esocia;
use Illuminate\Http\Request;

class EsociaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Esocia::get();
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
            'email' => 'required|email:rfc,dns',
            'name' => 'required|min:8|min:50',
            'celular' => 'required|min:11',
            'mensagem' =>'required|max:300',
        ]);
        $esocia = new Esocia;
        $esocia->create($request->all());
        return ('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Esocia  $esocia
     * @return \Illuminate\Http\Response
     */
    public function show(Esocia $esocia)
    {
        return $esocia;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Esocia  $esocia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Esocia $esocia)
    {
        $esocia->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Esocia  $esocia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Esocia $esocia)
    {
        //
    }
}
