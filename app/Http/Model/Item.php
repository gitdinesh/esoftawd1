<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
class Item extends Model
{
    //
    protected $table ='items'; 


    /**
     * Get all items from the items table
     */
    public function getAll(){
    	$items = DB::table($this->table)
                     ->get(); 



         return Item::formatIteData($items);  

    }


    /**
     * Get Selected Item by ID
     * @param $id integere
     */
    public function getItemById($id){

		$item = DB::table($this->table)
					->where ($this->table.'.id','=',$id)
					->join('categories',$this->table.'.category_id','=','categories.id')
					->select('categories.title AS category_title',$this->table.'.title')
	         		->get(); 

	     return $item;
    }


    /**
     * Format Item data set 
     */
    private static function formatIteData($itemDataSet){

    	$_temp_item_data_set= [];

    	foreach($itemDataSet as $item){
    		$_item =[
    			'item_id'=>$item->id,
    			'item_title'=>$item->title,
    			'description'=>$item->description,
    			'price'=>$item->price
    		];
    		$_temp_item_data_set[] = $_item;

    	}

    	return $_temp_item_data_set;

    }
}
