<div class="row">
	<div class="col-md-12">
		@if(session()->has('message'))
		<p class="alert alert-success">
			{{session()->get('message')}}
		</p>
		@endif
	</div>
</div>