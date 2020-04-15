<?php

namespace App\Http\Controllers;

use App\don;
use Illuminate\Http\Request;

class DonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $don= don::latest()->paginate(5);
        return view('index', compact('don'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'    =>  'required',
            'last_name'     =>  'required',
        
        ]);

        $form_don = array(
            'first_name'       =>   $request->first_name,
            'last_name'        =>   $request->last_name,
        
        );

        don::create($form_don);

        return redirect('don')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\don  $don
     * @return \Illuminate\Http\Response
     */
    public function show(don $don)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\don  $don
     * @return \Illuminate\Http\Response
     */
    public function edit(don $don)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\don  $don
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, don $don)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\don  $don
     * @return \Illuminate\Http\Response
     */
    public function destroy(don $don)
    {
        //
    }
}
