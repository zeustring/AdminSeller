@extends('layouts.app-menu')
@section('contend')
<style type="text/css">

</style>
    <div class="card">
              <div class="card-header" style="background: #3b285f; color: #EEE;">
               <center>
                Tu <b>Membresia</b> se encuentra actualmente <br>
                @if($membresia->id_estatus == 2)
                   <b class="text-warning"> 😭💔 {{$membresia->estatus->nombre}} 💔😭 </b><br><br>
                   <a href="" class="btn btn-warning btn-xs">
                   💵 Pagar Membresia 💵</a>

                @else
                    <b class="text-success">🥰🌟 {{$membresia->estatus->nombre}} 🌟🥰</b>
                @endif
                </center>
              </div> 
              <!-- /.card-header -->
              <div class="card-body">
         

         
         <div class="row">
          <div class="col-sm-12 card-body table-responsive p-0">
           
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info" >
                  <thead>
                  <tr role="row">
                    
                    <th width="15%">
                     Folio
                    </th>
                    <th width="20%">
                     Fecha de pago
                    </th>
                    <th width="35%">
                     Tipo de Pago
                    </th>
                    
                    <th width="5%" >
                     <center>Opiones</center>
                    </th>
                  </thead>
                  <tbody>
                 
                
                  <tr role="row" class="odd" >
                    <td>
                      765653
                    </td>
                    <td>
                      14/08/2021
                    </td>
                    <td>
                      Depositito
                    </td>
                    <td>
                      <center>
                      <button class="btn btn-success btn-xs EditarCarta"
                              
                              data-toggle="modal" 
                              data-target="#modal-lg"
                              id=""
                              type="button">
                        <i class="fa fa-eye"></i>
                      </button>
                     
                      </center>  
                   
                  
                    </td>
                  </tr>
                </tbody>
                  
                </table>
                </form> 
              </div></div>
              </div>
              
              <!-- /.card-body -->
  </div>


@endsection
 