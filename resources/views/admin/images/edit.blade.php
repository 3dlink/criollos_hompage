@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div class="panel-heading center">Edit Image</div>
				{!! Form::open(['route' => ['admin.works.updateImg', $image], 'method' => 'PUT', 'files' => 'true']) !!}

				<div class="panel-body">

					<div class="form-group">
						{!! Form::label('originalImgName', 'Image') !!}
						<div id="img_destino" class="img-edit">
							<img src="{{URL::asset('img/').'/'.$image->image}}">
						</div>
						{!! Form::text('holder', $image->originalName, array('disabled'=>'disabled', 'class' => 'form-control uploadSpan', 'id' => 'frontUpload')) !!}

						<div class="fileUpload btn btn-info">
							<span>Browse...</span>
							{!! Form::file('originalImgName', array('class' => 'upload', 'id' => 'originalImgName')) !!}
						</div>

						<span class="msjError"> @if ($errors->first('originalImgName')) *{{ $errors->first('originalImgName') }} @endif</span>
					</div>


				</div>

				<div class="panel-footer">
					<a href="{{ route('admin.works.index', session()->get('client')->id) }}"><button class="btn btn-default" type="button">Back</button></a>
					{!! Form::submit('Update Image', array('class'=>'btn btn-primary')) !!}
				</div>
				{!! Form::close() !!}

			</div>
		</div>
	</div>
</div>
@endsection