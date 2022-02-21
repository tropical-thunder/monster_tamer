<div id="main_view">
	@yield('main')				
</div>
<div class="flex">
	<div id="text_view">
		@yield('text')
	</div>
	<div id="action_view">
		<p>アクション</p>
		@yield('action')
	</div>
</div>