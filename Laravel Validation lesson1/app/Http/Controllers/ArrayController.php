<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function ShowArray(){
        $user = [
            'firstName' => 'Janusz',
            'lastName' => 'Janusz',
            'city' => 'Poznan',
            'hobby' => ['żużel', 'siatkówka', 'skoki narciarskie']

        ];
        return view('user.show_user', ['user' => $user]);
    }
}
