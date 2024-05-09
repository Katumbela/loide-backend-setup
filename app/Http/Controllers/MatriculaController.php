<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Matricula::with('aluno', 'periodo', 'curso', 'propinas', 'propinas.mes')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $recurso = Matricula::create($request->all());

        if ($recurso) {
            // Retorna uma resposta de sucesso com o recurso criado
            return response()->json(['message' => 'Matricula criado com sucesso', 'data' => $recurso], 201);
        } else {
            // Retorna uma resposta de erro se a criação do recurso falhou
            return response()->json(['message' => 'Falha ao criar matricula'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($cod_matricula)
    {
        $mat = Matricula::with('aluno', 'periodo', 'curso', 'propinas', 'propinas.mes')->find($cod_matricula);

        if (!$mat) {
            return response()->json(['status' => false, 'message' => 'Matricula não encontrado'], 404);
        }
        return response()->json($mat, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matricula $matricula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matricula $matricula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matricula $matricula)
    {
        //
    }
}