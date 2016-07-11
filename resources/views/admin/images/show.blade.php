@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div class="panel-heading center">{{$image->originalName}}</div>

				<div class="panel-body">

					<img src="../../img/{{$image->image}}">
				</div>

				<div class="panel-footer">
					<a href="{{ route('admin.works.index', session()->get('client')->id) }}"><button class="btn btn-default" type="button">Back</button></a>
				</div>

			</div>
		</div>
	</div>
</div>
@endsection
