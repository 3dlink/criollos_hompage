@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading center">New Work</div>
                {!! Form::open(['route' => 'admin.works.store', 'method' => 'POST', 'files' => 'true']) !!}

                <div class="panel-body">

						<div class="form-group">
							{!! Form::label('title', 'Title') !!}
							{!! Form::text('title', null, ['placeholder' => 'Work title', 'class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('title')) *{{ $errors->first('title') }} @endif</span>
						</div>

						<div class="form-group">
							{!! Form::label('description', 'Description') !!}
							{!! Form::text('description', null, ['placeholder' => 'Work description', 'class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('description')) *{{ $errors->first('description') }} @endif</span>
						</div>

						<div class="form-group">
							{!! Form::label('originalImgName', 'Image') !!}
							{!! Form::text('holder', 'Choose Image', array('disabled'=>'disabled', 'class' => 'form-control uploadSpan', 'id' => 'frontUpload')) !!}
							
							<div class="fileUpload btn btn-info">
								<span>Browse...</span>
								{!! Form::file('originalImgName', array('class' => 'upload')) !!}
							</div>

							<span class="msjError"> @if ($errors->first('originalImgName')) *{{ $errors->first('originalImgName') }} @endif</span>
						</div>
	            </div>

	            <div class="panel-footer">
	            	<a href="{{ route('admin.works.index', $client->id) }}"><button class="btn btn-default" type="button">Back</button></a>
					{!! Form::submit('Add Work', array('class'=>'btn btn-primary')) !!}
				</div>
				{!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@endsection
