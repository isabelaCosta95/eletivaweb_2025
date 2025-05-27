<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seguradora;
use Exception;
use Illuminate\Support\Facades\Log;

class SeguradoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seguradoras = Seguradora::all();
        return view("seguradoras.index", compact('seguradoras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("seguradoras.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            Seguradora::create($request->all());
            return redirect()->route('seguradoras.index')
                ->with('sucesso', 'Seguradora inserida com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao criar a seguradora: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'request' => $request->all()
            ]);
            return redirect()->route('seguradoras.index')
                ->with('erro' , 'Erro ao criar a seguradora!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $seguradora = Seguradora::findOrFail($id);
        $seguradoras = Seguradora::all();
        return view("seguradoras.show", compact('seguradora', 'seguradoras'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $seguradora = Seguradora::findOrFail($id);
        $seguradoras = Seguradora::all();
        return view("seguradoras.edit", compact('seguradora', 'seguradoras'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $seguradora = Seguradora::findOrFail($id);
            $seguradora->update($request->all());
            return redirect()->route('seguradoras.index')
                ->with('sucesso', 'Seguradora alterada com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao editar a seguradora: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'seguradora_id' => $id,
                'request' => $request->all()
            ]);
            return redirect()->route('seguradoras.index')
                ->with('erro', 'Erro ao editar!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $seguradora = Seguradora::findOrFail($id);
            $seguradora->delete();
            return redirect()->route('seguradoras.index')
                ->with('sucesso', 'Seguradora excluído com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao excluir a seguradora: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'seguradora_id' => $id
            ]);
            return redirect()->route('seguradoras.index')
                ->with('erro', 'Erro ao excluir!');
        }
    }
}