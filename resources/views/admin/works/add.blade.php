@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div class="panel-heading center">Add Images</div>


				<div class="panel-body">
					{!! Form::open(['route' => 'admin.works.storeI', 'method' => 'POST', 'files' => 'true', 'class' => 'dropzone', 'id' => 'dropzoneForm']) !!}
				</div>

				<div class="panel-footer">
					<a href="{{ route('admin.works.index', $client->id) }}"><button class="btn btn-default" type="button">Back</button></a>
					{!! Form::submit('Save', array('id' => 'submit', 'class'=>'btn btn-primary')) !!}
				</div>

				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection


@section('script')

<script type="text/javascript">
	Dropzone.options.dropzoneForm = ({
		paramName:'originalImgName',
		autoProcessQueue: false,
		uploadMultiple: true,
		dictDefaultMessage: 'Click here...',
		addRemoveLinks: true,
		acceptedFiles: 'image/*',
		init: function() {
			var submitBtn = document.querySelector("#submit");
			myDropzone = this;

			submitBtn.addEventListener("click", function(e){
				e.preventDefault();
				e.stopPropagation();
				myDropzone.processQueue();
			});
			this.on("complete", function(file) {
				myDropzone.removeFile(file);
			});

			this.on("success", 
				myDropzone.processQueue.bind(myDropzone)
			);
		},
		queuecomplete: function(){
			$('button').click();
		}
	});
	</script>

@endsection