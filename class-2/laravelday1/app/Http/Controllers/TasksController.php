<?php

namespace App\Http\Controllers;
use App\Models\Tasks;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function showall(){
       return Tasks::all();
    }

    public function addtask(Request $request) {
         return Tasks::create($request->all());
    }
}



