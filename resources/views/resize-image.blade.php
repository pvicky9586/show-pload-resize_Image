@extends('app')
@section('content') 

    @if (session('mensaje'))
       <div class="alert alert-success">             
            {{ session('mensaje') }}
        </div>
    @endif

    <div class="container-2">
        @foreach($imagens as $image)
               <div class="item">
                 <img src="{{ Storage::url("$image->file") }}" class="img-tam">
                </div>
        @endforeach
    </div>














	<section style="padding-top: 2%;">
		<div class="container">
			<div class="row">
				<div class="col-md-12-offset-md-3" w>
					<div class="card">
						<div class="card-header">
							Resize Image
						</div>
						<div class="card-body">
							<form method="POST" action="{{route('image-resize')}}" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
									<label for="file">Upload Image</label>
									<input type="file" name="file" class="form-control" >
									
										
								</div>
								@error('file')
									<div class="alert-danger">Required file</div>
								@enderror
								<button type="submit" class="btn btn-primary">Submit</button>
							

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection