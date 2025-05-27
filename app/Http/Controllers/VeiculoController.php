<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;
use Exception;
use Illuminate\Support\Facades\Log;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $veiculos = Veiculo::all();
        return view("veiculos.index", compact('veiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("veiculos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $dados = $request->all();
            if ($request->hasFile('foto')){
                $dados['foto'] = $request->file('foto')->store('veiculos', 'public');
            }
            Veiculo::create($dados);
            return redirect()->route('veiculos.index')
                ->with('sucesso', 'Veiculo inserida com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao criar a veiculo: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'request' => $request->all()
            ]);
            return redirect()->route('veiculos.index')
                ->with('erro' , 'Erro ao criar a veiculo!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $veiculo = Veiculo::findOrFail($id);
        $veiculos = Veiculo::all();
        return view("veiculos.show", compact('veiculo', 'veiculos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $veiculo = Veiculo::findOrFail($id);
        $veiculos = Veiculo::all();
        return view("veiculos.edit", compact('veiculo', 'veiculos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $veiculo = Veiculo::findOrFail($id);
            $dados = $request->all();
            if ($request->hasFile('foto')){
                if ($veiculo->foto && Storage::exists('public/'.$veiculo->foto))
                    Storage::delete('public/'.$veiculo->foto);
                $dados['foto'] = $request->file('foto')->store('veiculos', 'public');
            }
            $veiculo->update($dados);
            return redirect()->route('veiculos.index')
                ->with('sucesso', 'Veiculo alterada com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao editar a veiculo: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'veiculo_id' => $id,
                'request' => $request->all()
            ]);
            return redirect()->route('veiculos.index')
                ->with('erro', 'Erro ao editar!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $veiculo = Veiculo::findOrFail($id);
            $veiculo->delete();
            if ($veiculo->foto && Storage::exists('public/'.$veiculo->foto))
                    Storage::delete('public/'.$veiculo->foto);
            return redirect()->route('veiculos.index')
                ->with('sucesso', 'Veiculo excluído com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao excluir o veiculo: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'veiculo_id' => $id
            ]);
            return redirect()->route('veiculos.index')
                ->with('erro', 'Erro ao excluir!');
        }
    }
}