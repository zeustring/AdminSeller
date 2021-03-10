<!DOCTYPE html>
<html>
<head>
 <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<title></title>
<style type="text/css">
	.titulo{
		background: #343a40;
		font-size: 20px;
		color: #FFF;
		width: 90%;
		padding: 10px;
		margin-bottom: 30px;
	}
	

	.informacion{
		background: #343a40;
		width: 90%;
		padding: 20px;
		font-size: 13px;
		text-align: left;
		border-radius: 4px;	
		margin-bottom: 30px;
		color: #FFFFFF;
	}
     label{
		color: #ffc107;
		margin-top: -10px;
		margin-bottom: -10px;
		
	}

	img{
		width: 320px;
		border-radius: 5px;

	}
</style>
</head>

<body><br>
		<center>
		<div class="titulo">
		   Confirmacion de Pago
	    </div>
	    </center>
	    
	    <center>
	    	
	    
	    <div class="informacion">
	    	<label>Canal:</label> {{ $pago->empleado->canal->nombre }}<br>
	    	<label>Sucursal:</label> {{ $pago->empleado->sucursal->no_sucursal }}
	    	                        {{ $pago->empleado->sucursal->nombre }} <br>
	    	<label>Empleado:</label> {{ $pago->empleado->no_empleado}} 
	    	                        {{ $pago->empleado->nombre}}  
	    	                        {{ $pago->empleado->apellido_pa}} <br>
	    	<label>Pago:</label> ${{ $pago->cantidad }} <br>
	    	<label>Folio:</label> F-{{ $pago->id }} <br>
	    	<label>Cupon:</label> Sin Cupon <br>

	    <img src="{{url('imagen/pagos/'.$pago->img_pago)}}">	                        
	    </div>
	    
	    <a href="{{url('Membresia/PagoAutorizar/'.$pago->id)}}" class="btn btn-success">
		   Autorizar
	    </a>
	    <a href="{{url('Membresia/PagoCancelar/'.$pago->id)}}" class="btn btn-danger">
		   Cancelar
	    </a>
	
	    </center>
    
	

	
</body>
</html>