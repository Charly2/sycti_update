<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reporte</title>

    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="public/css/index.css" rel="stylesheet">

  </head>
  <style>
    @media print {


.blanco {
    -webkit-print-color-adjust: exact;
       color: #ffffff !important;
   }
    
   .card-header{
     -webkit-print-color-adjust: exact;
        background: #46B1B7!important;
    color: white!important;
   }


  </style>

  <body style="">



    <!-- Page Content -->
    <div class="empresarial" id="HTMLtoPDF">

      <div class="" style="position: relative;">
          <!--div class="image">
            <div class="cont">
              <img src="public/images/logo.png" alt="">
              
              <h4>Reporte Empresarial</h4>
              <p>Rep_Loc_35</p>
            </div>
          </div-->
          <img src="public/images/h.jpg" style="width: 100%" alt="">
          <div class="row" style="position: absolute;top: 50px;left: 5px;color: white;width: 100%">
              <div class="col-md-3 text-center">
              <p>Telefonos: 75917735<br> y 75917736<br> Whatsapp: 5571469096</p>
            </div>
             <div class="col-md-6 text-center"></div>
            <div class="col-md-3 text-center">
            <p>Av. Revolución 553-B, <br>San Pedro de los Pinos,<br> C.P. 09800, Benito Juárez,<br> CDMX</p>
          </div>
          </div>
          <div class="row" style="position: absolute;bottom: 50px;left: 5px;color: white;width: 100%">
                <div class="col-md-2 text-center" >
                  <p class="noMargin blanco"><strong>N. de Orden: <?php echo $idreporte;?></strong></strong></p>
                </div>
                <div class="col-md-3 text-center">
                 <p class="noMargin blanco"><strong>Fecha inicio: <?php echo $reporte['inicio']; ?></strong></p>
                </div>
              <div class="col-md-2 text-center"></div>
                <div class="col-md-4 text-center ">
                  <p class="noMargin blanco"><strong>Fecha entrega: <?php echo $reporte['entrega']; ?></strong></p>
                </div>
              </div>
            </div>
      </div>




      
      <div class="main" style="position: relative;" >
         
        

        <div class="card card-outline-secondary marTop" style="border-color: #46B1B7">
            <div class="card-header" style="background: #46B1B7;color: white;">
              <strong>CLIENTE</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-7">

                  <div class="row">
                      <div class="col-md-4">
                        <strong>Nombre: </strong>
                      </div>
                      <div class="col-md-6">
                        <?php echo $reporte['empresa']; ?>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4">
                        <strong>Telefonos: </strong>
                      </div>
                      <div class="col-md-3">
                        <?php echo $reporte['telefono']; ?>
                      </div>
                      <div class="col-md-3">
                       <?php echo $reporte['telefono2']; ?>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4">
                        <strong>Correo: </strong>
                      </div>
                      <div class="col-md-6">
                        <?php echo $reporte['correo']; ?>
                      </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="row">
                      <div class="col-md-6">
                        <strong>Cotizacion: </strong>
                      </div>
                      <div class="col-md-6">
                        $ <?php echo $reporte['cotizacion']; ?>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                        <strong>Pago: </strong>
                      </div>
                      <div class="col-md-6">
                        $ <?php echo $reporte['pago']; ?>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                        <strong>Tipo de Pago: </strong>
                      </div>
                      <div class="col-md-6">
                         <?php echo $reporte['tipopago']; ?>
                      </div>
                  </div>
                  
                 
                </div>


                </div>
                
              </div>

              
          </div>


          <div class="card card-outline-secondary marTop" style="border-color: #46B1B7">
            <div class="card-header" style="background: #46B1B7;color: white;">
              <strong>EQUIPO</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-2">
                  <strong>Tipo de Equipo: </strong>
                </div>
                <div class="col-md-2">
                  <?php echo $reporte['tipodisp']; ?>
                </div>
                <div class="col-md-2">
                  <strong>Num. de Serie: </strong>
                </div>
                <div class="col-md-2">
                  <?php echo $reporte['numserie']; ?>
                </div>
                <div class="col-md-2">
                  <strong>Respando: </strong>
                </div>
                <div class="col-md-2">
                   <?php echo $reporte['respaldo']==1?"Si":"No"; ?>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  <strong>Marca: </strong>
                </div>
                <div class="col-md-2">
                  <?php echo $reporte['marca']; ?>
                </div>
                <div class="col-md-2">
                  <strong>Modelo: </strong>
                </div>
                <div class="col-md-2">
                  <?php echo $reporte['modelo']; ?>
                </div>
                <div class="col-md-2">
                  <strong>Color: </strong>
                </div>
                <div class="col-md-2">
                  <?php echo $reporte['color']; ?>
                </div>
              </div>
              
              
              <div class="row">
                <div class="col-md-2">
                  <strong>Password: </strong>
                </div>
                <div class="col-md-2">
                  <?php echo $reporte['pass']; ?>
                </div>
                
                <div class="col-md-2">
                  <strong>Memoria Ram: </strong>
                </div>
                <div class="col-md-2">
                  <?php echo $reporte['ram']; ?>
                </div>
                <div class="col-md-2">
                  <strong>Almacenamiento</strong>
                </div>
                <div class="col-md-2">
                  <?php echo $reporte['almacenamiento']; ?>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <strong>Falla:</strong>
                </div>
                <div class="col-md-12">
                  <p><?php echo $reporte['problema']; ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <strong>Solución:</strong>
                </div>
                <div class="col-md-12">
                  <p><?php echo $reporte['solucion']; ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <strong>Observaciones:</strong>
                </div>
                <div class="col-md-12">
                  <p><?php echo $reporte['observaciones']; ?></p>
                </div>
              </div>
             
            </div>
          </div>


          <div class="card card-outline-secondary marTop" style="border-color: #46B1B7">
            <div class="card-header text-center" style="background: #46B1B7;color: white;">
              <strong>Detalles en equipo</strong>
            </div>
            <div class="card-body" style="padding: .25rem;">
              <div class="row">
                
                <div class="col-md-6 text-center">
                  <img class="disp" src="public/img/<?php echo $reporte['tipodisp']; ?>.jpg" alt="">
                </div>
                <div class="col-md-6 text-center">
                  <strong>Garantia:</strong>
                  <p> <?php echo $reporte['garantia']; ?> dias</p>


                  <div class="">
             
             <p class="text-muted"style="margin: 0;font-size: .9em;">Estatus final del equipo:</p>
             <p style="min-height: 2em;"></p>
             <p style="height: 1em;"></p>
           </div> 
            
          

          
                  
                </div>


              </div>
            </div>
          </div>




        

       
     
        <div class="marTops" style="margin-top: .5rem;">
            <div class="row">
              <div class="col-md-1 text-center">
                <img class="terminos" src="public/img/terminos.png" alt="">
              </div>
              <div class="col-md-10">
                <ul class="condiciones" style="font-size: 70%;">
                  <?php
                  for($i=1;$i<sizeof($lin);$i++){
                          echo '<li>'.$lin[$i].'</li>';
                  }
                  ?>
                </ul>
                
              </div>
            
            </div>
            <small class="text-muted declaro" style="font-size: 10px;">Declaró estar de acuerdo con los términos y condiciones estipulados en esta orden de servicio. Así mismo declaro que los datos contenidos en ellos son reales del estado actual de mi(s) equipo(s).</small> 
          </div>
        

          <div class="cyard card-outline-secondary marTop" style="border-colorx: #46B1B7">
            
            <div class="card-body">
              <div class="row" style="position: relative; margin-top: 1em">
          
          <div class="col-md-3 text-center">
            
          </div>
          <div class="col-md-6">
            <div class="row fecha ">
            <div class="col-md-6 text-center" style="    padding-top: 50px;">
              <strong>Fecha: </strong> ____________________
            </div>
            <div class="col-md-6 text-center">
              <strong>Firma: </strong> 
              <?php if($reporte['firma']==0){ ?>
                  ____________________
              <?php }else{ ?>
                  <img class="firma" src="<?php echo $img_data; ?>" alt="">
              <?php } ?>
            </div>
          </div>
          </div>
          <div class="col-md-3 text-center">
            
          </div>

          <!--img src="public/images/fs.jpg" style="width: 100%" alt=""-->
         
      </div>
            </div>
          </div>
      
    

 
      
      </div>

      

           



      
        

       
    </div>


<p style="position: absolute;bottom: 15px;right: 15px;">Fecha de impresión <span id="d"></span> </p>

    
    <script>
      var d = new Date();

      


            document.addEventListener('DOMContentLoaded', function() {
         document.getElementById('d').innerText=d.toLocaleDateString();
      });
    </script>

  </body>

</html>

