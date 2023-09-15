<?php

namespace App\Http\Controllers;

use App\Models\Animais;
use Illuminate\Http\Request;

class AnimaisController extends Controller
{
    /**
     * @var Animal
     */

    private $animal;
    public function __construct()
    {
        $this->animal = new Animais();
    }

    public function index()
    {
        return view('animais',['animais'=>$this->animal->all()]);
    }

    public function single($id){
        return view('animal', ['animal'=>$this->animal->find($id)]);
    }
    
    public function create (){

        return view('animal_create');

    }
    public function store (Request $request){

        $newAnimal = $request->all();

        if(Animais::create($newAnimal))
            return redirect('/animais');
        else
            dd("Erro ao inserir animal");
    }

   

    public function update(Request $request, $id){
        $updatedAnimal = $request->all();

        if(!Animais::find($id)->update($updatedAnimal))
            dd("Erro ao atualizar o animal de id $id !");
        return redirect('/animais');
    }

    public function edit($id){

        $data = ['animal'=>Animais::find($id)];
        return view('animal_edit', $data);

    }

    public function delete($id){

        return view('animais.remove', [
            'animal' -> Animais::find($id)
        ]);
    }

    public function remove(Request $request, $id){

        if($request->confirmar==="Deletar")
            if(!Animais::destroy($id))
            dd("Erro ao deletar o animal $id !");
        return redirect('/animais/');
    }
}
