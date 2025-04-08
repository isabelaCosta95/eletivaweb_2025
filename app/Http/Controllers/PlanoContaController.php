<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlanoConta;
use Exception;
use Illuminate\Support\Facades\Log;

class PlanoContaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planoContas = PlanoConta::all();
        return view("plano_contas.index", compact('planoContas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("plano_contas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            PlanoConta::create($request->all());
            return redirect()->route('plano_contas.index')
                ->with('sucesso', 'Plano de Conta inserido com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao criar o plano de conta: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'request' => $request->all()
            ]);
            return redirect()->route('plano_contas.index')
                ->with('erro' , 'Erro ao criar o plano de conta!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $planoConta = PlanoConta::findOrFail($id);
        return view("plano_contas.show", compact('planoConta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $planoConta = PlanoConta::findOrFail($id);
        return view("plano_contas.edit", compact('planoConta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $planoConta = PlanoConta::findOrFail($id);
            $planoConta->update($request->all());
            return redirect()->route('plano_contas.index')
                ->with('sucesso', 'Plano de Conta alterado com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao editar o plano de conta: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'plano_conta_id' => $id,
                'request' => $request->all()
            ]);
            return redirect()->route('plano_contas.index')
                ->with('erro', 'Erro ao editar!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $planoConta = PlanoConta::findOrFail($id);
            $planoConta->delete();
            return redirect()->route('plano_contas.index')
                ->with('sucesso', 'Plano de Conta excluído com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao excluir o plano de conta: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'plano_conta_id' => $id
            ]);
            return redirect()->route('plano_contas.index')
                ->with('erro', 'Erro ao excluir!');
        }
    }
} 