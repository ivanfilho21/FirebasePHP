@extends('_templates/main')
@section('page-title', 'Home')

@push('head-styles')
    <link rel="stylesheet" href="{{ URL }}res/css/style.css">
@endpush

@section('main-content')
    <div class="actionBar">
		<h1>MyApp</h1>
	</div>

	<a href="{{ URL }}home">Home</a>
	
	<div class="fab">
		+
	</div>
@endsection