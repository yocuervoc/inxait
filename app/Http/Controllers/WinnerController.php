<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\client;
use App\Winner;

class WinnerController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients  = Client::All();
        $len = count ( $clients );
        $randonNumber= rand (0 , $len );
        #debug_to_console($randonNumber);
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    
    public function store(Request $request)
    {
        
        
        $answer = $request->request->get("name");

        if (strcmp ( $answer, "choose_winner" )){
            return redirect('/seleccionar_ganador',$request);
        }else{
            $clients  = Client::All();
            if(count($clients)>=5){
                $len = count ( $clients );
                $randonNumber= rand (0 , $len );
                $cliente =$clients[$randonNumber];
                $winners = Winner::First();
            
                if(is_null ($winners)){
                    $winner = new Winner();
                    $winner->client_id=$cliente->id;
                    $winner->save();
                    return view('inscription',[
                        "winner" => Winner::First(),
                    ]);
                }else{
                    return view('chooseWinner');
                }
            }else{
                return redirect('/seleccionar_ganador');
            }
            
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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

