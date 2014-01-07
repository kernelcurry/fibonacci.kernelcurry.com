<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="canonical" href="http://kernelcurry.com/blog/why-you-should-use-c-with-php/" />

		<title>KernelCurry - Fibonacci Sequence Term Generator</title>

		<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="{{ asset('css/default.css') }}" rel="stylesheet">

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">Fibonacci Sequence Term Generator</h1>
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<form id="send">
						<div class="input-group">
							<input id="term" type="text" class="form-control">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">Get Term</button>
							</span>
						</div>
					</form>
				</div>
			</div>
			@yield('content')
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#send').submit(function(e){
					window.location.href = $('#term').val();
					e.preventDefault();
				});
			});
		</script>
	</body>
</html>