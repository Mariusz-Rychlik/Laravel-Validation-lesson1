<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function showUser(Request $req){
        // return $req->input();
        //  return $req->input('firstName');
        //  return $req->url();
        // return $req->path();
        //return $req->method();
        //return $req->all();

        $req -> validate([
            'firstName' => 'required | min:3 | max:10',
            'lastName' => 'required | min:3 | max:20',
            'mail' => 'required | email',

        ],[
            'firstNane.required' => 'Pole :attribute jest wymagane',
            'firstName.min' => 'Pole :attribute musi miec minimum :min znaki',
            'firstName.max' => 'Pole :attribute musi miec minimum :max znakow',
            'firstNane.required' => 'Pole :attribute jest wymagane',
            'firstName.min' => 'Pole :attribute musi miec minimum :min znaki',
            'firstName.max' => 'Pole :attribute musi miec minimum :max znakow',
            'mail.required' => 'Pole :attribute jest wymagane',
            'mail.email' => 'Pole :attribute jest wymagane'
        ])

        $dataUser = [
            'firstName' => $req->input('firstName'),
            'lastName' => $req->input('lastName'),
            'email' => $req->input('mail')
        ];

        return view('user', ['user' => $dataUser]);

    }
}
