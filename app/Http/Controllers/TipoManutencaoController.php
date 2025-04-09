<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoManutencao;
use Exception;
use Illuminate\Support\Facades\Log;

class TipoManutencaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipo_manutencaos = TipoManutencao::all();
        return view("tipo_manutencaos.index", compact('tipo_manutencaos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tipo_manutencaos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            TipoManutencao::create($request->all());
            return redirect()->route('tipo_manutencaos.index')
                ->with('sucesso', 'Tipo de Manutencao inserida com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao criar o tipo de manutenção: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'request' => $request->all()
            ]);
            return redirect()->route('tipo_manutencaos.index')
                ->with('erro' , 'Erro ao criar o tipo de manutenção!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tipo_manutencao = TipoManutencao::findOrFail($id);
        $tipo_manutencaos = TipoManutencao::all();
        return view("tipo_manutencaos.show", compact('tipo_manutencao', 'tipo_manutencaos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tipo_manutencao = TipoManutencao::findOrFail($id);
        $tipo_manutencaos = TipoManutencao::all();
        return view("tipo_manutencaos.edit", compact('tipo_manutencao', 'tipo_manutencaos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $tipo_manutencao = TipoManutencao::findOrFail($id);
            $tipo_manutencao->update($request->all());
            return redirect()->route('tipo_manutencaos.index')
                ->with('sucesso', 'Tipo de Manutencao alterada com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao editar o tipo de manutenção: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'tipo_manutencao_id' => $id,
                'request' => $request->all()
            ]);
            return redirect()->route('tipo_manutencaos.index')
                ->with('erro', 'Erro ao editar!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $tipo_manutencao = TipoManutencao::findOrFail($id);
            $tipo_manutencao->delete();
            return redirect()->route('tipo_manutencaos.index')
                ->with('sucesso', 'Tipo de Manutencao excluído com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao excluir o tipo de manutenção: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'tipo_manutencao_id' => $id
            ]);
            return redirect()->route('tipo_manutencaos.index')
                ->with('erro', 'Erro ao excluir!');
        }
    }
}