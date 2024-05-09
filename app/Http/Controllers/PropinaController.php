<?php

namespace App\Http\Controllers;

use App\Models\Propina;
use Illuminate\Http\Request;

class PropinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Propina::all();
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
        // Verificar se já existe um registro com o mesmo cod_mes
        $existingRecord = Propina::where('cod_mes', $request->cod_mes)->exists();

        // Se não houver registro existente, criar o novo registro
        if (!$existingRecord) {
            $recurso = Propina::create($request->all());

            if ($recurso) {
                return response()->json(['message' => 'Pagamento de Propina realizado com sucesso', 'data' => $recurso], 201);
            } else {
                return response()->json(['message' => 'Falha ao pagar propina'], 500);
            }
        } else {
            return response()->json(['message' => 'Já existe um registro com o pagamento deste mês'], 208);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Propina $propina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Propina $propina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Propina $propina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Propina $propina)
    {
        //
    }
}