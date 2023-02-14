<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;
use App\Models\Users;

class TestController extends Controller{
    
    public function index(){
        $users = Users::all();
        return view('index');
    }

    public function add(TestRequest $request){
        $form = $request->all();
        Users::create($form);
        return view('thanks');
    }


}
