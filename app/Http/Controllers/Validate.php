<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class Validate extends Controller
{
    //
    public function arrayValidateForm(FormBuilder $formBuilder)
    {
    	$form = $formBuilder->createByArray([
    		[
    			'name' => 'images',
    			'id' => 'avatar',
    			'type' => 'file',
    			'label' => 'images',
    			'attr' => ['multiple' => true]
    		],
    		[
    			'name' => 'submit',
    			'type' => 'submit',
    		]
    	]
    	,[
    		'method' => 'POST',
    		'url' => '/version52/array/validation/'
    	]);
    	
    	return view('version52.array_validation', compact('form'));
    }
    
    public function arrayValidate(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
    			'images.*' => 'required|image',
    	],
    	[
    			'images.*.image' => ':attribute повинно бути зображенням'
    	]);
    	echo 'Validation fails is :';
    	dump($validator->fails());
    	
    	dump($validator->messages());
    	dump($request->all());
    }
    
    public function imageValidateForm(FormBuilder $formBuilder)
    {
    	$form = $formBuilder->createByArray([
    			[
    					'name' => 'images',
    					'id' => 'avatar',
    					'type' => 'file',
    					'label' => 'images',
    					'attr' => ['multiple' => true]
    			],
    			[
    					'name' => 'submit',
    					'type' => 'submit',
    			]
    	]
    			,[
    					'method' => 'POST',
    					'url' => '/version53/image/validation/'
    			]);
    	 
    	return view('version53.image_validation', compact('form'));
    }
    
    public function imageValidate(Request $request)
    {
    	$validator = Validator::make($request->all(), [
    			//'images.*' => ['required', 'image', Rule::dimensions()->maxWidth(1000)->maxHeight(500)->ratio(3 / 2)],
    			'images.*' => 'required|image|dimensions:ratio=3/2',
    	],
    			[
    					'images.*.image' => ':attribute повинно бути зображенням'
    			]);
    	echo 'Validation fails is :';
    	dump($validator->fails());
    	 
    	dump($validator->messages());
    	dump($request->all());
    }
}
