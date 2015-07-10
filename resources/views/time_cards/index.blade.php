{{-- resources/views/time_cards/index.blade.php --}}
 
@extends('layout')
 
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">タイムカード打刻</div>
				<div class="panel-body">
					@foreach($time_cards as $time_record)
					<div>
						{{$time_record->bgn_stamp_time}}
						{{$time_record->end_stamp_time}}
					</div>
					@endforeach
				</div><!-- .panel-body -->
			</div><!-- .panel -->
		</div><!-- .col -->
	</div><!-- .row -->
</div><!-- .container-fluid -->
@endsection

