<?php

namespace App\Http\Controllers;
use App\Models\Fyp;
use Validator;
use Illuminate\Http\Request;

class ApiControllers extends Controller
{
    //
    function getData(){

        return Fyp::all();

    }

    function getFind($id=null){

        return $id?Fyp::find($id):Fyp::all();
    }

    function post(Request $request){

        $data = new Fyp;

        $data->humidity=$request->humidity;
        $data->temperature=$request->temperature;
        $result =$data->save();
        if ($result) {
            # code...
            return ["Result"=>"sucess"];
        }else
             return ["Result"=>"wrong"];


    }

    function testData(Request $request){

        $rule=array(
            "humidity"=>"required"
        );

        // $validator = Validator::make($request->all(),$rule);

        // if ($validator->fails()) {
        //     # code...
        //     return $validator->errors;
        // }
    }
}
