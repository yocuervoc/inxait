<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\client;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #return (Client::All());
        #return view('client', [
        #    "clients"  => Client::All()
        #]);
        return view('inscription');
        
    }

    public function chooseWinner()
    {
        
        return view('chooseWinner', [
            "clients"  => Client::All()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|alpha',
            'last_name' => 'required|min:5|alpha',
            'cedula' => 'required|unique:clients|min:100000|numeric',
            'department' => 'required',
            'city' => 'required',
            'phone' => 'required|unique:clients|min:1000000000|numeric',
            'email' => 'required|unique:clients|min:8|email',
            'habeas_data' => 'required'

        ]);
        $client = new Client();
        $client->name = $request->get('name');
        $client->last_name = $request->get('last_name');
        $client->cedula = $request->get('cedula');
        $client->departments = $request->get('department');
        $client->city = $request->get('city');
        $client->phone = $request->get('phone');
        $client->email = $request->get('email');
        $client->habeas_data = $request->get('habeas_data');


        $client->save();
        
        return redirect('/clients');
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}