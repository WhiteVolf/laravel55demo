<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\Json;

class Demo extends Controller
{
    //
    public function showLoop()
    {
    	$articles = Articles::all();
    	return view('version53.loop', compact('articles'));
    }
    
    public function showFirstOrCreate($name){
    	$articles = Articles::all();
    	$article = Articles::firstOrCreate(['name' => $name], ['qoute' => '']);
    	return view('version53.firstorcreate', compact('articles', 'article'));
    }
    
    public function showCacheHelper($key)
    {
    	$cache = cache($key);
    	return view('version53.cache', compact('cache'));
    }
    
    public function showCollectionWhere($name)
    {
    	$articles = Articles::all();
    	$article = $articles->where('name', $name);
    	return view('version53.collection_where', compact('article'));
    }
    
    public function showJsonFieldExample()
    {
    	$json = Json::where('jsonfield->id', 22)->get();
    	return $json;
    }
    
    public function showPagination()
    {
    	$jsons = Json::paginate(20);
    	return view('version53.pagination', compact('jsons'));
    }
}
