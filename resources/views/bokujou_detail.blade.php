@extends('layout')


@section('content')


	@section('main')
		<div class="flex bokujou_detail">	
			<div class="bokujou_left">
				<p>種族名:{{ $bokujou_data->name}}</p>
				<p>
					{{ Form::model($bokujou_data,['route'=>['bokujou.update',$bokujou_data->id]])}}
					{{ Form::label('nickname','名前：')}}
					{{ Form::text('nickname',null)}}
					{{ Form::submit('名前を変更する',['class'=>'btn_custom1'])}}
					{{ Form::close() }}
				</p>
			</div>
			<div class="bokujou_right">
				<img src="{{ asset('images/'.$bokujou_data->image_id )}}.png">
			</div>
		</div>		
	@endsection 

	@section('text')
			<p>・名前欄につけたいニックネームをつけて、名前変更を押してね。</p>
			<p>・逃がしたい場合は、逃すボタンをクリック</p>
	@endsection 

	@section('action')
			<p>
				{{ Form::open(['method'=>'delete','route'=>['bokujou.delete',$bokujou_data->id]] )}}
				{{ Form::submit('にがす',['class'=>'btn_custom2']) }}
				{{ Form::close() }}
				<a href="{{route('bokujou')}}">牧場一覧に戻る</a>
			</p>
	@endsection 			
				
@endsection 