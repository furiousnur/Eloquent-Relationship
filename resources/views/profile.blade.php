@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">{{$name->name}}'s' Profile</div>
				<p><strong>Address: </strong> {{$name->addresses->country}}</p>
				
				<p>
					<strong>Role: </strong>
					<ul>
						@foreach($name->roles as $role)
				 			<li>{{$role->name}}</li>
						@endforeach
					</ul>
				</p>

				@foreach($name->articles as $article)
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<h3>{{$article->title}}</h3>
							{{$article->description}}
						</div>
						<div class="col-md-1"></div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection