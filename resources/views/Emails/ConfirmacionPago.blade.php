<!DOCTYPE html>
<html>
<head>
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
	.btn-success{
		padding: 13px;
		background: #28a745;
		font-size: 15px;
		color: #fff;
		border-radius: 4px;
		border:solid 1px black;
		width: 90%
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
		
	}
	body{
		border:solid 1px black;
		border-radius: 4px;
	}

</style>
</head>

<body>
		<center>
		<div class="titulo">
		   Confirmacion de Pago
	    </div>
	    </center>
	    <br>
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

	    	                        
	    </div>
	    
	    <a href="{{url('Membresia/ValidarPago/'.$pago->id)}}" class="btn-success">
		   Visualizar Pago
	    </a>
	
	    </center>
    
	

	
</body>
</html>