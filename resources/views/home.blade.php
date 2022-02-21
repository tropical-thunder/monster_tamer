@extends('layout')

@section('content')


	@section('main')
		<div class="home_view">
			
		</div>
	@endsection 

	@section('text')
			<p>ここは王都だ、どうする？</p>
	@endsection 

	@section('action')
			<p><a href="{{ route('battle') }}">ダンジョンに行く</a></p>
			<p><a href="{{ route('zukan') }}">図鑑を開く</a></p>
			<p><a href="{{ route('bokujou')  }}">牧場へ行く</a></p>
	@endsection 
		
@endsection

		




