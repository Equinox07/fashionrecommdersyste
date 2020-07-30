<?php

namespace App\Http\Controllers\Fabric;

use App\Uses;
use App\Category;
use App\Properties;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FabricController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $uses = Uses::all();
        $properties = Properties::all();

        $catproperties = Category::with('properties')->get();
        $catuses = Category::with('uses')->get();

        $category = Category::all()->random(1);

        $cat = array('category' => $category);
        $rules = [
            'description' => 'required'
        ];
        $this->validate($request, $rules);

        $user_input = $request->description;
        // return var_dump($user_input);
        foreach($uses as $key => $use)
        {
            //  @$userr[$use->id][] = $use->uses;
             @$userr[$use->id][] = str_contains($user_input, $use->uses);
        }
            // return $userr;
        $user_request = explode(' ',$user_input);

        $recommend = array_intersect($user_request, $cat);

        // return $uses;
        return view('home.recommendation', compact('category', $category));

        // if($recommend)
        // {
        //     return view('fabric.recommend', compact('category', $category));
        // }
        // else
        // {
        //     return view('fabric.recommend')->with('error', 'No match found');
        // }
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
