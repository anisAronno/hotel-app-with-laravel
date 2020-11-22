<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminFacilitiesController extends Controller
{
    public function FacilitiesIndex(){
       
       
        return view('admin.Facilities');
        }
}
