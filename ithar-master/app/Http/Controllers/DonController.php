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
        $data = don::latest()->paginate(5);
        return view('index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('.create');
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
            'titre'    =>  'required',
            'message'     =>  'required',
            
        ]);

       
        $form_data = array(
            'titre'       =>   $request->titre,
            'message'        =>   $request->message,
            
        );

        don::create($form_data);

        return redirect('don')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param   int $id_don
     * @return \Illuminate\Http\Response
     */
    public function show($id_don)
    {
        $data = don::findOrFail($id_don);
        return view('view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int  $id_don
     * @return \Illuminate\Http\Response
     */
    public function edit($id_don)
    {
        $data = don::findOrFail($id_don);
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id_don
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, don $don)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_don
     * @return \Illuminate\Http\Response
     */
    public function destroy(don $don)
    {
        $data = don::findOrFail($id_don);
        $data->delete();

        return redirect('don')->with('success', 'Data is successfully deleted');
    }
}
