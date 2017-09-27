@extends('layouts.app')

@section('content')
	@foreach ($articles as $art)
		{{$art->id}} {{$art->name}},
	@endforeach
	<br><br>
	{{$article->id}} {{$article->name}}
@endsection
