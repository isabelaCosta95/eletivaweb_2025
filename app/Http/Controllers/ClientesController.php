<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientes;
use Exception;
use Illuminate\Support\Facades\Log;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clientes = Clientes::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            Clientes::create($request->all());
            return redirect()->route('clientes.index')
                ->with('sucesso', 'Clientes cadastrado com sucesso!');
        }
        catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao cadastrar cliente: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $cliente = Clientes::find($id);
        $clientes = Clientes::all();
        return view('clientes.show', compact('cliente', 'clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $cliente = Clientes::findOrFail($id);
        $clientes = Clientes::all();
        return view("clientes.edit", compact('cliente', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        try {
            $cliente = Clientes::findOrFail($id);
            $cliente->update($request->all());
            return redirect()->route('clientes.index')
                ->with('sucesso', 'Cliente atualizado com sucesso!');
        }
        catch (\Exception $e) {
            Log::error('Erro ao atualizar cliente: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'cliente_id' => $id,
                'request' => $request->all(),
            ]);
            return redirect()->route('cidades.index')
                ->with('error', 'Erro ao atualizar cliente: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try{
            $cliente = Clientes::findOrFail($id);
            $cliente->delete();
            return redirect()->route('clientes.index')
                ->with('sucesso', 'Cliente excluído com sucesso!');
        }
        catch (\Exception $e) {
            Log::error('Erro ao excluir cliente: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'cliente_id' => $id,
            ]);
            return redirect()->route('clientes.index')
                ->with('error', 'Erro ao excluir cliente: ' . $e->getMessage());
        }

    }
}
