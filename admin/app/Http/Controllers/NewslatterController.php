<?php

namespace App\Http\Controllers;

use App\NewslatterModel;
use Illuminate\Http\Request;

class NewslatterController extends Controller
{
    function newslatterIndex() {
        return view('newslatter');
    }

    function getNewslatterData() {
        $result = json_encode(NewslatterModel::orderBy('id', 'desc')->get());
        return $result;
    }

    function newslatterDelete(Request $Req) {
        $id = $Req->input('id');
        $result = NewslatterModel::where('id', '=', $id)->delete();
        if ($result == true) {
            return 1;
        } else {
            return 0;
        }

    }
}
