<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    function index(){
        $file = file_get_contents(resource_path('assets/js/data/users.json'));
        $users = json_decode($file, true);
        return view('users.index',['users' => $users]); ;
    }

    function create(){
        return view('users.create') ;
        
    }
    function show($id){
        return view('users.show' , ['id' => $id]) ;
        
    }
    function store(Request $request){
        return "store works!!" ;
        
    }
    function edit($name,$email){

        return view('users.edit', ['name' => $name], ['email' => $email]) ;
    
    }
    function update($id){

        return "update works!!" ;
        
    }
    function destroy($id){

        return "destroy works!!" ;

    }
}
