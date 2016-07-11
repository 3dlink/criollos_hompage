@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading center">{{$client->name}} Works</div>

				<div class="panel-body">
					<div class="work-header">
						<h1 class="work-title">
							{{$work->title}}
						</h1>
						<p class="work-desc">
							{{$work->description}}
						</p>
					</div>

					<table class="table">
						<thead>
							<th>Image</th>
							<th>Actions</th>
						</thead>

						<tbody>
							@foreach($images as $image)
							<tr>
								<td>{{$image->originalName}}</td>
								<td>
									<a class="itemAction" href="{{ route('admin.works.editImg', $image->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
									<a class="itemAction" href="{{ route('admin.works.show', $image->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
									<a class="itemAction" href="" data-toggle="modal" data-target="#myModal{{$image->id}}""><i class="fa fa-trash-o" aria-hidden="true"></i></a>

								</td>
							</tr>
							<div id="myModal{{$image->id}}" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Confirm Delete</h4>
										</div>
										<div class="modal-body">
											<p>Are you sure you want to delete this image?</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
											<a href="{{route('admin.works.destroyImg', $image->id)}}"><button type="button" class="btn btn-primary">Confirm</button></a>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</tbody>
					</table>

				</div>

				<div class="panel-footer">
					<a href="{{ route('admin.clients.index', session()->get('category')->id) }}"><button class="btn btn-default" type="button">Back</button></a>
					<a href="" data-toggle="modal" data-target="#workModal"><button class="btn btn-danger">Delete Work</button></a>
					<a href="{{ route('admin.works.edit', $work->id) }}"><button class="btn btn-primary">Edit Work</button></a></div>

					<div id="workModal" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title">Confirm Delete</h4>
								</div>
								<div class="modal-body">
									<p>Are you sure you want to delete this work?</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									<a href="{{ route('admin.works.destroy', $work->id) }}"><button type="button" class="btn btn-primary">Confirm</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	@endsection
