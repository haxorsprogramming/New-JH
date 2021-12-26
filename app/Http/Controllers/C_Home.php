<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Project;

class C_Home extends Controller
{
    public function homePage()
    {
        $dataProject = M_Project::all();
        $dr = ['project' => $dataProject];
        return view('home.homePage', $dr);
    }
}
