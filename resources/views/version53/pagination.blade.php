@extends('layouts.app')

@section('content')
	@foreach ($jsons as $json)
		{{$json->jsonfield}}<br>
	@endforeach
	{{ $jsons->links() }}
@endsection