<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--meta para adaptadar web a Dispositivos Moviles-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Image processing</title>
   <link rel="stylesheet" href="{{ asset('app.css') }}"> 
 </head> 


<body>
  <div align="center">       
    <div class="m-b-md text-center" style="background:  #d1f7fd  ">
        <small class="display-4 text-danger">My's Images</small><br> <small class="display-7" ></small>
    </div>
  </div>

<div class="content">
	@yield('content')
</div>
	
		

</body>
</html>


    @yield('script')
