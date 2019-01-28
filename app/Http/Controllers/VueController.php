<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vue;

class VueController extends Controller
{
    public function getVues(){
    	return Vue::orderBy('id', 'DESC')->get();
    }

    public function setVue(Request $request){
    	$this->validate($request, [
    		'descripcion' => 'required'
    	]);

    	Vue::create($request->all());

    	return;
    }
}
