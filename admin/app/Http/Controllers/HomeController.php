<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ReviewModel;
use App\VisitorTable;
use App\bookingModel;

class HomeController extends Controller
{

    function HomeIndex(){



        $TotalReview=ReviewModel::count();

        $TotalVisitor=VisitorTable::count();

        $TotalBooking=bookingModel::count();


         return view('admin.Home',[
            'TotalReview'=>$TotalReview,
            'TotalVisitor'=>$TotalVisitor,
            'TotalBooking'=>$TotalBooking

         ]);
     }
}
