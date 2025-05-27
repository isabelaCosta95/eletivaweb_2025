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
        $plano_contas = PlanoConta::all();
        return view("plano_contas.index", compact('plano_contas'));
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
                ->with('sucesso', 'Plano de contas inserida com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao criar o Plano de contas: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'request' => $request->all()
            ]);
            return redirect()->route('plano_contas.index')
                ->with('erro' , 'Erro ao criar o Plano de contas!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $plano_conta = PlanoConta::findOrFail($id);
        $plano_contas = PlanoConta::all();
        return view("plano_contas.show", compact('plano_conta', 'plano_contas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $plano_conta = PlanoConta::findOrFail($id);
        $plano_contas = PlanoConta::all();
        return view("plano_contas.edit", compact('plano_conta', 'plano_contas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $plano_conta = PlanoConta::findOrFail($id);
            $plano_conta->update($request->all());
            return redirect()->route('plano_contas.index')
                ->with('sucesso', 'Plano de contas alterada com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao editar o Plano de contas: ". $e->getMessage(), [
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
            $plano_conta = PlanoConta::findOrFail($id);
            $plano_conta->delete();
            return redirect()->route('plano_contas.index')
                ->with('sucesso', 'Plano de Contas excluído com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao excluir o Plano de contas: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'plano_conta_id' => $id
            ]);
            return redirect()->route('plano_contas.index')
                ->with('erro', 'Erro ao excluir!');
        }
    }
}