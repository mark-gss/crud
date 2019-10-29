<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\CustomerValidation;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function show()
    {
        $customers = Customer::all();
        return response()->json($customers);
    }

    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->phoneNumber = $request->phoneNumber;
        if($customer->save()){
            return response()->json(['message' => 'Successfully saved!']);
        };
    }

    public function updateCustomer(Request $request, $customerID)
    {
        $customer = Customer::findOrFail($customerID);
        // $customer = Customer::where('id', $customerID)->get();
        if(isset($customer)){
            Customer::where("id", $customerID)->update($request->all());
        }
        $customer = Customer::find($customerID);
        return response()->json($customer);
    }
}
