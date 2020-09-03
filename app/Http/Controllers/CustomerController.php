<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
   function list(){
        $customers=Customer::get();
        return view('customers',[
            'customers'=>$customers
        ]);
    }
    
    function show($city){
        $customers=Customer::where('customerCity','=',$city)->get();
        return view('show',[
            'customers'=>$customers
        ]);
    }
}
