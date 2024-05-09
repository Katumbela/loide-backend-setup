<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retornar todos os alunos com suas matrículas e propinas
        return Aluno::with('matriculas', 'propinas', 'propinas.mes')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'message' => 'Dados da API obtidos com sucesso!',
            'data' => [ /* Seus dados aqui */],
        ];

        // Retornando a resposta
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'data_nascimento' => 'required|date',
            'genero' => 'required|string',
            'morada' => 'required|string',
            'telefone' => 'required|string',
            'bi' => 'required|string'
        ]);

        $aluno = Aluno::create([
            'nome' => $request->nome,
            'data_nascimento' => $request->data_nascimento,
            'genero' => $request->genero,
            'morada' => $request->morada,
            'telefone' => $request->telefone,
            'bi' => $request->bi
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Aluno adicionado com sucesso!',
            'data' => $aluno
        ], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show($cod_aluno)
    {
        $student = Aluno::with('matriculas')->find($cod_aluno);

        if (!$student) {
            return response()->json(['status' => false, 'message' => 'Aluno não encontrado'], 404);
        }

        return response()->json($student, 200);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aluno $aluno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Aluno $aluno)
    {
        $request->validate([
            'nome' => 'nullable|string',
            'data_nascimento' => 'nullable|date',
            'genero' => 'nullable|string',
            'morada' => 'nullable|string',
            'telefone' => 'nullable|string',
            'bi' => 'nullable|string'
        ]);

        $aluno->update($request->only(['nome', 'data_nascimento', 'genero', 'morada', 'telefone', 'bi']));

        return response()->json([
            'status' => true,
            'message' => 'Aluno atualizado com sucesso!',
            'data' => $aluno
        ], 200);
    }
    /**
     * Remove the specified resource from storage.
     */

    public function destroy($cod_aluno)
    {
        $deleted = Aluno::destroy($cod_aluno);

        if ($deleted) {
            return response()->json(['status' => true, 'message' => 'Aluno excluído com sucesso'], 200);
        } else {
            return response()->json(['status' => false, 'message' => 'Aluno não encontrado'], 404);
        }
    }
}