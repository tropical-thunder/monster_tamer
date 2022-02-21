@extends('layout')

@section('content')

	@section('main')

	<div class="bokujou_view">
		@foreach($bokujou_datas as $bokujou_data)
			@if($bokujou_data->image_id < 7)
			<div class="bokujou_item">
					<a href="{{ route('bokujou.detail',['id'=>$bokujou_data->id]) }}">
						<img class="bokujou_img" src="images/{{ $bokujou_data->image_id}}.png">
						{{ $bokujou_data->nickname }}
					</a>
			</div>
			@else
			<div class="bokujou_item">	
				<p>
					<a href="{{ route('bokujou.detail',['id'=>$bokujou_data->id]) }}">
						<img  src="images/{{ $bokujou_data->image_id}}.png">
						{{ $bokujou_data->nickname }}
					</a>
				</p>
			</div>
			@endif

		@endforeach
	</div>
	@endsection


	@section('text')
		<p>モンスターの名前をクリックすると、名前を変更したり、牧場から逃がしたりできるよ</p>
	@endsection

	@section('action')
		<p><a href="{{ route('home') }}">王都に戻る</a></p>
		<p><a href="{{ route('zukan') }}">図鑑を開く</a></p>
	@endsection

@endsection

