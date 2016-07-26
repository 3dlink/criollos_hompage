@extends('layouts.app')

@section('css')
<style type="text/css">
	.x{
		color: red;
	}

	.x:hover{
		cursor: pointer;
	}

	#keywords{
		display: none;
	}

	#word{
		width: 50%;
		float: left;
	}

	.newKey{
		margin: 0px 10px 0px 5px;
		float: left;
	}

	.recuadro{
		border: 1px solid #ccc;

		*width: 300px;
		max-height: 300px;
		overflow-y: scroll;
	}

	#listaDesordenada{
		-webkit-column-count: 3;
		-moz-column-count: 3;
		column-count: 3;
	}
</style>

@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div class="panel-heading center">SEO</div>
				{!! Form::open(['route' => ['admin.seo.update', $seo], 'method' => 'PUT']) !!}

				<div class="panel-body">

					<div class="form-group">
						{!! Form::label('title', 'Title') !!}
						{!! Form::text('title', $seo->title, ['placeholder' => 'Page title', 'class' => 'form-control', 'required']) !!}
						<span class="msjError"> @if ($errors->first('title')) *{{ $errors->first('title') }} @endif</span>
					</div>

					<div class="form-group">
						{!! Form::label('description', 'Description') !!}
						{!! Form::text('description', $seo->description, ['placeholder' => 'Page description', 'class' => 'form-control', 'required']) !!}
						<span class="msjError"> @if ($errors->first('description')) *{{ $errors->first('description') }} @endif</span>
					</div>

					<div class="form-group clearfix">
						{!! Form::label('keywords', 'Keywords') !!}
						{!! Form::text('keywords', $seo->keywords, ['placeholder' => 'keyword or key1, key2...', 'class' => 'form-control', 'required', 'id'=>'keywords']) !!}
						<span class="msjError"> @if ($errors->first('keywords')) *{{ $errors->first('keywords') }} @endif</span>

						{!! Form::text('word', null, ['placeholder' => 'key or key1, key2, ...', 'class' => 'form-control', 'id' => 'word']) !!}
						<button class="btn btn-success newKey" onclick='return add_li()' type="button">Add Keyword</button>
					</div>
					<div class="recuadro">
						<ul id="listaDesordenada"></ul>
					</div>
				</div>

				<div class="panel-footer">
					<a href="{{ route('admin.seo.index') }}"><button class="btn btn-default" type="button">Back</button></a>
					{!! Form::submit('Edit SEO', array('class'=>'btn btn-primary')) !!}
				</div>
				{!! Form::close() !!}

			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
	var id = 0;
	var str = $('#keywords').val();

	function add_li()
	{
		var nuevoLi=document.getElementById("word").value;

		if (id == 0) {
			nuevoLi = str;
		}
		
		if(nuevoLi.length>0)
		{
			var array = nuevoLi.split(',');

			for (var i = 0; i < array.length; i++) {
				var li=document.createElement('li');
				li.id=id;
				id++;
				li.innerHTML= "<span class='value'>" + array[i] + "</span><span onclick='eliminar(this)'>"+" <i class='fa fa-times x' aria-hidden='true'></i>"+"</span>";
				document.getElementById("listaDesordenada").appendChild(li);
			}
		}

		document.getElementById("word").value = "";
		realValue();
		str = "";
		return false;
	}

	function eliminar(elemento)
	{
		var id=elemento.parentNode.getAttribute("id");
		node=document.getElementById(id);
		node.parentNode.removeChild(node);
		realValue();
	}

	function realValue(){
		var str = "";

		$('#listaDesordenada li .value').each(function(){
			str += $(this).text()+', ';
		});

		var aux = str.split(',');
		str = "";
		
		for (var i = 0; i < aux.length-1; i++) {
			if (i < aux.length-2) {
				str += aux[i] + ', ';
			} else {
				str += aux[i];
			}
		}
		$('#keywords').val(str);
	}

	$(document).ready(function(){
		add_li();
	});

</script>
@endsection