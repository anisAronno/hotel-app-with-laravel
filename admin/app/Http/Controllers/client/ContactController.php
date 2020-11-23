<?php

namespace App\Http\Controllers\client;
use Illuminate\Http\Request;
use App\contactModel;
use App\FacilitiesModel;
use App\OthersModel;
use App\SocialModel;

use App\Http\Controllers\Controller;
class ContactController extends Controller
{
    public function contactIndex(){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());
        $facilities= json_decode(FacilitiesModel::all());
        return view('client.Contact',[
            'othersData'=>$othersData,
            'socialData'=>$socialData,
            'facilities'=> $facilities
        ]);
    }

    function contactSend(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $PhonNumber=$request->input('PhonNumber');
        $YourSubject=$request->input('YourSubject');
        $massage=$request->input('massage');


        $data= new contactModel();
        $data->name=$name;
        $data->email=$email;
        $data->PhonNumber=$PhonNumber;
        $data->YourSubject=$YourSubject;
        $data->massage=$massage;
        $result=$data->save();


        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

}
