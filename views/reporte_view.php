
  <!--h1 Usuario: #{user}-->
  <style>
    blockquote {font-size: 15px;}
  </style>
  <div>
    <div class="page-title">
      <div class="title_left">
        <h3>Reporte <?php echo $reporte['tipo']==1?'Local':'Empresarial' ?><small> REPLOC 1</small></h3>
      </div>
      <div class="title_right">
        <div style="display:flex;justify-content:flex-end;" class="col-md-10 col-sm-5 col-xs-12 form-group pull-right top_search">
          <span class="input-group">
					<a href="#" class="btn btn-success" id="pdf" style="margin-top: 1em;">Reporte PDF</a>
          
          <button type="button" data-toggle="modal" data-target=".modal_info"    href="#" class="btn btn-success" id="pdf" style="margin-top: 1em;" >Editar</button>
          <a href="firma.php?reporte=<?php echo $reporte['idreporte']?>" class="btn btn-success <?php echo $reporte['firma']==0?'':'hide'; ?>" style="margin-top: 1em;">Firma</a>
            <button href="" onclick="eliminar(<?php echo $reporte['idreporte']?>)" class="btn btn-danger" id="pdf" style="margin-top: 1em;">Eliminar</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-top: 1em;">
              Pagar
            </button>
				</span>
        </div>

        <div style="display:flex;justify-content:flex-end;" class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          
        </div>
      </div>
    </div>
    <div class="container">
      <div class="col-md-12 contenido_repo">
        <div class="x_panel">
          <div class="x_title">
            <h2>Reporte <?php echo $reporte['tipo']==1?'Local':'Empresarial' ?></h2>
            <div class="clearfix">
            </div>
          </div>
          <div class="x_content">
            <div class="col-md-7 col-sm-8 col-xs-12">
              <ul style="padding:0" class="stats-overview">
                <li class="wi25">
                  <span class="name"> Levantamiento</span>
                  <span id="fec1" class="value text-success"><?php echo $reporte['inicio']?></span>
                </li>
                <li class="wi25">
                  <span class="name"> Fecha de Entrega</span><span id="fec2" class="value text-success"><?php echo $reporte['entrega']?></span>
                </li>
                <li class="wi25">
                  <span class="name"> Prioridad </span>
                  <select id="prio_val" onchange="ch_prio(this)" class="form-control value text-success select_charly">
                    <?php for ($i = 1; $i <= 5; $i++) { 
                      $s="";
                      if ($reporte['priodidad']==$i) {
                        $s = "selected";
                      }
                    ?>
                      <option value="<?php echo $i; ?>" <?php echo $s; ?> > <?php echo $i; ?></option>
                    <?php } ?>
						      </select>
                </li>
                <li class="wi25 hidden-phone">
                  <span class="name"> Estado</span>

                  <select id="estado_val" _status="0" style="padding: 0"  class="form-control value text-success select_charly">
                  <?php foreach ($estados as $estado) { 
                      $s="";
                      if ($reporte['estado']==$estado) {
                        $s = "selected";
                      }
                    ?>
                      <option value="<?php echo $estado; ?>" <?php echo $s; ?> > <?php echo $estado; ?></option>
                    <?php } ?>

    						</select>

                </li>
              </ul>
              <div style="margin-top:1em;" class="col-md-12 col-xs-12">
                <section style="width:100%;" class="panel">
                  <h4 style="margin:0" class="green">Problema </h4>
                  <div id="vdescription">
                    <p style="font-size:1.2em;"> <?php echo $reporte['problema']; ?> </p>
                    
                    
                     
                  </div>
                  <h4 style="margin:0;border-top:1px solid #ccc;padding-top:1em;" class="green">Solución </h4>
                  <div id="description">
                    <p style="font-size:1.2em;"> <?php echo $reporte['solucion']; ?></p>
                    <form action="/reporte_local/1/solucion" method="POST"
                      style="display:none">
                      <div class="form-group"><label>Solución</label>
                        <div style="text-align: center;" class="col-md-12 col-sm-12 col-xs-12 no-padding"><textarea type="text" name="solucion" cols="30" rows="5" class="form-control"></textarea></div>
                      </div>
                      <div class="form-group no-padding">
                        <div style="text-align: center;margin-top:1em;" class="col-md-12 col-sm-12 col-xs-12"><button type="submit" class="btn btn-success enviar">Guardar Solución     </button></div>
                      </div>
                    </form>
                  </div>
                </section>
              </div>
              <div id="msjs">
                <div class="col-md-12">
                  <h4>Seguimiento &amp; Comentarios</h4>
                </div>
                <div style="text-align: right;" class="col-md-12"><button type="button" data-toggle="modal" data-target=".bs-example-modal-sm" style="background:white;border:1px solid;padding:0 .5em;line-height: 2;"
                    class="btn green"><i style="margin-right:.5em" class="fa fa-plus"></i>Agregar Comentario</button></div>
                <!-- end of user messages-->
              </div>
              <div>
                <ul class="messages">
                  <div style="padding-top:3em;" class="message_wrapper"></div>


                    <?php 
                      foreach ($comentarios as $comentario) { ?>
                         <li><img src="files/perfil/<?php echo $comentario['usuario'] ?>.jpg" alt="Avatar" class="avatar">
                          <div class="message_date">
                            <h3 class="date text-info"><?php echo $comentario['f'][2] ?></h3>  
                            <p class="month"><?php echo $mes[intval($comentario['f'][1])] ?></p>
                          </div>
                          <div class="message_wrapper">
                            <h4 class="heading"><?php echo $comentario['nombre'] ?><span style="font-size: 10px;margin-left: 1rem;" class="label label-primary"><?php echo $comentario['tipo']==1?'Usuario
                             Sycti':'Cliente' ?></span><span style="font-size: 10px;margin-left: 1rem;"
                                class="label label-danger <?php echo $comentario['publico']==1?'disNO':'' ?>">Privado</span></h4>
                            <blockquote class="message"><?php echo $comentario['contenido'] ?>
                              <!--| #{comentarioU.idmensaje}-->
                            </blockquote>
                            <!--blockquote>
                              <form action="/reporte_local/filescomentario/14/1" method="POST" enctype="multipart/form-data"><label for="inputImage14" title="Upload image file" class="btn btn-primary btn-upload"><input type="file" name="file" id="inputImage14" class="sr-only"><span class="fa fa-upload"></span></label>
                                <input
                                  type="submit" value="Subir"></form>
                            </blockquote--><br></div>
                        </li>
                         
                    <?php } ?>
                 
                  
                 



                </ul>
                <!-- end of user messages-->
              </div>
              
            </div>


            <!-- start project-detail sidebar-->
            <div class="col-md-5 col-sm-4 col-xs-12">
              <section class="panel">
                <div class="panel-body">
                  
                  <div class="row">
                    <h4 style="font-weight:bold;">Datos del Cliente</h4>
                    <div class="project_detail col-md-6 col-xs-12">
                      <?php if($reporte['tipo'] == 1){ ?>
                        <p class="title">Nombre</p>
                        <p><?php echo $reporte['nombre_cli']; ?></p>

                      <?php }else { ?>
                        <p class="title">Empresa</p>
                        <p><?php echo $reporte['empresa']; ?></p>

                        <p class="title">Correo del Encargado</p>
                        <p><?php echo $empresa['encargado']; ?></p>
                      

                      <?php } ?>

                      <p class="title">Telefono</p>
                      <p><?php echo $reporte['telefono']; ?></p>
                      <p class="title">Tipo de Dispositivo</p>
                      <p><?php echo $reporte['tipodisp']; ?></p>
                    </div>
                    <div class="col-md-6 project_detail col-xs-12">
                      <p class="title">Correo</p>
                      <p><?php echo $reporte['correo']; ?></p>
                      <p class="title">Telefono Secundario</p>
                      <p><?php echo $reporte['telefono2']==""?"---------":$reporte['telefono2']; ?></p>
                      <p class="title">Garantia </p>
                      <p><?php echo $reporte['garantia']; ?>  </p>
                    </div>
                  </div>
                  <div class="row">
                    <h4 style="font-weight:bold;">Datos del Reporte</h4>
                      <div class="col-md-6 project_detail col-xs-12">
                        <p  class="title">Fecha de Entrega</p>
                        <p><?php echo $reporte['entrega']; ?></p>
                        <p class="title">Cotización</p>
                        <p>$ <?php echo $reporte['cotizacion']; ?></p>                     
                        <p  class="title">Operador</p>
                        <select id="oper_val" onchange="ch_oper(this)" class="form-control value select_charly_gris">
                          <?php foreach ($users as $usr) { 
                            $s="";
                            if ($reporte['operador']==$usr) {
                              $s = "selected";
                            }
                          ?>
                            <option value="<?php echo $usr; ?>" <?php echo $s; ?> > <?php echo $usr; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="col-md-6 project_detail col-xs-12">
                        <p  class="title">Tipo de pago</p>
                        <p><?php echo $reporte['tipopago']; ?></p>
                        <p class="title">Pagado</p>
                        <p>$ <?php echo $reporte['pago']; ?></p>
                        <p  class="title">Categoria</p>
                        <select id="cat_val" onchange="ch_cat(this)" class="form-control value select_charly_gris">
                          <?php foreach ($cats as $cat) { 
                            $s="";
                            if ($reporte['categoria']==$cat) {
                              $s = "selected";
                            }
                          ?>
                            <option value="<?php echo $cat; ?>" <?php echo $s; ?> > <?php echo $cat; ?></option>
                          <?php } ?>
                        </select>                       
                      </div>
                  </div>
                  <div class="row" style="margin-top: 1em;">
                    <h4 style="font-weight:bold;">Datos del Dispositivo</h4>
                      <div class="col-md-6 project_detail col-xs-12">
                        <p  class="title">Marca</p>
                        <p><?php echo $reporte['marca']; ?></p>
                        <p class="title">Color</p>
                        <p> <?php echo $reporte['color']; ?></p>
                        <p class="title">Memoria RAM</p>
                        <p> <?php echo $reporte['ram']; ?></p>            
                        <p class="title">Pantalla</p>
                        <p> <?php echo $reporte['pantalla']; ?></p>   
                        <p class="title">Accesorios</p>
                        <p> <?php echo $reporte['acces']; ?></p>        
                        
                      </div>  
                      <div class="col-md-6 project_detail col-xs-12">
                        <p  class="title">Modelo</p>
                        <p><?php echo $reporte['modelo']; ?></p>
                        <p class="title">Almacenamiento</p>
                        <p><?php echo $reporte['almacenamiento']; ?></p>
                        <p class="title">Password</p>
                        <p><?php echo $reporte['pass']; ?></p>
                        <p class="title">N° de serie</p>
                        <p><?php echo $reporte['numserie']; ?></p>
                        <p class="title">Observacioes</p>
                        <p> <?php echo $reporte['observaciones']; ?></p>



                      </div>
                  </div>
                  <div class="row">
                    <h4 style="font-weight:bold;">Archivos</h4>
                    <div class="col-md-12 project_detail col-xs-12">
                      <form id="formARchivos"  enctype="multipart/form-data" class="dropzone dz-clickable">
                        <input type="hidden" value="<?php echo $reporte['idreporte'];  ?>" name="reporte" > 
                        <div class="dz-default dz-message">
                          <i style="margin-right:.5em" class="fa fa-plus"></i><span>Agregar archivos</span>
                        </div>
                      </form>
                    </div>
                  </div>
                  

                  <div style="overflow: hidden;" class="col-md-12">
                    <div class="project_detail">
                      <p class="title">Archivos</p>
                      <ul id="list_files" class="list-unstyled project_files">
                        <?php 
                          foreach ($files as $file) { ?>
                            <li><a href="descarga.php?archivo=<?php echo $file['idarchivo']; ?>.<?php echo $file['ext']; ?>"><i style="display: inline;padding-right: 5px;" class="fa fa-paperclip"></i><?php echo $file['nombre']; ?></a></li>    
                          <?php } ?>

                        
                        
                      </ul>
                      <p></p>
                    </div>
                  </div>
                  <div class="col-md-12  <?php echo $reporte['firma']==1?'':'hide'; ?>">
                    <div class="project_detail">
                      <p class="title">Firma </p>
                      <img id="imgFirma" src="<?php echo $img_data; ?>" ></div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div tabindex="-1" role="dialog" aria-hidden="true" style="display: none; padding-right: 17px;" class="modal fade bs-example-modal-sm in">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header"><button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          <h4 id="myModalLabel2" style="text-align: center;font-weight:bold"
            class="modal-title">Ingresa tu Comentario</h4>
        </div>
        <div style="padding-bottom:5em;" class="modal-body">
          <form id="comentarioForm" action="models/comentario.php" method="POST">
            <textarea id="textarea" required="required" name="contenido" style="min-width:100%; max-width:100%; width:100%; margin-bottom:1rem; min-height:70px;" class="form-control col-md-7 col-xs-12"></textarea>
            <input name="reporte" type="hidden" value="<?php echo $reporte['idreporte']?>">
            <input name="usuario" type="hidden" value="<?php echo $usuario['idusuario'];?>">
              <div style="padding-top:4em;margin-top:2rem;" class="message_wrapper">
                <div style="text-align: right;" class="col-md-12">
                  <div class="checkbox"><input type="checkbox" name="publico" value="1">Publico</div>
                </div>
                <div style="text-align: center;" class="col-md-12"><button id="guardar" type="submit" class="btn btn-success">Guardar Comentario</button></div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Pagar o abonar</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="    position: absolute;top: 15px;right: 15px;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Cotización: <strong> $<?php echo $reporte['cotizacion'] ?></strong></h4>
        <h4>Pagado: <strong>  $<?php echo $reporte['pago'] ?></strong></h4>
        <h4>Abono: <strong> $<input type="number" id="abo"></strong></h4>
        <input type="hidden" id="coti" value="<?php echo $reporte['pago'] ?>">
        <hr>
        <h4>Total:<strong> $ <span id="to"><?php echo $reporte['pago'] ?></span></strong></h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="setab()">Guardar</button>
      </div>
    </div>
  </div>
</div>



<div tabindex="-1" role="dialog" aria-hidden="true" style="display: none; padding-right: 17px;" class="modal fade modal_info">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header"><button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          <h4 id="myModalLabel2" style="text-align: center;font-weight:bold"
            class="modal-title">Edita tu Reporte</h4>
        </div>
        <div  class="modal-body">
          <form id="comentarioForm" action="models/act.php" method="POST">
            <h4 class="text-center">Pago</h4>
            <div class="row">
              <div style="margin-bottom:0;padding-top: .5em;" class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback ">
                    <label style="text-align:left" class="control-label">Cotización </label>
                    <input name="cotizacion" type="text" placeholder="Cotización" aria-describedby="inputSuccess2Status4" class="form-control " value="<?php echo $reporte['cotizacion']; ?>">
               </div>
               <div style="margin-bottom:0;padding-top: .5em;" class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback ">
                    <label style="text-align:left" class="control-label">Pago </label>
                    <input name="pago" type="text" placeholder="Pago" aria-describedby="inputSuccess2Status4" class="form-control " value="<?php echo $reporte['pago']; ?>">
               </div>
               <div style="margin-bottom:0;padding-top: .5em;" class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback ">
                    <label style="text-align:left" class="control-label">Fecha de Entrega </label>
                   <input id="single_cal4" name="entrega" type="text" placeholder="First Name" aria-describedby="inputSuccess2Status4" class="form-control has-feedback-right" value="<?php echo $reporte['entrega']; ?>">
                <span aria-hidden="true" class="fa fa-calendar form-control-feedback right">
               </div>
               <div style="padding-top: .5em;" class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback no-margin">
                <label style="text-align:left" class="control-label">Tipo de Pago</label>
                <select name="tipopago" class="form-control">
                  <option value="Pago Efectivo">Pago Efectivo</option>
                  <option value="Pago Electronico">Pago Electronico</option>
                </select></div>
            </div>

<input name="id" type="hidden" value="<?php echo $reporte['idreporte']?>">

            <h4 class="text-center" style="margin-top: 1em;">Problema</h4>
            <div class="row">
              <div style="margin-bottom:0;padding-top: .1em;" class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback ">
                    <label style="text-align:left" class="control-label">Problema </label>
                    <textarea name="problema" type="text" placeholder="Problema" aria-describedby="inputSuccess2Status4" class="form-control "><?php echo $reporte['problema']; ?></textarea>
               </div>
               <div style="margin-bottom:0;padding-top: .5em;" class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback ">
                    <label style="text-align:left" class="control-label">Solución </label>
                    <textarea name="solucion" type="text" placeholder="Problema" aria-describedby="inputSuccess2Status4" class="form-control "><?php echo $reporte['solucion']; ?></textarea>
               </div>
               <div style="margin-bottom:0;padding-top: .5em;" class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback ">
                    <label style="text-align:left" class="control-label">Observaciones </label>
                  <textarea name="observaciones" type="text" placeholder="Problema" aria-describedby="inputSuccess2Status4" class="form-control " ><?php echo $reporte['observaciones']; ?></textarea>
               </div>
               
            </div>

            <div style="text-align: center;" class="col-md-12"><button id="guardar" type="submit" class="btn btn-success" style="margin-top: 1em;">Guardar </button></div>

          </form>
        </div>
      </div>
    </div>
  </div>







  <script src="public/vendor/dropzone/dist/dropzone.js"></script>
  <script>
    console.dir(1);

    $('#estado_val').change(function(){
    
      $.ajax({
            type: "POST",
            url: 'models/actualizar_reporte.php',
            data: "id=<?php echo $reporte['idreporte'];?>&item=estado&estado="+$('#estado_val').val()
        }).done(function (e) {
          console.log(e);
            console.log("Se cambio success");
            new PNotify({
            title: 'Actualizacion Correcta',
            text: 'Se actualizo correctamente el estado',
            type: 'info',
            addclass: 'dark',
            styling: 'bootstrap3',
            delay: 1000
          });
        })
    });

    /*$('#estado_val').change(function (e){
       alert(1);
    
        $.ajax({
            type: "POST",
            url: 'models/actualizar_reporte.php',
            data: "id=&<?php echo $reporte['idcliente']; ?>item=estado&estado="+$('#estado_val').val()
        }).done(function () {
            console.log("Se cambio success");
            new PNotify({
            title: 'Actualizacion Correcta',
            text: 'Se actualizo correctamente el estado',
            type: 'info',
            addclass: 'dark',
            styling: 'bootstrap3',
            delay: 1000
          });
        })
    
    });*/
    
    function ch_prio(e){
       //$('#estado_actual').hide();
        
        $.ajax({
            type: "POST",
            url: 'models/actualizar_reporte.php',
            data: "id=<?php echo $reporte['idreporte'];?>&item=prio&prio="+$('#prio_val').val()
        }).done(function () {
            console.log("Se cambio success");
            new PNotify({
            title: 'Actualizacion Correcta',
            text: 'Se actualizo correctamente la prioridad',
            type: 'info',
            addclass: 'dark',
            styling: 'bootstrap3',
            delay: 1000
        });
        })
    
    }
    function ch_oper(e){
       //$('#estado_actual').hide();
    
        $.ajax({
            type: "POST",
            url: 'models/actualizar_reporte.php',
            data: "id=<?php echo $reporte['idreporte'];?>&item=oper&oper="+$('#oper_val').val()
        }).done(function () {
            console.log("Se cambio success");
            new PNotify({
            title: 'Actualizacion Correcta',
            text: 'Se actualizo correctamente la prioridad',
            type: 'info',
            addclass: 'dark',
            styling: 'bootstrap3',
            delay: 1000
        });
        })
    
    }


    function ch_cat(e){
       //$('#estado_actual').hide();
       
        
    
        $.ajax({
            type: "POST",
            url: 'models/actualizar_reporte.php',
            data: "id=<?php echo $reporte['idreporte'];?>&item=cat&cat="+$('#cat_val').val()
        }).done(function (e) {
            console.log("Se cambio success");
            console.log(e)
            new PNotify({
            title: 'Actualizacion Correcta',
            text: 'Se actualizo correctamente la Categoria',
            type: 'info',
            addclass: 'dark',
            styling: 'bootstrap3',
            delay: 1000
        });
            App.ws.emit('msj',$('#cat_val').val());
        })
    
    }

   




    
    
    var myDropzone = new Dropzone("#formARchivos", {url: "file.php?"});
    myDropzone.on("success", function (file) {
        if (file.xhr.response=="no") {
          new PNotify({
                      title: 'Error',
                      text: 'Tu archivo ' + file.name + ' NO se subio correctamente',
                      type: 'danger',
                      styling: 'bootstrap3',
                      delay: 2000
                  });
        }
        console.log(file.xhr.response);
       
        setTimeout(function(){
            myDropzone.removeFile(file);
        }, 3000);
    
        //alert("asd");
        new PNotify({
            title: 'Archivo Subido Correctamente',
            text: 'Tu archivo ' + file.name + ' se subio correctamente',
            type: 'success',
            styling: 'bootstrap3',
            delay: 2000
        });
        var ele = document.createElement('li');
        ele.innerHTML='<a href="descarga.php?archivo='+file.xhr.response+'.'+file.name.split('.')[1]+'"><i class="fa fa-paperclip"></i>'+file.name+'</a>';
        document.getElementById('list_files').appendChild(ele)
    
    });

    $('#pdf').on('click',function(){
      window.frames["printf"].focus();
      window.frames["printf"].print();
    });
    

    function eliminar(e){
      

      swal({
        title: "Estas seguro?",
        text: "Deseas eliminar el reporte "+e+"!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Si , Borrar!",
        closeOnConfirm: false
      },
      function(){
        $.post( "models/borrar.php", { reporte: e }).done(function( data ) {
          console.log(data);
          if (data == '1') {
            swal("Eliminado!", "Se elimino correctamente", "success");
            setTimeout(()=>{
              window.location.href = "index.php";
            },1000);
            
          }else{
            swal("No se Elimino!", "No se pudo eliminar correctamente", "warning");
          }
        });
        
      });
    }

    $('#abo').on('change',function(){
      abonar();
    });
    $('#abo').on('keyup',function(){
      abonar();
      
    });
    $('#abo').on('keydown',function(){
      abonar();
    });
    var tob =0;

    function abonar(){
      var ab = parseInt($('#abo').val());
      var total = parseInt($('#coti').val()) + ab;

      if (total==NaN) {
        ta = total;
      }else{
        ta =0;
      }
      console.log(total);
      tob= total;
      $('#to').html(total);
    }

    function setab(){
      
      $.post( "models/abonar.php", { id: <?php echo $reporte['idreporte']?> , pago : tob}).done(function( data ) {
          console.log(data);
          if (data == '1') {
            $('#exampleModal').modal('hide');
            swal("Abono correctamente!", "Se abono correctamente", "success");
            setTimeout(()=>{
              window.location.reload();;
            },1000);
            
          }else{
            $('#exampleModal').modal('hide');
            swal("No se abono!", "No se pudo abonar correctamente", "warning");
          }
        });
      

      
    }
    
  </script>

<iframe width="800px" style="position: absolute;left: -500%;" src="pdf.php?reporte=<?php echo $idreporte; ?>"  id="printf" name="printf"></iframe>