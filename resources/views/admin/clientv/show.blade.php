@extends('layouts.app')

@section('css')

	<style type="text/css">
		.rdmsh{
			max-height: 500px;
			max-width: 500px;
		}
	</style>
@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div class="panel-heading center">{{$client->originalImgName}}</div>

				<div class="panel-body">

					<img class="rdmsh" src="{{URL::asset('/img').'/'.$client->image}}">
				</div>

				<div class="panel-footer">
					<a href="{{ route('admin.clientv.index') }}"><button class="btn btn-default" type="button">Back</button></a>
				</div>

			</div>
		</div>
	</div>
</div>
@endsection
