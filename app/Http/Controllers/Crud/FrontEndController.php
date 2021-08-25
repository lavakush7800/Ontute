<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('front');
    }
    public function store(Request $request){
        try{

        }catch(Exeption $e){

        }
    }
}
