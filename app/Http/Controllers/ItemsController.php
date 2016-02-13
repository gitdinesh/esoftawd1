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
use App\Http\Model\Item;
use App\Http\Model\Category;
class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     * Pass data as an Array
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Retreving entire items table 
        //$items = Item::all();
        
        //GET DATA WITH WHERE 
        //$items = Item::where('id',1)->get();
        //$items = Item::where('title','test')->get();

        //GET ONE RECODE FROM THE DATABASE BASED ON PRIMARY KEY
        //$items = Item::find(1);

        //GET FIRST RECODE FROM THE TABLE
        //$items = Item::where('price',"2000")->get()->first();

        //SEARCH WITH LIKE
        //$items = Item::where('title','LIKE','test%')->get();


        //SEARCH WITH AND 
        //$items = Item::where('title','LIKE','test%')
        //               ->where('price','2000')
        //                ->get();

        //SEARCH WITH IN 
        //$items = Item::whereIn('id',[1,2,3])->get();

        //Create query parameter with whereRaw
        $items = Item::whereRaw("id in (1,2)")
                        ->get();


        echo "<pre>";
        print_r($items);
        //print_r($items->title);
       /*foreach($items as $item){
           echo  $item->title."<br/>";
       }*/
       die;
        return view('items.index')->with("items",$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addItems(Request $request)
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
       
        $item = new Item();
        $item->title =$request->title;
        $item->description =$request->description;
        $item->price =$request->price;
        $isSaved = $item->save();
        //CHECK CONDITION AND ADD CONTENT BASED ON THE SAVE STATUS
        
        $output =[];
        if($isSaved  ){
            
            $output['status']=200;
            $output['message']="Items has been saved to the system";
           // echo 
            return json_encode($output); ;
        }
        $output['status']=400;
        $output['message']="Oops cannot add item to the system";
        //echo 
        return json_encode($output); ;
        //$request->session()->flash('alert-success', 'Item add to the system');
        //return redirect('/item/add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


         return view('items.showitems')->with("items",$id);
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

    public function addCategory(){
        $category = new Category();
        $category->title ="Electronics";
        $category->save();
    }
}
