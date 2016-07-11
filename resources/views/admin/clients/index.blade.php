@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading center">{{$category->name}} Clients</div>

                <div class="panel-body">
					<table class="table">
						<thead>
							<th>Name</th>
							<th>Image</th>
							<th>Actions</th>
						</thead>

						<tbody>
							@foreach($clients as $client)
								<tr>
									<td>{{$client->name}}</td>
									<td>{{$client->originalImgName}}</td>
									<td>
										<a class="itemAction" href="{{ route('admin.clients.edit', $client->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
										@if(!$client->hasWork)
										<a class="itemAction" href="{{ route('admin.works.create', $client->id)}}"><i class="fa fa-plus" aria-hidden="true"></i>
										</a>
										@else
										<a class="itemAction" href="{{ route('admin.clients.show', $client->id) }}"><i class="fa fa-briefcase" aria-hidden="true"></i></a>
										@endif
										<a class="itemAction" href="" data-toggle="modal" data-target="#myModal{{$client->id}}""><i class="fa fa-trash-o" aria-hidden="true"></i></a>

									</td>
								</tr>
								<div id="myModal{{$client->id}}" class="modal fade" role="dialog">
								  <div class="modal-dialog">
								    <div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								        <h4 class="modal-title">Confirm Delete</h4>
								      </div>
								      <div class="modal-body">
								        <p>Are you sure you want to delete this client?</p>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
								        <a href="{{route('admin.clients.destroy', $client->id)}}"><button type="button" class="btn btn-primary">Confirm</button></a>
								      </div>
								    </div>
								  </div>
								</div>
							@endforeach
						</tbody>
					</table>

                </div>
                <div class="panel-footer"><a href="{{ route('admin.clients.create') }}"><button class="btn btn-primary">Add client</button></a></div>
            </div>
        </div>
    </div>
</div>



@endsection
