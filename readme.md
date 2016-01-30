## Laravel PHP Framework - Form Builder

Before Work with Laravel Form Do the folloving changes to the composer.json under "require" object.

"require": {
    "php": ">=5.5.9",
    "laravel/framework": "5.1.*",
    "illuminate/html": "^5.0"
}

## Composer update
and execute composer update  on command line

## Change config/app.php
Add following line under "providers" array 
"providers" =>[
	// .....
	Illuminate\Html\HtmlServiceProvider::class,

]


Add following lines under "aliases" array 

"aliases"=>[

	//...
	'HTML'      => Illuminate\Html\HtmlFacade::class,
    'Form'      => Illuminate\Html\FormFacade::class

]


## Example  Form element implementation

{!! Form::open(array('url' => 'submit/to')) !!}

	{!!  Form::label('username', 'USERNAME') !!}
	{!!  Form::text('username'), Input::old('username')  !!}


	{!!  Form::submit('Log In')  !!} 
{!! Form::close() !!}