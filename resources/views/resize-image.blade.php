<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Resize Image</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<body>

	<section style="padding-top: 20%;">
		<div class="container">
			<div class="row">
				<div class="col-md-12-offset-md-3">
					<div class="card">
						<div class="card-header">
							Resise Image
						</div>
						<div class="card-body">
							<form method="POST" action="{{route('image-resize')}}" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
									<label for="file">Choose Image</label>
									<input type="file" name="file" class="form-control">
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


</body>
</html>