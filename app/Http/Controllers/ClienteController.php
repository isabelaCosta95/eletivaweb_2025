<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;
use App\Models\Cliente;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::with('cidade')->get();
        return view("clientes.index", compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cidades = Cidade::all();
        return view("clientes.create", compact("cidades"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $dados = $request->all();
            if ($request->hasFile('foto')){
                $dados['foto'] = $request->file('foto')->store('clientes', 'public');
            }
            Cliente::create($dados);
            return redirect()->route('clientes.index')
                ->with('sucesso', 'Cliente inserido com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao criar o cliente: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'request' => $request->all()
            ]);
            return redirect()->route('clientes.index')
                ->with('erro' , 'Erro ao criar o cliente!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cidades = Cidade::all();
        return view("clientes.show", compact('cliente', 'cidades'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cidades = Cidade::all();
        return view("clientes.edit", compact('cliente', 'cidades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $cliente = Cliente::findOrFail($id);
            $dados = $request->all();
            if ($request->hasFile('foto')){
                if ($cliente->foto && Storage::exists('public/'.$cliente->foto))
                    Storage::delete('public/'.$cliente->foto);
                $dados['foto'] = $request->file('foto')->store('clientes', 'public');
            }
            $cliente->update($dados);
            return redirect()->route('clientes.index')
                ->with('sucesso', 'Cliente alterado com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao editar o cliente: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'cliente_id' => $id,
                'request' => $request->all()
            ]);
            return redirect()->route('clientes.index')
                ->with('erro', 'Erro ao editar!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $cliente = Cliente::findOrFail($id);
            $cliente->delete();
            if ($cliente->foto && Storage::exists('public/'.$cliente->foto))
                    Storage::delete('public/'.$cliente->foto);
            return redirect()->route('clientes.index')
                ->with('sucesso', 'Cliente excluído com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao excluir o cliente: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'cliente_id' => $id
            ]);
            return redirect()->route('clientes.index')
                ->with('erro', 'Erro ao excluir!');
        }
    }
}