# Laravel PHP Framework - Retrieving Data from the Database  (Model Query)

##Get All records form table
The Eloquent all method will return all of the results in the model's table.

	$items = Item::all();

##Get Data with where

Define Column that you want to query and call Eloquent get method
	
	Item::where('id',1)->get();
    $items = Item::where('title','test')->get();

GET ONE RECODE FROM THE DATABASE BASED ON PRIMARY KEY

	$items = Item::find(1);

GET FIRST RECODE FROM THE TABLE

	$items = Item::where('price',"2000")->get()->first();

SEARCH WITH LIKE 

	$items = Item::where('title','LIKE','test%')->get();

SEARCH WITH AND 

	$items = Item::where('title','LIKE','test%')
					->where('price','2000')
					->get();

SEARCH WITH IN 

    $items = Item::whereIn('id',[1,2,3])
    				->get();

Create query parameter with whereRaw

	$items = Item::whereRaw("id in (1,2)")
					->get();