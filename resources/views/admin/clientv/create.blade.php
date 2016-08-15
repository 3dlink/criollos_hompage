@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading center">New Client</div>
                {!! Form::open(['route' => 'admin.clientv.store', 'method' => 'POST', 'files' => 'true']) !!}

                <div class="panel-body">

						<div class="form-group">
							{!! Form::label('name', 'Name') !!}
							{!! Form::text('name', null, ['placeholder' => 'Client name', 'class' => 'form-control', 'required']) !!}
							<span class="msjError"> @if ($errors->first('name')) *{{ $errors->first('name') }} @endif</span>
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
	            	<a href="{{ route('admin.clientv.index')}}"><button class="btn btn-default" type="button">Back</button></a>
					{!! Form::submit('Add Client', array('class'=>'btn btn-primary')) !!}
				</div>
				{!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@endsection
