<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('front.master',[
            'projects'=>Project::orderBy('id','desc')->get()
        ]);
    }
}
