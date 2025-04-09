<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Exception;
use Illuminate\Support\Facades\Log;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view("categorias.index", compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categorias.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            Categoria::create($request->all());
            return redirect()->route('categorias.index')
                ->with('sucesso', 'Categoria inserida com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao criar a categoria: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'request' => $request->all()
            ]);
            return redirect()->route('categorias.index')
                ->with('erro' , 'Erro ao criar a categoria!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categorias = Categoria::all();
        return view("categorias.show", compact('categoria', 'categorias'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categorias = Categoria::all();
        return view("categorias.edit", compact('categoria', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $categoria = Categoria::findOrFail($id);
            $categoria->update($request->all());
            return redirect()->route('categorias.index')
                ->with('sucesso', 'Categoria alterada com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao editar a categoria: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'categoria_id' => $id,
                'request' => $request->all()
            ]);
            return redirect()->route('categorias.index')
                ->with('erro', 'Erro ao editar!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $categoria = Categoria::findOrFail($id);
            $categoria->delete();
            return redirect()->route('categorias.index')
                ->with('sucesso', 'Categoria excluído com sucesso!');
        } catch (Exception $e){
            Log::error("Erro ao excluir o categoria: ". $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'categoria_id' => $id
            ]);
            return redirect()->route('categorias.index')
                ->with('erro', 'Erro ao excluir!');
        }
    }
}