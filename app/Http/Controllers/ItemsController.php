<?php
/** Pass Controller information to the blade view
 * there are few methods
 *1) Pass data as an Array
 *2) Pass Data with() funciton\
 **/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     * Pass data as an Array
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Define Array after view

        $items = [
            [
                "image"=>"images/product-img1.jpg",
                "name"=>"Whirlpool LTE5243D 3.4 CuFt....",
                "price"=>"$839.93"
            ],
            [
                "image"=>"images/product-img2.jpg",
                "name"=>"Whirlpool LTE5243D 3.4 CuFt....",
                "price"=>"$800.93"
            ],
            [
                "image"=>"images/product-img3.jpg",
                "name"=>"Whirlpool LTE5243D 3.4 CuFt....",
                "price"=>"$900.93"
            ],
            [
                "image"=>"images/product-img4.jpg",
                "name"=>"Whirlpool LTE5243D 3.4 CuFt....",
                "price"=>"$1000.93"
            ],
        ];
    
        return view('items.index')->with("items",$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addItems()
    {
         return view('items.additems');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
