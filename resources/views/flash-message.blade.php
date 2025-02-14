@if($message = Session::get('success'))
	<div class="element-box-content">
		<div class="alert row alert-dismissible alert-success fade show mt-3" role="alert">
			<strong>{{ $message }}</strong>
		</div>	
	</div>
@endif
@if($message = Session::get('error'))
	<div class="element-box-content">
		<div class="alert row alert-danger alert-dismissible fade show mt-3" role="alert">
			<strong>{{ $message }}</strong>
		</div>
	</div>
@endif
@if($message = Session::get('warning'))
	<div class="element-box-content">
		<div class="alert row alert-warning alert-dismissible fade show mt-3" role="alert">
			<strong>{{ $message }}</strong>
		</div>
	</div>
@endif
@if ($message = Session::get('info'))
	<div class="element-box-content">
		<div class="alert row alert-info fade alert-dismissible show mt-3" role="alert">
			<strong>{{ $message }}</strong>
		</div>
	</div>
@endif
@if ($errors->any())
	<div class="element-box-content">
	    <div class="alert row alert-danger fade alert-dismissible show mt-3" role="alert">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	</div>
@endif
<script type="text/javascript">
	setInterval(
		function ()
		{
			$(".alert-dismissible").remove();
		},
	5000);
</script>