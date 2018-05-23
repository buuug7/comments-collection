@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="headline">
			<h3 class="title">My Posts</h3>
		</div>
		<div class="row">
			<div class="col-md-8">
				<posts-component request-url="/users/posts"></posts-component>
			</div>
		</div>
	</div>
@endsection