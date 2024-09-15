<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public  function funny(Request $request, $id){
        return response("Hello GreetingController View  {$id}");
    }
    
    // public function  invoice(Request $request, $id){
    //     return response("Invoice ID No: {$id}");
    // }

    public function invoiceID(Request $request, $id , $iditems){
        $invoiceID = "Invoice ID-NO: {$id}";
        $itemsID =  "Items ID-NO: {$iditems} ";
        return response(" {$invoiceID} AND {$itemsID} ");
    }




    public function invoice (Request $request , $id=0 ){
        if($id == 0){
            return "Data Not Found ";
        }
        return response("Invoice ID No: {$id}");
    }

    public function countries (Request $request){
        if($request->isMethod('post')){
            return response("Add Country Success");
        }
        return view('countries');
    }




}
