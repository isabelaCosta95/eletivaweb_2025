<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;
use App\Models\Funcionario;
use Exception;
use Illuminate\Support\Facades\Log;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcionarios = Funcionario::with('cidade')->get();
        return view("funcionarios.index", compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cidades = Cidade::all();
        return view("funcionarios.create", compact("cidades"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            Funcionario::create($request->all());
            return redirect()->route('funcionarios.index')
                ->with('sucesso', 'Funcionario inserido com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao criar o funcionario: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'request' => $request->all()
            ]);
            return redirect()->route('funcionarios.index')
                ->with('erro' , 'Erro ao criar o funcionario!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $cidades = Cidade::all();
        return view("funcionarios.show", compact('funcionario', 'cidades'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $cidades = Cidade::all();
        return view("funcionarios.edit", compact('funcionario', 'cidades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $funcionario = Funcionario::findOrFail($id);
            $funcionario->update($request->all());
            return redirect()->route('funcionarios.index')
                ->with('sucesso', 'Funcionario alterado com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao editar o funcionario: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'funcionario_id' => $id,
                'request' => $request->all()
            ]);
            return redirect()->route('funcionarios.index')
                ->with('erro', 'Erro ao editar!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $funcionario = Funcionario::findOrFail($id);
            $funcionario->delete();
            return redirect()->route('funcionarios.index')
                ->with('sucesso', 'Funcionario excluído com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao excluir o funcionario: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'funcionario_id' => $id
            ]);
            return redirect()->route('funcionarios.index')
                ->with('erro', 'Erro ao excluir!');
        }
    }
}