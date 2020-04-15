<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function about(){
        $author='DSI21 G2';
        return view('about')->with ('author',$author);
    }
    public function team(){
        $members = [
              [
                     'name' => 'Mohamed',
                     'age' => 20,
                     'email' => 'mohamed@example.com'
                 ],
                 [
                     'name' => 'Ahmed',
                     'age' => 20,
                     'email' => 'Ahmed@example.com'
                 ],
                 [
                     'name' => 'Nizar',
                     'age' => 20,
                     'email' => 'Nizar@example.com'
                 ]
             ];
      return view ('team')-> with ($members) ; 


    }










}
