<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;

class TodoListController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome', ['listItems' => ListItem::all()]);
    }
    public function saveItem(Request $request)
    {
        $newListItem = new ListItem(); //also work as $newListItem = new ListItem;
        $newListItem->name = $request->listItem; // [1]
        $newListItem->is_complete = 0;
        $newListItem->save();

        \Log::info(json_encode($request->all()));
        // Log all request data to the "laravel.log" file
        //to see what values are being passed from the form in "laravel.log" file
        
        // return view('welcome', ['listItems' => ListItem::all()]);
        //return view('welcome');
        return redirect('/');

    }
}

/* [1] Error ->
    SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'name' cannot be null
    INSERT INTO
    `list_items` (`name`, `is_complete`, `updated_at`, `created_at`)
    VALUES
    (?, 0, 2023 -05 -19 13: 51: 57, 2023 -05 -19 13: 51: 57)
*/