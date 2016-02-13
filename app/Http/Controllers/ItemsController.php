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

        
        return view('items.index');
    }

    public function getItems(){
        $item = new Item();
        $items = $item->getAll();
        
        $output =[];
        if(count($items) <= 0){
            $output =[
                'status'=>400,
                'message'=>'List Empty'
            ];
            return json_encode($output);
        }

        $output =[
            'status'=>200,
            'message'=>'Items found',
            'items'=>$items
        ];
        return json_encode($output);

       die;
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

        $item = new Item();
        $items = $item->getItemById($id);
        echo "<pre>";
        print_r($items);
        die;
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
