<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retorna todos os cursos
        return Curso::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Exibe o formulário para criar um novo curso
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valida os dados do formulário
        $request->validate([
            'descricao' => 'required|string',
            'tipo_curso' => 'required|string',
        ]);

        // Cria um novo curso com os dados fornecidos
        $curso = Curso::create([
            'descricao' => $request->descricao,
            'tipo_curso' => $request->tipo_curso,
        ]);

        // Retorna uma resposta de sucesso com o curso criado
        return response()->json(['message' => 'Curso criado com sucesso', 'data' => $curso], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Curso $curso)
    {
        // Exibe os detalhes de um curso específico
        return response()->json($curso);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        // Exibe o formulário para editar um curso
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curso $curso)
    {

        #dd($request->all());

        $curso->fill($request->only(['descricao', 'tipo_curso']));

        // Salva as alterações no banco de dados 
        $curso->save();


        return response()->json(['message' => 'Curso atualizado com sucesso', 'data' => $curso], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso)
    {
        // Exclui o curso
        $curso->delete();

        // Retorna uma resposta de sucesso
        return response()->json(['message' => 'Curso excluído com sucesso'], 200);
    }
}