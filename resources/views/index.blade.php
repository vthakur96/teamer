@extends('layouts.default')
@section('content')
	{{--*/ $page = isset($page) ? $page : ''/*--}}

	@if($page=='register')
		@include('pages.register');
	@else
		@include('pages.login');
	@endif

@endsection
