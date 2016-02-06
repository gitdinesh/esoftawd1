## Laravel PHP Framework - Working With Model

#Defining Models

Models typically live in the app directory, but you are free to place them anywhere that can be auto-loaded according to your composer.json file. All Eloquent models extend Illuminate\Database\Eloquent\Model class.

## Create Model
	php artisan make:model Item

If you would like to generate a database migration when you generate the model, you may use the --migration or -m option:

	php artisan make:model Model\\Item -m

##Table Names
The "snake case", plural name of the class will be used as the table name unless another name is explicitly specified. 
You may specify a custom table by defining a table property on your model:

## Primary Keys
Eloquent will also assume that each table has a primary key column named id. You may define a $primaryKey property to override this convention.

## Inserting & Updating Models


