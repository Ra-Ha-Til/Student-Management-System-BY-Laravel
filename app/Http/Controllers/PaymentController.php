<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::all();  // Make sure it fetches all fields
        return view('payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $payments = Payment::pluck('enroll_no', 'id');
        return view('payments.create', compact('payments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $input = $request->all();
        Payment::create($input);
        return redirect('payments')->with('flash_message', 'Payment Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payments = Payment::find($id);
        return view('payments.show')->with('payments', $payments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $payments = Payment::find($id);
        return view('payments.edit')->with('payments', $payments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payments = Payment::findOrFail($id);
        $input = $request->all(); // get all fields
        $payments->update($input);
        return redirect('payments')->with('flash_message', 'Batch Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Payment::destroy($id);
        return redirect('payments')->with('flash_message', 'Batch Deleted!');
    }
}