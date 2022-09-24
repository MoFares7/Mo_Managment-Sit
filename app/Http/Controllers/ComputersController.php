<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\computer;
use PhpParser\Node\Stmt\Static_;

class ComputersController extends Controller
{

    //! Arry of Static Data



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('computers.index', [
            'computers' => computer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('computers.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => ['required', 'integer']
        ]);


        $computer = new computer();
        //? stripe_tags is prevent send data cross input
        $computer->name   = strip_tags($request->input('computer-name'));
        $computer->origin = strip_tags($request->input('computer-origin'));
        $computer->price   = strip_tags($request->input('computer-price'));

        $computer->save();

        return redirect()->route('computers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($computer)
    {

        //        $computers = self::getData();
        //   $index = array_search($computer, array_column($computers, 'id'));

        return view('computers.show', [
            'computer' => computer::findOrFail($computer)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $computer
     * @return \Illuminate\Http\Response
     */
    public function edit($computer)
    {
        return view('computers.edit', [
            'computer' => computer::findOrFail($computer)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $computer)
    {
        $request->validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => ['required', 'integer']
        ]);

        $update =  computer::findOrFail($computer);
        //? stripe_tags is prevent send data cross input
        $update->name   = strip_tags($request->input('computer-name'));
        $update->origin = strip_tags($request->input('computer-origin'));
        $update->price   = strip_tags($request->input('computer-price'));

        $update->save();

        return redirect()->route('computers.show', $computer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($computer_id)
    {
        $detete = computer::findOrFail($computer_id);
        $detete->delete();

        return redirect()->route('computers.index', $computer_id);
    }
}
