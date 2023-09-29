<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * @var Produto
     */
    
    private $produto;

    public function __construct()
    {
        $this->produto = new Produto();
    }

    public function index()
    {
        return view('produtos',['produtos'=>$this->produto->all()]);
    }

    public function single($id){
        return view('produto', ['produto'=>$this->produto->find($id)]);
    }

   public function store (Request $request){

       $newProduto = $request->all();

       if(Produto::create($newProduto))
           return redirect('/produtos');
       else
           dd("Erro ao inserir produto");
   }

   public function create (){

       return view('produto_create');

   }

   public function update(Request $request, $id){
       $updatedProduto = $request->all();

       if(!Produto::find($id)->update($updatedProduto))
           dd("Erro ao atualizar o produto de id $id !");
       return redirect('/produtos');
   }

   public function edit($id){

       $data = ['produto'=>Produto::find($id)];
       return view('produto_edit', $data);

   }

   public function delete($id){

       return view('produto.remove', [
           'produto' -> Produto::find($id)
       ]);
   }

   public function remove(Request $request, $id){

       if($request->confirmar==="Deletar")
           if(!Produto::destroy($id))
           dd("Erro ao deletar o produto $id !");
       return redirect('/produtos/');
   }

}
