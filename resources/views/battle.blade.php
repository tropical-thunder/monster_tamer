@extends('layout')

@section('content')


	@section('main')
		<div class="monster_view">
			<img src="images/{{ $monster->image_id }}.png">
		</div>
	@endsection 

	@section('text')
		
			<p>{{ $monster->name }}が現れた</p>
		
	@endsection 

	@section('action')
		<p>
			{{ Form::open(['route'=>'battle.capture']) }}
			<input type="hidden" value="{{ $monster->name }}" name="name">
			<input type="hidden" value="{{ $monster->description }}" name="description">
			<input type="hidden" value="{{ $monster->image_id }}" name="image_id">
			<input type="hidden" value="{{ $monster->monster_id }}" name="monster_id">
			<input type="hidden" value="{{ $monster->syubetsu }}" name="syubetsu">
			<input type="hidden" value="{{ $monster->name }}" name="nickname">
			{{ Form::submit('捕まえる')}}
			{{ Form::close() }}
		</p>
			<p><a href="{{ route('home') }}">逃げる</a></p>
			
	@endsection 

@endsection

		




