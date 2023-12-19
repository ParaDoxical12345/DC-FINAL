<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index(){
        $customers = Customer::orderBy('name')->get();
        return response()->json($customers);
    }

    public function view(Customer $customer){
        $customer->load('sales');
        return response()->json($customer);
    }
}
