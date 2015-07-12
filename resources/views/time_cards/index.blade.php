{{-- resources/views/time_cards/index.blade.php --}}
 
@extends('layout')
 
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">タイムカード打刻</div>
				<div class="panel-body">
				</div><!-- .panel-body -->
				<table>
					<thead>
						<tr>
							<th>日付</th>
							<th>始業</th>
							<th>終業</th>
						</tr>
					</thead>
					<tbody>
						@foreach($time_cards as $time_record)
							<tr>
								<th>{{{$time_record->formatBgnTime()}}}</th>
								<td>{{{$time_record->formatBgnTime('time')}}}({{{$time_record->formatBgnStampTime('time')}}})</td>
								<td>{{{$time_record->formatEndTime('time')}}}({{{$time_record->formatEndStampTime('time')}}})</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div><!-- .panel -->
		</div><!-- .col -->
	</div><!-- .row -->
</div><!-- .container-fluid -->
@endsection

