<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;

class TodoListController extends Controller
{
    public function saveItem(Request $request){
        \Log::info(json_encode($request->all()));
        //to see what values are being passed from the form in "laravel.log" file
        return view('welcome');
    }
}
