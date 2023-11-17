<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Animais;
use App\Http\Requests\AnimaisRequest;


class AnimaisController extends Controller
{
    public function index()
    {
        try{
            return response()->json(Animais::paginate(10), 200);
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao buscar animais!',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    public function show ($id)
    {
        try{
            return response()->json(Animais::findOrFail($id), 200);
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao buscar animal!',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    public function store(AnimaisRequest $request)
    {
        try{
            $newAnimal = $request->all();
            $animal = Animais::create($newAnimal);
            return response()->json([
                'message' => 'Animal cadastrado com sucesso!',
                'animal' => $animal
            ], 201);
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao cadastrar animal!',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    public function update (AnimaisRequest $request, $id)
    {
        try{
            $data = $request->all();
            $animal = Animais::findOrFail($id);
            $animal->update($data);
            return response()->json([
                'message' => 'Animal atualizado com sucesso!',
                'animal' => $animal
            ], 200);
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao atualizar animal!',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    public function delete($id)
    {
       try{
            $animal = Animais::findOrFail($id);
            $animal->delete();
            return response()->json([
                'message' => 'Animal removido com sucesso!',
                'animal' => $animal
            ], 200);
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao remover animal!',
                'error' => $e->getMessage()
            ], 404);
       }
    }

    function getAnimaisFromUser($id)
    {
        try{
            $animais = Animais::where('user_id', $id)->get();
            return response()->json([
                'message' => 'Animais do usuário buscados com sucesso!',
                'animais' => $animais
            ], 200);
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao buscar animais do usuário!',
                'error' => $e->getMessage()
            ], 404);
        }
    }
}
