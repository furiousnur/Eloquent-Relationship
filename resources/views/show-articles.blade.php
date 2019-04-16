@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			@foreach($articles as $article)
			<div class="card">
				<div class="card-header">{{$article->title}} <small>posted by </small>{{$article->user->name}}</div>
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<p>{{$article->description}}</p>
						</div>
						<div class="col-md-1"></div>
					</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection