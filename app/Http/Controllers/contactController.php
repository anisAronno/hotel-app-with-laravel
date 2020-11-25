<?php

namespace App\Http\Controllers;

use App\contactModel;
use Illuminate\Http\Request;

class contactController extends Controller
{
    function contactIndex() {
        return view('admin.contact');
    }

    function getContactData() {
        $result = json_encode(contactModel::orderBy('id', 'desc')->get());
        return $result;
    }

    function contactDelete(Request $Req) {
        $id = $Req->input('id');
        $result = contactModel::where('id', '=', $id)->delete();
        if ($result == true) {
            return 1;
        } else {
            return 0;
        }

    }
}
