<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Http\Requests\ProdutoRequest;


class ProdutoController extends Controller
{
    public function index(){
        try{
            $produtos = Produto::paginate(10);
            if($produtos->count() > 0){
                return response()->json($produtos, 200);
            } else {
                return response()->json([
                    'message' => 'Não há produtos cadastrados!',
                    'error' => '404'
                ], 404);
            }
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao buscar produtos!',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    public function show ($id){
        try{
            $produto = Produto::find($id);
            if($produto){
                return response()->json($produto, 200);
            } else {
                return response()->json([
                    'message' => 'Produto não encontrado!',
                    'error' => '404'
                ], 404);
            }
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao buscar produto!',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    public function store(ProdutoRequest $request){
       try{
            $newProduto = $request->all();
            $produto = Produto::create($newProduto);
            return response()->json([
                'message' => 'Produto cadastrado com sucesso!',
                'produto' => $produto
            ], 201);
        }catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao cadastrar produto!',
                'error' => $e->getMessage()
            ], 404);
       }


    }

    public function update(ProdutoRequest $request, $id){
        try{
            $data = $request->all();
            $newProduto = Produto::findOrFail($id);
            $newProduto->update($data);
            return response()->json([
                'message' => 'Produto atualizado com sucesso!',
                'produto' => $newProduto
            ], 200);
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao atualizar produto!',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    public function delete($id){
        try{
            if(Produto::findOrFail($id)->delete()){
                return response()->json([
                    'message' => 'Produto deletado com sucesso!',
                    'produto' => $id
                ], 200);
            }
        } catch(\Exception $e){
            return response()->json([
                'message' => 'Erro ao deletar produto!',
                'error' => $e->getMessage()
            ], 404);
        }
    }
    
}
