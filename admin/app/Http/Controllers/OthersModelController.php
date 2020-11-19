<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OthersModel;
class OthersModelController extends Controller
{

        public function otherIndex(){

            $results = json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
            return view('admin.Others', [
                'results'=>$results
            ]);
        }


        public function addOpeningHour(Request $request)
        {
            $OpeningHour = $request->input("OpeningHour");

            $valuecheck = (OthersModel::orderBy('id', 'desc')->get());

            if( count($valuecheck)>0){
                $result = OthersModel::where('id', '=',  $valuecheck['0']->id)->update(['opening_hour' => $OpeningHour]);
            }
            else{
                $result = OthersModel::insert(['opening_hour' => $OpeningHour]);
            }
            if ($result == true) {
                return 1;
            } else {
                return 0;
            }
        }

        public function addAddress(Request $request)
        {
            $address = $request->input("address");

            $valuecheck = (OthersModel::orderBy('id', 'desc')->get());



            if( count($valuecheck)>0){
                $result = OthersModel::where('id', '=',  $valuecheck['0']->id)->update(['address' => $address]);
            }
            else{
                $result = OthersModel::insert(['address' => $address]);
            }
            if ($result == true) {
                return 1;
            } else {
                return 0;
            }
        }


        public function addPhone(Request $request)
        {
            $phone = $request->input("phone");

            $valuecheck = (OthersModel::orderBy('id', 'desc')->get());



            if( count($valuecheck)>0){
                $result = OthersModel::where('id', '=',  $valuecheck['0']->id)->update(['phone' => $phone]);
            }
            else{
                $result = OthersModel::insert(['phone' => $phone]);
            }
            if ($result == true) {
                return 1;
            } else {
                return 0;
            }
        }

        
        public function addPhone2(Request $request)
        {
            $phone2 = $request->input("phone2");

            $valuecheck = (OthersModel::orderBy('id', 'desc')->get());



            if( count($valuecheck)>0){
                $result = OthersModel::where('id', '=',  $valuecheck['0']->id)->update(['phone2' => $phone2]);
            }
            else{
                $result = OthersModel::insert(['phone2' => $phone2]);
            }
            if ($result == true) {
                return 1;
            } else {
                return 0;
            }
        }

        public function addEmail(Request $request)
        {
            $email = $request->input("email");

            $valuecheck = (OthersModel::orderBy('id', 'desc')->get());



            if( count($valuecheck)>0){
                $result = OthersModel::where('id', '=',  $valuecheck['0']->id)->update(['email' => $email]);
            }
            else{
                $result = OthersModel::insert(['email' => $email]);
            }
            if ($result == true) {
                return 1;
            } else {
                return 0;
            }
        }


        public function addTitle(Request $request)
        {
            $title = $request->input("title");

            $valuecheck = (OthersModel::orderBy('id', 'desc')->get());



            if( count($valuecheck)>0){
                $result = OthersModel::where('id', '=',  $valuecheck['0']->id)->update(['title' => $title]);
            }
            else{
                $result = OthersModel::insert(['title' => $title]);
            }
            if ($result == true) {
                return 1;
            } else {
                return 0;
            }
        }

        public function addGmap(Request $request)
        {
            $gmap = $request->input("gmap");

            $valuecheck = (OthersModel::orderBy('id', 'desc')->get());



            if( count($valuecheck)>0){
                $result = OthersModel::where('id', '=',  $valuecheck['0']->id)->update(['gmap' => $gmap]);
            }
            else{
                $result = OthersModel::insert(['gmap' => $gmap]);
            }
            if ($result == true) {
                return 1;
            } else {
                return 0;
            }
        }











        function logoAdd(Request $req)
        {

            $valuecheck = (OthersModel::orderBy('id', 'desc')->get());
            
            $fileName=$req->file('photo')->getClientOriginalName();

        $photoPath =  $req->file('photo')->move(public_path('images/'), $fileName);

        $imageRealPath=asset('images')."/".$fileName;
            if( count($valuecheck)>0){
            $result = OthersModel::where('id', '=',  $valuecheck['0']->id)->update(['logo' => $imageRealPath]);
            } else{
                $result = OthersModel::insert(['logo' => $imageRealPath]);
            }
            if ($result == true) {
                return 1;
            } else {
                return 0;
            }
        }








}
