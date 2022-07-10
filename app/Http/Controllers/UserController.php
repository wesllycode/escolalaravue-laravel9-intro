<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        return 'x';
    }

    public function showId($id){
        return 'O id do usuário é -> '. $id;
    }
}
