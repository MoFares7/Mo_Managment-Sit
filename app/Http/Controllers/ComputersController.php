<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\computer;
use PhpParser\Node\Stmt\Static_;

class ComputersController extends Controller
{

    //! Arry of Static Data

    private static function getData()
    {
        return [
            ['id' => 1, 'name' => 'LG', 'country' => 'Koria'],
            ['id' => 2, 'name' => 'HP', 'country' => 'Germany'],
            ['id' => 3, 'name' => 'Sony', 'country' => 'Koria'],
            ['id' => 4, 'name' => 'Apple', 'country' => 'US'],
        ];
    }

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
        $computer = new computer();

        $computer->name   = $request->input('computer-name');
        $computer->origin = $request->input('computer-origin');
        $computer->price   = $request->input('computer-price');

        $computer->save();

        return redirect()->route('computer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($computer)
    {
        $computers = self::getData();
        $index = array_search($computer, array_column($computers, 'id'));
        if ($index === false) {
            abort(404);
        }
        return view('computers.show', [
            'computer' => $computers[$index]
        ]);
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
