@extends('layouts.app')

@section('content')
	<h2>php artisan make:controller PostController --model="Models/Post"</h2>
	<pre>
You can do it if you start from the model

php artisan make:model Todo -mcr
if you run php artisan make:model --help you can see all the available options

-m, --migration Create a new migration file for the model.
-c, --controller Create a new controller for the model.
-r, --resource Indicates if the generated controller should be a resource controller	
	</pre>
@endsection
