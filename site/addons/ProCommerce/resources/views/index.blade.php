@extends('layout')

@section('content')
    <div class="flexy mb-3">
    	<h1><strong>Pro Commerce</strong></h1>
    </div>

	<div class="card">
		<div class="has-text-centered m-t-50 m-b-50">
			<h1 class="h2-centered"><strong>Nice! You have installed Pro Commerce</strong></h1>
			<p>with this plugin you will have your online store in minutes</p>
		</div>

		<hr style="width: 100%; margin-left: auto; margin-right: auto; margin-top: 20px;">

		@if ($config)
			<div class="has-items-centered m-t-50 m-b-50">
				<h2>Great, first step done!</h2>
			</div>
		@else
			<div class="start-box has-items-centered m-t-50 m-b-50">
				<h3>Lets start configuring your store!</h3>
				<a href="{{ route('startup') }}" class="btn btn-default btn-lg m-t-10">Great, let's go!</a>
			</div>
		@endif





	</div>
@endsection
