@extends('layouts.app-menu')
@section('contend')
@if(Auth::user()->id_jerarquia > 2)
		@if($membresia->id_estatus == 2) 
         <div class="card-header" style="background: #3b285f; color: #EEE;">
               <center>
                Tu <b>Membresia</b> se encuentra actualmente <br>
                   <b class="text-warning"> 😭💔 {{$membresia->estatus->nombre}} 💔😭 </b><br><br>
                   <a href="{{url('Membresia/FormasPago')}}" class="btn btn-warning btn-xs">
                   💵 Pagar Membresia 💵</a>
                </center>
              </div> 
         @endif
@endif
    
      

@endsection