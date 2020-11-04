<?php

namespace App\Http\Controllers;

use App\bookingModel;
use Illuminate\Http\Request;

class bookingController extends Controller
{
    function bookingIndex() {
        return view('admin.booking');
    }

    function getBookingData() {
        $result = json_encode(bookingModel::orderBy('id', 'desc')->get());
        return $result;
    }

    function bookingDelete(Request $Req) {
        $id = $Req->input('id');
        $result = bookingModel::where('id', '=', $id)->delete();
        if ($result == true) {
            return 1;
        } else {
            return 0;
        }

    }
}
