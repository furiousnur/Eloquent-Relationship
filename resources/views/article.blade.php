@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">Dashboard</div>
				<form method="post"  action="{{route('article.store')}}">
					@csrf
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="inputEmail4">Title</label>
							<input type="text" name="title" class="form-control" id="inputEmail4" placeholder="title">
						</div>
						<div class="form-group col-md-12">
							<label for="inputPassword4">Description</label>
							<textarea type="textarea" name="description" class="form-control" id="inputPassword4" placeholder="Description"></textarea>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Sign in</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection