{{-- resources/views/sales/edit.blade.php --}}
 
@extends('layout')
 
@section('content')
<h1>3ヶ月サマリ</h1>
<ul>
@foreach($sales_data as $sales_datum)
	<li>
		<dt>クライアント名</dt>
		<dd>{{$sales_datum->client_name}}</dd>
		<dt>プロジェクト名</dt>
		<dd>{{$sales_datum->project_name}}</dd>
	</li>
@endforeach
</ul>
@endsection

