<?php

namespace App\Http\Controllers;

use App\Models\Infopessoal;
use App\Models\User;
use Illuminate\Http\Request;

class InfopessoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infopessoals = Infopessoal::all();
        return view("adm/infopessoal", compact('infopessoals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view("adm/informacaopessoal/create", compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'genero' => 'required|max:255',
            'pais' => 'required|max:255',
            'escola' => 'required|max:255',
            'cpf' => 'required|max:255',
        ]);
        if ($validated) {
            $infopessoal = new Infopessoal();
            $infopessoal->user_id = $request->get('user_id');
            $infopessoal->genero = $request->get('genero');
            $infopessoal->pais = $request->get('pais');
            $infopessoal->escola = $request->get('escola');
            $infopessoal->cpf = $request->get('cpf');
            $infopessoal->save();
            return redirect("infopessoal");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Infopessoal  $infopessoal
     * @return \Illuminate\Http\Response
     */
    public function show(Infopessoal $infopessoal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Infopessoal  $infopessoal
     * @return \Illuminate\Http\Response
     */
    public function edit(Infopessoal $infopessoal)
    {
        $users = User::all();
        return view("adm/informacaopessoal/edit", compact('users', 'infopessoal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Infopessoal  $infopessoal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Infopessoal $infopessoal)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'genero' => 'required|max:255',
            'pais' => 'required|max:255',
            'escola' => 'required|max:255',
            'cpf' => 'required|max:255',
        ]);
        if ($validated) {
            $infopessoal->user_id = $request->get('user_id');
            $infopessoal->genero = $request->get('genero');
            $infopessoal->pais = $request->get('pais');
            $infopessoal->escola = $request->get('escola');
            $infopessoal->cpf = $request->get('cpf');
            $infopessoal->save();
            return redirect("infopessoal");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Infopessoal  $infopessoal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infopessoal $infopessoal)
    {
        $infopessoal->delete();
        return redirect("infopessoal");
    }
}
