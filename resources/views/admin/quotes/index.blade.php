@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading center">Quotes</div>

                <div class="panel-body">
					<table class="table">
						<thead>
							<th>Quote</th>
							<th>Actions</th>
						</thead>

						<tbody>
							@foreach($quotes as $quote)
								<tr>
									<td>{{$quote->quote}}</td>
									<td>
										<a class="itemAction" href="{{ route('admin.quotes.edit', $quote->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a><!-- 
										<a class="itemAction" href="{{ route('admin.quotes.show', $quote->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a> -->
										<a class="itemAction" href="" data-toggle="modal" data-target="#myModal{{$quote->id}}""><i class="fa fa-trash-o" aria-hidden="true"></i></a>

									</td>
								</tr>
								<div id="myModal{{$quote->id}}" class="modal fade" role="dialog">
								  <div class="modal-dialog">
								    <div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								        <h4 class="modal-title">Confirm Delete</h4>
								      </div>
								      <div class="modal-body">
								        <p>Are you sure you want to delete this quote?</p>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
								        <a href="{{route('admin.quotes.destroy', $quote->id)}}"><button type="button" class="btn btn-primary">Confirm</button></a>
								      </div>
								    </div><!-- /.modal-content -->
								  </div><!-- /.modal-dialog -->
								</div><!-- /.modal -->
							@endforeach
						</tbody>
					</table>
					<div class="center">{!! $quotes->render() !!}</div>

                </div>
                <div class="panel-footer"><a href="{{ route('admin.quotes.create') }}"><button class="btn btn-primary">Add quote</button></a></div>
            </div>
        </div>
    </div>
</div>



@endsection
