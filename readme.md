# Laravel PHP Framework - Retrieving Data from the Database  (Query Builder)

##Get All records form table
The Eloquent all method will return all of the results in the model's table.

	$items = Item::all();

##Get Data with where

Show specific data columns with where 

$item = DB::table($this->table)
			->where ('id','=',$id)
			->select($this->table.'.title')
			->get();


Simple Join query with two tables

	$item = DB::table($this->table)
			->where ($this->table.'.id','=',$id)
			->join('categories',$this->table.'.category_id','=','categories.id')
			->select('categories.title AS category_title',$this->table.'.title')
			->get(); 



