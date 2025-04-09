<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;
use Exception;
use Illuminate\Support\Facades\Log;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cidades = Cidade::all();
        return view("cidades.index", compact('cidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("cidades.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            Cidade::create($request->all());
            return redirect()->route('cidades.index')
                ->with('sucesso', 'Cidade inserida com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao criar a cidade: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'request' => $request->all()
            ]);
            return redirect()->route('cidades.index')
                ->with('erro' , 'Erro ao criar a cidade!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cidade = Cidade::findOrFail($id);
        $cidades = Cidade::all();
        return view("cidades.show", compact('cidade', 'cidades'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cidade = Cidade::findOrFail($id);
        $cidades = Cidade::all();
        return view("cidades.edit", compact('cidade', 'cidades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $cidade = Cidade::findOrFail($id);
            $cidade->update($request->all());
            return redirect()->route('cidades.index')
                ->with('sucesso', 'Cidade alterada com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao editar a cidade: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'cidade_id' => $id,
                'request' => $request->all()
            ]);
            return redirect()->route('cidades.index')
                ->with('erro', 'Erro ao editar!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $cidade = Cidade::findOrFail($id);
            $cidade->delete();
            return redirect()->route('cidades.index')
                ->with('sucesso', 'Cidade excluído com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao excluir o cidade: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'cidade_id' => $id
            ]);
            return redirect()->route('cidades.index')
                ->with('erro', 'Erro ao excluir!');
        }
    }
}