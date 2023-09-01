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
}
