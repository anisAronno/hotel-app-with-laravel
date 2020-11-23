<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\RoomModel;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    
    public function index()
    {
        return view('admin.rooms');
    }

    public function get(Request $request)
    {
        $data=RoomModel::all();

        return response()->json(array('status'=>'success' ,'data'=>$data));
    }
    

    public function storeimage(Request $request)
    {
        return response()->json('status','succcess');
    }
}