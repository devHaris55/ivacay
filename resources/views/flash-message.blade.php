@if ($message = Session::get('success'))
<div class="alert alert-success alert-block text-center">
	<!-- <button type="button" class="close" data-dismiss="alert">×</button>	 -->
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block text-center">
	<!-- <button type="button" class="close" data-dismiss="alert">×</button>	 -->
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block text-center">
	<!-- <button type="button" class="close" data-dismiss="alert">×</button>	 -->
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-block text-center">
	<!-- <button type="button" class="close" data-dismiss="alert">×</button>	 -->
	<strong>{{ $message }}</strong>
</div>
@endif

@error('error')
	<div class="alert alert-danger">
		{{ $message }}
	</div>
@enderror

@if ($errors->any())
	<div class="alert alert-danger text-center">
		<!-- Please check the form below for errors
		<br /> -->
		{{ $errors->first() }}
	</div>
@endif


<!-- @if ($errors->any())
	<div class="alert alert-danger">
		<strong>Whoops!</strong> There were some problems with your input... <br><br>
		<ul>
			<div class="alert alert-danger">
				@foreach ($errors->all() as $error)
					<li>
						{{ $errors->first() }}
						<br>
					</li>
				@endforeach
			</div>
		</ul>
	</div>
@endif -->



