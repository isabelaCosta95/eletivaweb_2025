<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peca;
use Exception;
use Illuminate\Support\Facades\Log;

class PecaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pecas = Peca::all();
        return view("pecas.index", compact('pecas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pecas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            Peca::create($request->all());
            return redirect()->route('pecas.index')
                ->with('sucesso', 'Peca inserida com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao criar a peca: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'request' => $request->all()
            ]);
            return redirect()->route('pecas.index')
                ->with('erro' , 'Erro ao criar a peca!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $peca = Peca::findOrFail($id);
        $pecas = Peca::all();
        return view("pecas.show", compact('peca', 'pecas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peca = Peca::findOrFail($id);
        $pecas = Peca::all();
        return view("pecas.edit", compact('peca', 'pecas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $peca = Peca::findOrFail($id);
            $peca->update($request->all());
            return redirect()->route('pecas.index')
                ->with('sucesso', 'Peca alterada com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao editar a peca: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'peca_id' => $id,
                'request' => $request->all()
            ]);
            return redirect()->route('pecas.index')
                ->with('erro', 'Erro ao editar!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $peca = Peca::findOrFail($id);
            $peca->delete();
            return redirect()->route('pecas.index')
                ->with('sucesso', 'Peca excluído com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao excluir o peca: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'peca_id' => $id
            ]);
            return redirect()->route('pecas.index')
                ->with('erro', 'Erro ao excluir!');
        }
    }
}