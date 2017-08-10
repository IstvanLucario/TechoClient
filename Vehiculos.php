<!DOCTYPE html>
<!--
/* 
 * Istvan Lucario
 */
-->
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="css/style.css">
         <script src="js/jquery-3.2.1.min.js"></script>
         <script src="js/jquery-1.7.1.js"></script>
         <script src="js/jquery.numeric.js"></script>
         <script src="js/jquery.tablesorter.js"></script>
         <script src="js/jquery.tablesorter.min.js"></script>
         <script src="js/jquery.tablesorter.pager.js"></script>

        <title>Techo Client</title>
    <script type = "text/javascript">
        
        
$(document).ready(function() {
    $("#nKilometraje").numeric();
    $("#mKilometraje").numeric();
    cargarFabricas();
    cargarModelos();
    cargarAnio();
    cargarColor();
    cargarMotor();
    cargarTipo();
});


function validaCharsEsp(dato) {
            //characterReg = new RegExp(/[`~!@#$%^&*()_°¬|+\-=?;:'",<>\{\}\[\]\\\/]/gi);///check if has specialChars
            if (dato.value != "") {
                dato.value = (dato.value + '').replace(/[`~!@#$%^&*()_°¬|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
                return false;
            }

        }
function cargarFabricas(idSelect){
     $.ajax({type: 'GET',
            data: {},
            url: 'ServicesCatalogos/getCatalogosServices.php?id=1', // <=== llamado a la funcion.
            success: function (fabricas) {
                  if(idSelect){
                 var html = '<Select id="mFabrica">';
                  }
                  else{
            var html = '<Select id="nFabrica">';
                  }
                html += '<option value="0">Seleccione una opci&oacute;n</option>';

                // si la consulta ajax devuelve datos
                if (fabricas.length > 0) {
                  $.each(fabricas, function (i, item) {
                      if(idSelect==item.id){
                       html += '<option value="' + item.id + '" selected="selected">' + item.nombre + '</option>';
                      }
                      else{ 
                       html += '<option value="' + item.id + '">' + item.nombre + '</option>';
                      }
                });
            }
            // si no hay datos mostramos mensaje de no encontraron registros
            if (html == '')
                html = '<tr><td colspan="6">No se encontraron registros..</td></tr>'
            // añadimos  a nuestra tabla todos los datos encontrados mediante la funcion html
             if(idSelect){
                 $("#comboFabricaModificar").html(html);
             }
             else{
            $("#comboFabrica").html(html);
             }
            },
            error: function (xhr) {
                    alert("error");
            }
        });
    }
    
    function cargarModelos(idSelect){
     $.ajax({type: 'GET',
            data: {},
            url: 'ServicesCatalogos/getCatalogosServices.php?id=2', // <=== llamado a la funcion.
            success: function (modelo) {
            if(idSelect){
                 var html = '<Select id="mModelo">';
                  }
                  else{
            var html = '<Select id="nModelo">';
                  }
                html += '<option value="0">Seleccione una opci&oacute;n</option>';

                // si la consulta ajax devuelve datos
                if (modelo.length > 0) {
                  $.each(modelo, function (i, item) {
                   if(idSelect==item.id){
                       html += '<option value="' + item.id + '" selected="selected">' + item.nombre + '</option>';
                      }
                      else{ 
                       html += '<option value="' + item.id + '">' + item.nombre + '</option>';
                      }
                });
            }
            // si no hay datos mostramos mensaje de no encontraron registros
            if (html == '')
                html = '<tr><td colspan="6">No se encontraron registros..</td></tr>'
            // añadimos  a nuestra tabla todos los datos encontrados mediante la funcion html
             if(idSelect){
                 $("#comboModeloModificar").html(html);
             }
             else{
            $("#comboModelo").html(html);
             }
            },
            error: function (xhr) {
                    alert("error");
            }
        });
    }
     function cargarAnio(idSelect){
     $.ajax({type: 'GET',
            data: {},
            url: 'ServicesCatalogos/getCatalogosServices.php?id=3', // <=== llamado a la funcion.
            success: function (anio) {
                if(idSelect){
                 var html = '<Select id="mAnio">';
                  }
                  else{
            var html = '<Select id="nAnio">';
                  }
                html += '<option value="0">Seleccione una opci&oacute;n</option>';

                // si la consulta ajax devuelve datos
                if (anio.length > 0) {
                  $.each(anio, function (i, item) {
                      if(idSelect==item.id){
                       html += '<option value="' + item.id + '" selected="selected">' + item.ANIO + '</option>';
                      }
                      else{ 
                    html += '<option value="' + item.id + '">' + item.ANIO + '</option>';
                      }
                });
            }
            // si no hay datos mostramos mensaje de no encontraron registros
            if (html == '')
                html = '<tr><td colspan="6">No se encontraron registros..</td></tr>'
            // añadimos  a nuestra tabla todos los datos encontrados mediante la funcion html
             if(idSelect){
                 $("#comboAnioModificar").html(html);
             }
             else{
            $("#comboAnio").html(html);
             }
            },
            error: function (xhr) {
                    alert("error");
            }
        });
    }
   
    function cargarMotor(idSelect){
     $.ajax({type: 'GET',
            data: {},
            url: 'ServicesCatalogos/getCatalogosServices.php?id=4', // <=== llamado a la funcion.
            success: function (motor) {
                 if(idSelect){
                 var html = '<Select id="mMotor">';
                  }
                  else{
            var html = '<Select id="nMotor">';
                  }
                html += '<option value="0">Seleccione una opci&oacute;n</option>';

                // si la consulta ajax devuelve datos
                if (motor.length > 0) {
                  $.each(motor, function (i, item) {
                       if(idSelect==item.id){
                       html += '<option value="' + item.id + '" selected="selected">' + item.motor + '</option>';
                      }
                      else{ 
                    html += '<option value="' + item.id + '">' + item.motor + '</option>';
                      }
                });
            }
            // si no hay datos mostramos mensaje de no encontraron registros
            if (html == '')
                html = '<tr><td colspan="6">No se encontraron registros..</td></tr>'
            // añadimos  a nuestra tabla todos los datos encontrados mediante la funcion html
            if(idSelect){
                 $("#comboMotorModificar").html(html);
             }
             else{
            $("#comboMotor").html(html);
             }
            },
            error: function (xhr) {
                    alert("error");
            }
        });
    }
     function cargarColor(idSelect){
     $.ajax({type: 'GET',
            data: {},
            url: 'ServicesCatalogos/getCatalogosServices.php?id=5', // <=== llamado a la funcion.
            success: function (color) {
                  if(idSelect){
                 var html = '<Select id="mColor">';
                  }
                  else{
            var html = '<Select id="nColor">';
                  }
                html += '<option value="0">Seleccione una opci&oacute;n</option>';

                // si la consulta ajax devuelve datos
                if (color.length > 0) {
                  $.each(color, function (i, item) {
                      if(idSelect==item.id){
                       html += '<option value="' + item.id + '" selected="selected">' + item.color + '</option>';
                      }
                      else{ 
                    html += '<option value="' + item.id + '">' + item.color + '</option>';
                      }
                });
            }
            // si no hay datos mostramos mensaje de no encontraron registros
            if (html == '')
                html = '<tr><td colspan="6">No se encontraron registros..</td></tr>'
            // añadimos  a nuestra tabla todos los datos encontrados mediante la funcion html
             if(idSelect){
                 $("#comboColorModificar").html(html);
             }
             else{
            $("#comboColor").html(html);
             }
            },
            error: function (xhr) {
                    alert("error");
            }
        });
    }
     function cargarTipo(idSelect){
     $.ajax({type: 'GET',
            data: {},
            url: 'ServicesCatalogos/getCatalogosServices.php?id=6', // <=== llamado a la funcion.
            success: function (tipo) {
                  if(idSelect){
                 var html = '<Select id="mTipo">';
                  }
                  else{
            var html = '<Select id="nTipo">';
                  }
                html += '<option value="0">Seleccione una opci&oacute;n</option>';

                // si la consulta ajax devuelve datos
                if (tipo.length > 0) {
                  $.each(tipo, function (i, item) {
                      if(idSelect==item.id){
                       html += '<option value="' + item.id + '" selected="selected">' + item.tipo + '</option>';
                      }
                      else{ 
                    html += '<option value="' + item.id + '">' + item.tipo + '</option>';
                      }
                });
            }
            // si no hay datos mostramos mensaje de no encontraron registros
            if (html == '')
                html = '<tr><td colspan="6">No se encontraron registros..</td></tr>'
            // añadimos  a nuestra tabla todos los datos encontrados mediante la funcion html
            if(idSelect){
                 $("#comboTipoModificar").html(html);
             }
             else{
            $("#comboTipo").html(html);
             }
            },
            error: function (xhr) {
                    alert("error");
            }
        });
    }
        function eliminar(id) {
           var con=confirm("desea eliminar el registro "+id);
               if(con){
        $.ajax( { type : 'POST',
                  data : { },
                  url  : 'ServicesVehiculos/DeleteVehiculo.php?id='+id,              // <=== llamado a la funcion.
                  success: function ( data ) {
                    alert( "Registro"+id+" Eliminado" );               // <=== valor de retorno.
                        $("#content").load("ServicesVehiculos/VehiculosData.php");
                  },
                  error: function ( xhr ) {
                    alert( "error" );
                  }
                });
            }
        }
        function actualizar(id,fabrica,modelo,ANIO,color,motor,tipo,kilometraje){
            if( $('#mFabrica').select().val()!='' &&
            $('#mModelo').select().val()!=''&&
            $('#mAnio').select().val()!=''&&
            $('#mColor').select().val()!=''&&
            $('#mMotor').select().val()!=''&&
            $('#mTipo').select().val()!=0&&
            $('#mKilometraje').val()!=''){
                        var kilometraje2=kilometraje+'km';
           var con=confirm("desea Modificar el registro "+id);
               if(con){
                   closePanelM();
                //alert('updateVehiculo.php?id='+id+'&fabrica='+fabrica+'&modelo='+modelo+'&ANIO='+ANIO+'&color='+color+'&motor='+motor+'&tipo='+tipo+'&kilometraje=1000km');
        $.ajax( { type : 'POST',
                  data : { },
                  url  : 'ServicesVehiculos/updateVehiculo.php?id='+id+'&fabrica='+fabrica+'&modelo='+modelo+'&ANIO='+ANIO+'&color='+color+'&motor='+motor+'&tipo='+tipo+'&kilometraje='+kilometraje2,              // <=== llamado a la funcion.
                  success: function ( data ) {
                    //alert(data);
                      
                    alert( "Registro"+id+" Modificado" );               // <=== valor de retorno.
                        $("#content").load("ServicesVehiculos/VehiculosData.php");
                    
                  },
                  error: function ( xhr ) {
                    alert( "error" );
                  }
                });
            }
         }else{
              alert("Debe llenar todos los campos");
             
          }
        }
        
        function agregar(fabrica,modelo,ANIO,color,motor,tipo,kilometraje){
         
         if( $('#nFabrica').select().val()!='' &&
            $('#nModelo').select().val()!=''&&
            $('#nAnio').select().val()!=''&&
            $('#nColor').select().val()!=''&&
            $('#nMotor').select().val()!=''&&
            $('#nTipo').select().val()!=0&&
            $('#nKilometraje').val()!=''){
            var kilometraje2=kilometraje+'km';
           var con=confirm("desea agregar un nuevo registro");
               if(con){
            $('#nFabrica').select().val(0);
            $('#nModelo').select().val(0);
            $('#nAnio').select().val(0);
            $('#nColor').select().val(0);
            $('#nMotor').select().val(0);
            $('#nTipo').select().val(0);
            $('#nKilometraje').val("");
                   closePanel();
              // alert('ServicesVehiculos/AddVehiculo.php?fabrica='+fabrica+'&modelo='+modelo+'&ANIO='+ANIO+'&color='+color+'&motor='+motor+'&tipo='+tipo+'&kilometraje='+kilometraje+'km');
        $.ajax( { type : 'POST',
                  data : { },
                  url  : 'ServicesVehiculos/AddVehiculo.php?fabrica='+fabrica+'&modelo='+modelo+'&ANIO='+ANIO+'&color='+color+'&motor='+motor+'&tipo='+tipo+'&kilometraje='+kilometraje2,              // <=== llamado a la funcion.
                  success: function ( data ) {
                   // alert(data);
                      
                    alert( "Registro Agregado Correctamete" );               // <=== valor de retorno.
                        $("#content").load("ServicesVehiculos/VehiculosData.php");
                    
                  },
                  error: function ( xhr ) {
                    alert( "error" );
                  }
                });
            }
          }
          else{
              alert("Debe llenar todos los campos");
             
          }
        }
        function openPanel(){
            
            $("#nuevoRegistro").show(100);
            $("#baackDiv").show(100);

        }
        function closePanel(){
            
            $("#nuevoRegistro").hide(100);
            $("#baackDiv").hide(100);

        }
        function openPanelM(id,fabrica,modelo,ANIO,color,motor,tipo,kilometraje){
                cargarFabricas(fabrica);
                cargarModelos(modelo);
                cargarAnio(ANIO);
                cargarColor(color);
                cargarMotor(motor);
                cargarTipo(tipo);
                
                $('#mId').val(id);
                $('#mKilometraje').val(kilometraje);
                
            $("#modificarRegistro").show(100);
            $("#baackDiv").show(100);

        }
        function closePanelM(){
            
            $("#modificarRegistro").hide(100);
            $("#baackDiv").hide(100);

        }
    </script>
    </head>
    <body>
        <?php include 'header.php';?> 
        <h1>Vehiculos Registrados</h1>
    <center>
        <img src="img/add.png" alt="agregar registro" onclick="openPanel();"/>
        <div id="nuevoRegistro" class="panelRegistros">
            <div onclick="closePanel();" style="float: right;cursor: pointer;color: firebrick;font-weight: bold;top:0;">X</div>
            <center>
                <h1>Nuevo Vehiculo</h1>
             <span style="float: left;width:100px;">
            Fabrica:
             </span>
            <span id="comboFabrica" style="float: left;">
            <select id="nFabrica">
                <option value="0">Seleccione una opci&oacute;n</option>
            </select>
            </span>    
                <br>
            <span style="float: left;width:100px;">
            Modelo:
             </span>
            <span id="comboModelo" style="float: left;">
            <select id="nModelo">
                <option value="0">Seleccione una opci&oacute;n</option>
            </select>
             </span>
             <br>
              <span style="float: left;width:100px;">
            A&ntilde;o:
             </span>
            <span id="comboAnio" style="float: left;">
            <select id="nAnio">
                <option value="0">Seleccione una opci&oacute;n</option>
            </select>
            </span>
             <br>
              <span style="float: left;width:100px;">
            Color:
             </span>
            <span id="comboColor" style="float: left;">
            <select id="nColor">
                <option value="0">Seleccione una opci&oacute;n</option>
            </select>
            </span>
             <br>
              <span style="float: left;width:100px;">
            Motor:
             </span>
            <span id="comboMotor" style="float: left;">
            <select id="nMotor">
                <option value="0">Seleccione una opci&oacute;n</option>
            </select>
                 </span>
             <br>
              <span style="float: left;width:100px;">
            Tipo:
             </span>
            <span id="comboTipo" style="float: left;">
            <select id="nTipo">
                <option value="0">Seleccione una opci&oacute;n</option>
            </select>
                  </span>
             <br>
              <span style="float: left;width:100px;">
            Kilometraje:
            </span>
            <span id="comboKilometraje" style="float: left;">
                <input type="text" id="nKilometraje" maxlength="8" onkeyup="validaCharsEsp(this);"/>
            </span>
             <br><br>
             <img src="img/check.png" alt="agregar registro" onclick="agregar($('#nFabrica').select().val(),$('#nModelo').select().val(),$('#nAnio').select().val(),$('#nColor').select().val(),$('#nMotor').select().val(),$('#nTipo').select().val(),$('#nKilometraje').val());"/>
            </center>
        </div>
        
        <div id="modificarRegistro" class="panelRegistros">
            <div onclick="closePanelM();" style="float: right;cursor: pointer;color: firebrick;font-weight: bold;top:0;">X</div>
            <center>
                <h1>Modificar Vehiculo</h1>
            <span style="float: left;width:100px;">
            Fabrica:
             </span>
            <span id="comboFabricaModificar" style="float: left;">
            <select  id="mFabrica">
                <option value="0">Seleccione una opci&oacute;n</option>
            </select>
            </span>    
                <br>
            <span style="float: left;width:100px;">
            Modelo:
             </span>
            <span id="comboModeloModificar" style="float: left;">
            <select id="mModelo">
                <option value="0">Seleccione una opci&oacute;n</option>
            </select>
             </span>
             <br>
              <span style="float: left;width:100px;">
            A&ntilde;o:
             </span>
            <span id="comboAnioModificar" style="float: left;">
            <select id="mAnio">
                <option value="0">Seleccione una opci&oacute;n</option>
            </select>
            </span>
             <br>
              <span style="float: left;width:100px;">
            Color:
             </span>
            <span id="comboColorModificar" style="float: left;">
            <select id="mColor">
                <option value="0">Seleccione una opci&oacute;n</option>
            </select>
                </span>
             <br>
              <span style="float: left;width:100px;">
            Motor:
             </span>
            <span id="comboMotorModificar" style="float: left;">
            <select id="mMotor">
                <option value="0">Seleccione una opci&oacute;n</option>
            </select>
                 </span>
             <br>
              <span style="float: left;width:100px;">
            Tipo:
             </span>
            <span id="comboTipoModificar" style="float: left;">
            <select id="mTipo">
                <option value="0">Seleccione una opci&oacute;n</option>
            </select>
                  </span>
             <br>
              <span style="float: left;width:100px;">
            Kilometraje:
            </span>
            <span id="comboKilometrajeModificar" style="float: left;">
            <input type="text" id="mKilometraje" maxlength="8"/>
            </span>
             <br><br>
             <input type="hidden" id="mId"/>
            <img src="img/check.png" alt="actualizar registro" onclick="actualizar($('#mId').val(),$('#mFabrica').select().val(),$('#mModelo').select().val(),$('#mAnio').select().val(),$('#mColor').select().val(),$('#mMotor').select().val(),$('#mTipo').select().val(),$('#mKilometraje').val());"/>
            </center>
        </div>
    <div id="baackDiv" class="black_overlay"></div>

    </center>

        <div id="content">  <?php include 'ServicesVehiculos/VehiculosData.php';?> </div>
        <ul class="pagination" id="myPager"></ul>

    </body>
</html>
