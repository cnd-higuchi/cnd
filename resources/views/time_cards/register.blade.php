{{-- resources/views/auth/login.blade.php --}}
 
@extends('layout')
 
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">タイムカード打刻</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					
					
					<form class="form-horizontal" role="form" method="POST" action="/timecard/">
						{{-- CSRF対策--}}
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
									登録
								</button>
							</div>
						</div>
					</form>
				</div><!-- .panel-body -->
			</div><!-- .panel -->
		</div><!-- .col -->
	</div><!-- .row -->
</div><!-- .container-fluid -->
@endsection

