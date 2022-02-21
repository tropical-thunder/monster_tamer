@extends('layout')

@section('content')

	@section('main')
		<div class= "zukan_view">
			<div class="zukan_title">
				<p>今まで捕まえたモンスター</p>
			</div>
			@foreach($zukan_datas as $zukan_data)
			<div class="zukan_item">
				<p>No:{{ $zukan_data->monster_id }}<a href="{{ route('zukan.show' ,[ 'id' => $zukan_data->id ]) }}">{{ $zukan_data->name }}</a></p>
			</div>
			@endforeach
		</div>	
	@endsection 

	@section('text')
		<p>詳細を知りたいモンスター名をクリックしてね。</p>
	@endsection 

	@section('action')
		<p><a href="{{ route('home') }}">王都に戻る</a></p>
		<p><a href="{{ route('bokujou')  }}">牧場へ行く</a></p>
	@endsection 

@endsection 