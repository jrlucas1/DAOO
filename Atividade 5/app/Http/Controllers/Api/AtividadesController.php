<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Atividades;
use App\Http\Requests\AtividadesRequest;


class AtividadesController extends Controller
{
    public function index()
    {
        try{
            return response()->json(Atividades::paginate(10), 200);
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao buscar atividades!',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    public function show($id)
    {
        try{
            return response()->json(Atividades::findOrFail($id), 200);
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao buscar atividade!',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    public function store(AtividadesRequest $request)
    {
        try{
            $newAtividade = $request->all();
            $atividade = Atividades::create($newAtividade);
            return response()->json([
                'message' => 'Atividade cadastrada com sucesso!',
                'atividade' => $atividade
            ], 201);
        }catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao cadastrar atividade!',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    public function update(AtividadesRequest $request, $id)
    {
        try{
            $data = $request->all();
            $newAtividade = Atividades::findOrFail($id);
            $newAtividade->update($data);
            return response()->json([
                'message' => 'Atividade atualizada com sucesso!',
                'atividade' => $newAtividade
            ], 200);
        }catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao atualizar atividade!',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    public function delete($id)
    {
       try{
        if(Atividades::findOrFail($id)->delete()){
            return response()->json([
                'message' => 'Atividade deletada com sucesso!'
            ], 200);
        }
       } catch(\Exception $e){
        return response()->json([
            'message' => 'Erro ao deletar atividade!',
            'error' => $e->getMessage()
        ], 404);
       }
    }

}
