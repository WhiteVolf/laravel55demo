@extends('layouts.app')

@section('content')
	<table class="table-bordered">
	<tr>
	<th>Name</th>
	<th>Quote</th>
	<th>Iteration</th>
	<th>First</th>
	<th>Last</th>
	</tr>
	@foreach ($articles as $article)
		<tr>
			<td>{{$article->name}}</td>
			<td>{{$article->qoute}}</td>
			<td>{{$loop->iteration}}</td>
			<td>{{$loop->first}}</td>
			<td>{{$loop->last}}</td>
		</tr>
		<?php //dump($loop); ?>
	@endforeach
	</table>
@endsection