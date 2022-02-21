@extends('layout')


@section('content')


	@section('main')
		<div class="flex zukan_detail_view">	
			<div class="zukan_left">
				<p>名前:{{ $zukan_data->name}}</p>
				<p>種族:{{ $zukan_data->syubetsu}}</p>
			</div>
			<div class="zukan_right">
				<img src="{{ asset('images/'.$zukan_data->image_id )}}.png">
			</div>
		</div>		
	@endsection 

	@section('text')
			<p>{{ $zukan_data->description }}</p>
	@endsection 

	@section('action')
			<p><a href="{{route('zukan')}}">図鑑一覧に戻る</a></p>
			<p><a href="{{route('home')}}">王都に戻る</a></p>
	@endsection 			
				
@endsection 