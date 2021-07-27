<!DOCTYPE html>		
 <html>
	<head>
		<title>Carta 1</title>
		<style type="text/css">
.margen{
position: relative;
border:3px solid black;
border-radius: 5px;
width: 100%;
height: auto;
justify-content: center;
align-items: center;
}

.margen .banco {
	margin-top: 30px;
	margin-left: 30px;
	width: 160px;
	height: 70px;

}
.tabla-folio{
	position: absolute;
	right: 0px;
	margin-top: 60px;
	margin-right: 30px;

}
.felicidades{
	font-size: 45px;
	color: #c40006;
	position: relative;
	margin-top: 30px;
	margin-bottom: 30px;
	text-align: center;
}
.nombre , .domicilio{
	position: relative;
	margin-top: 10px;
	font-size: 18px;
	text-align: center;
	z-index: 1;
}
.text-resaltado{
	color: #0a71aa;
	z-index: 1;
}
.textos{
	font-size: 18px;
	text-align: center;
	z-index: 1;
}
.elektra-marca-agua{
	display: block;
	margin: auto;
	top:35%;
	position: absolute;
	width: 100%;
	height: 400px;
	align-items: center;
	z-index: -1;
}
.elektra-marca-agua img{
	margin-top: -30px;
	position: relative;
	left: -20px; 
	width: 550px;
	height: 370px;
	opacity: 0.3;
	z-index: -1;
}
.cupon-campo{

	 display: flex;
  justify-content: center;
  align-items: center;
}
.cupon-margen{
	display: block;
	margin: auto;
	line-height: 50px;
	z-index: 2;
	font-size: 25px;
	color: #108057;
	text-align: center;
	border: dashed 5px red;
	width: 250px;
	height: 65px;
}
.text-2{
	text-align: center;
	font-size: 17px;
}
.text-3{
	margin-right: 40px;
	text-align:right;
	font-size: 17px;
}
.text-4{

	text-align:center;
	font-size: 17px;
}
ul li{
	float: left;
	margin-left: 30px;
	list-style: none
}

.imagenes-carta img{
margin-left: 0px;
margin-top: 20px;
margin-bottom:60px;
}
.imagenes-qr{
	width: 300px;
	margin-left: 35px;
}
.imagenes-qr b{
	position: absolute;
	margin-top: -20px;
	margin-left: 45px;
}
.imagenes-qr img{
	margin-left: 13px;
}



		</style>
</head>
<body>

<?php 


	

	foreach($carta as $row)
	{

		$carta         =            DB::table('cartas')
									  ->where('cartas.id','=',$row)
									  ->join('clientes','clientes.id','=','cartas.id_cliente')
									  ->join('colonias','colonias.id','=','clientes.id_colonia')
									  ->join('ciudades','ciudades.id','=','clientes.id_ciudad')
									  ->join('sucursales','sucursales.id','=','cartas.id_sucursal')
									  ->select('cartas.id as folio',
									  		   'cartas.id_tipo_carta as tipo_carta',
									  		   'cartas.created_at as fecha',
									  		   'cartas.monto as monto',
									  		   'cartas.id_tipo_carta as tipoCarta',
											   'clientes.*',
											   'colonias.nombre as colonia',
											   'ciudades.nombre as ciudad',
											   'sucursales.nombre as sucursal',
											   'sucursales.no_sucursal as no',
											   'sucursales.calle as calleTienda',
											   'sucursales.no_exterior as exteriorTienda',
											   'sucursales.id_colonia as coloniaTienda',
											   'sucursales.id_ciudad as ciudadTienda',
											   'sucursales.referencias as referenciasTienda')
									  ->orderby('cartas.id','desc')
									  ->first();
		$cartaUpdate               =          \App\Carta::find($row);
		$cartaUpdate->id_estatus   =          5;
		$cartaUpdate->save();
		$tipo_carta                =          \App\TipoCarta::find($carta->tipo_carta);
?>
	

	<div class="margen">
		<div class="tabla-folio">

			Fecha: <?php echo date('d/m/Y'); ?> <br>
			Folio: <?php echo $carta->folio ; ?> <br>
			CU   : <?php echo $carta->cu1."-".$carta->cu2."-".$carta->cu3."-".$carta->cu4 ; ?>
		</div>
		<div class="banco">
		        <img src="<?php echo $tipo_carta->img_izq_sup; ?>"  width="260">
		 </div>
		<div class="felicidades">¡¡Felicidades!!</div>
		<div class="nombre">Nombre:
			    <b class="text-resaltado">
			    		<?php echo $carta->nombre ; ?>
			    	    <?php echo $carta->apellido_pa ; ?>
			    		<?php echo $carta->apellido_ma ; ?>
			    </b>
		</div>
		
		<div class="nombre">Domicilio: 
				<b class="text-resaltado">
						<?php echo $carta->calle ; ?>
						#<?php echo $carta->no_ext ; ?> 
						{{$carta->no_int}}
						<?php echo $carta->colonia; ?>
						<?php echo $carta->ciudad ; ?>
						
				</b>
		</div>
		<br><br>
		<div class="textos">
				<?php echo $tipo_carta->texto ; ?>
				<b>Recuerda solo en tu Sucursal {{$carta->sucursal}}</b>
		</div>
		<div class="elektra-marca-agua">
			<center><img src="<?php echo $tipo_carta->img_fondo; ?> " width=500></center>
		</div>
		<br><br>
		<div class="cupon-margen">
			<b>{{ Auth::user()->no_empleado }}-{{$carta->no}}-{{$carta->monto}}</b>
		</div>
		<br><br>
		<div class="text-2">
			Recuerda que para hacer valido el cupón no olvides presentar tu carta <br>
			pregunta por el Asesor de ventas
			 <b class="text-resaltado"> 
					<?php echo Auth::user()->nombre; ?>
					<?php echo Auth::user()->apellido_pa; ?>
			 </b>
			 que con gusto le atendera.<br>

		</div>
		<br>
		<div class="text-3"><b>
			{{$carta->calleTienda}} #{{$carta->exteriorTienda}} <br>
			Col. {{\App\Colonia::find($carta->coloniaTienda)->nombre}} {{\App\Ciudad::find($carta->ciudadTienda)->nombre}}<br>
			{{$carta->referenciasTienda}}<br>
			Cell: <?php echo Auth::user()->tel ; ?>
			</b>
		</div>
		<br>

		<br>
		<div class="text-4">
			<b>¡¡GRACIAS POR TU PREFERENCIA!!</b>
		</div>
		<br>
		<div class="imagenes-carta">
		<center><img src="<?php echo $tipo_carta->img_inf_1; ?> " width='200px'></center>
			

		</div>
	</div>
 <?php 

} ?>
</body>
</html>