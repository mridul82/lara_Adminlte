<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::orderBy('id', 'DESC')->get();
        return view('customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'cust_firstname' => 'required|min:5|max:35', 'cust_lastname' => 'required|min:5|max:35',  'cust_no' => 'required|numeric', 'cust_loc' => 'required', 'cust_city' => 'required'
        ],[
                'cust_firstname.required' => ' The first name field is required.',
                'cust_firstname.min' => ' The first name must be at least 5 characters.',
                'cust_firstname.max' => ' The first name may not be greater than 35 characters.',
                'cust_lastname.required' => ' The last name field is required.',
                'cust_lastname.min' => ' The last name must be at least 5 characters.',
                'cust_lastname.max' => ' The last name may not be greater than 35 characters.',
            ]);
       $input = $request->all();
       Customer::create($input);
       return redirect()->route('customer.index')

                        ->with('success','Item created successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'cust_firstname' => 'required', 'cust_lastname' => 'required', 'user_id' => 'required', 'cust_no' => 'required', 'cust_loc' => 'required', 'cust_city' => 'required'
        ]);
       
        Customer::find($id)->update($request->all());
        return redirect()->route('customer.index')
                        ->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::findOrFail($id)->delete();

        return redirect()->route('customer.index')

                        ->with('success','Item deleted successfully');
    }
}
