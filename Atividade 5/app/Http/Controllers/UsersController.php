<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * @var Users
     */

     private $user;

     public function __construct()
     {
         $this->user = new Users();
     }

     public function index()
     {
        return view('users',['users'=>$this->user->all()]);
     }

    public function single($id){
        return view('user', ['user'=>$this->user->find($id)]);
    }
}
