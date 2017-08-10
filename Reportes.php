<!DOCTYPE html>
<!--
/* 
 * Istvan Lucario
 */
-->
<html>
    <head>
       <link rel="stylesheet" href="css/style.css">
         <script src="js/jquery-3.2.1.min.js"></script>
         <script src="js/jquery-1.7.1.js"></script>
         <script src="js/jquery.numeric.js"></script>
        <title>Techo Client</title>
    <script type = "text/javascript">
        
        $(document).ready(function() {
            $("#nKilometrajeData").numeric();
            $("#comboId").numeric();

            
        });
    function openPanel(){
            
            $("#nuevoReporte").show(100);
            $("#baackDiv").show(100);

        }
        function closePanel(){
            
            $("#nuevoReporte").hide(100);
            $("#baackDiv").hide(100);

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
            var html = '= <Select id="nFabrica">';
                  }
                html += '<option value="">Seleccione una opci&oacute;n</option>';

                // si la consulta ajax devuelve datos
                if (fabricas.length > 0) {
                  $.each(fabricas, function (i, item) {
                      if(idSelect==item.id){
                       html += '<option value="' + item.nombre + '" selected="selected">' + item.nombre + '</option>';
                      }
                      else{ 
                       html += '<option value="' + item.nombre + '">' + item.nombre + '</option>';
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
            var html = '= <Select id="nModelo">';
                  }
                html += '<option value="">Seleccione una opci&oacute;n</option>';

                // si la consulta ajax devuelve datos
                if (modelo.length > 0) {
                  $.each(modelo, function (i, item) {
                   if(idSelect==item.id){
                       html += '<option value="' + item.nombre + '" selected="selected">' + item.nombre + '</option>';
                      }
                      else{ 
                       html += '<option value="' + item.nombre + '">' + item.nombre + '</option>';
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
            var html = '= <Select id="nAnio">';
                  }
                html += '<option value="">Seleccione una opci&oacute;n</option>';

                // si la consulta ajax devuelve datos
                if (anio.length > 0) {
                  $.each(anio, function (i, item) {
                      if(idSelect==item.id){
                       html += '<option value="' + item.ANIO + '" selected="selected">' + item.ANIO + '</option>';
                      }
                      else{ 
                    html += '<option value="' + item.ANIO + '">' + item.ANIO + '</option>';
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
            var html = '= <Select id="nMotor">';
                  }
                html += '<option value="">Seleccione una opci&oacute;n</option>';

                // si la consulta ajax devuelve datos
                if (motor.length > 0) {
                  $.each(motor, function (i, item) {
                       if(idSelect==item.id){
                       html += '<option value="' + item.motor + '" selected="selected">' + item.motor + '</option>';
                      }
                      else{ 
                    html += '<option value="' + item.motor + '">' + item.motor + '</option>';
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
            var html = '= <Select id="nColor">';
                  }
                html += '<option value="">Seleccione una opci&oacute;n</option>';

                // si la consulta ajax devuelve datos
                if (color.length > 0) {
                  $.each(color, function (i, item) {
                      if(idSelect==item.id){
                       html += '<option value="' + item.color + '" selected="selected">' + item.color + '</option>';
                      }
                      else{ 
                    html += '<option value="' + item.color + '">' + item.color + '</option>';
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
            var html = '= <Select id="nTipo">';
                  }
                html += '<option value="">Seleccione una opci&oacute;n</option>';

                // si la consulta ajax devuelve datos
                if (tipo.length > 0) {
                  $.each(tipo, function (i, item) {
                      if(idSelect==item.id){
                       html += '<option value="' + item.tipo + '" selected="selected">' + item.tipo + '</option>';
                      }
                      else{ 
                    html += '<option value="' + item.tipo + '">' + item.tipo + '</option>';
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
    function cargarCondicionFabrica(){
        var fabrica=document.getElementById("nCHFabrica");
        if(fabrica.checked){
            cargarFabricas();
            $("#comboFabrica").show();
        }
        else{
             $("#comboFabrica").hide();
        }
    }
     function cargarCondicionModelo(){
        var modelo=document.getElementById("nCHModelo");
        if(modelo.checked){
            cargarModelos();
            $("#comboModelo").show();
        }
        else{
             $("#comboModelo").hide();
        }
    }
    function cargarCondicionAnio(){
        var anio=document.getElementById("nCHAnio");
        if(anio.checked){
            cargarAnio();
            $("#comboAnio").show();
        }
        else{
             $("#comboAnio").hide();
        }
    }
    function cargarCondicionColor(){
        var color=document.getElementById("nCHColor");
        if(color.checked){
            cargarColor();
            $("#comboColor").show();
        }
        else{
             $("#comboColor").hide();
        }
    }    
    function cargarCondicionMotor(){
        var motor=document.getElementById("nCHMotor");
        if(motor.checked){
            cargarMotor();
            $("#comboMotor").show();
        }
        else{
             $("#comboMotor").hide();
        }
    }
    function cargarCondicionTipo(){
        var tipo=document.getElementById("nCHTipo");
        if(tipo.checked){
            cargarTipo();
            $("#comboTipo").show();
        }
        else{
             $("#comboTipo").hide();
        }
    }
    
        function cargarCondicionKilometraje(){
        var kilometraje=document.getElementById("nKilometraje");
        if(kilometraje.checked){
            $("#comboKilometraje").show();
        }
        else{
             $("#comboKilometraje").hide();
        }
    }
    function cargarCondicionOrdenar(){
        var ordenar=document.getElementById("nOrdenar");
    
            if(ordenar.checked){
                $("#comboOrdenar").show();
            }
            else{
                 $("#comboOrdenar").hide();
            }
    }
        function cargarCondicionLimite(){
        var limitar=document.getElementById("nRegistros");
        if(limitar.checked){
            $("#comboLimite").show();
        }
        else{
             $("#comboLimite").hide();
        }
    }
    function cargarCondicionId(){
        var Id=document.getElementById("nId");
        if(Id.checked){
            $("#comboId").show();
            $("#nCHFabrica").prop("disabled",true);
            $("#nCHModelo").prop("disabled",true);
            $("#nCHAnio").prop("disabled",true);
            $("#nCHColor").prop("disabled",true);
            $("#nCHMotor").prop("disabled",true);
            $("#nCHTipo").prop("disabled",true);
            $("#nKilometraje").prop("disabled",true);
            $("#nOrdenar").prop("disabled",true);
            $("#nRegistros").prop("disabled",true);

        }
        else{
             $("#comboId").hide();
            $("#nCHFabrica").prop("disabled",false);
            $("#nCHModelo").prop("disabled",false);
            $("#nCHAnio").prop("disabled",false);
            $("#nCHColor").prop("disabled",false);
            $("#nCHMotor").prop("disabled",false);
            $("#nCHTipo").prop("disabled",false);
            $("#nKilometraje").prop("disabled",false);
            $("#nOrdenar").prop("disabled",false);
            $("#nRegistros").prop("disabled",false);
        } 
        
    }
    
    
    
    
    function validaCharsEsp(dato) {
            //characterReg = new RegExp(/[`~!@#$%^&*()_°¬|+\-=?;:'",<>\{\}\[\]\\\/]/gi);///check if has specialChars
            if (dato.value != "") {
                dato.value = (dato.value + '').replace(/[`~!@#$%^&*()_°¬|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
                return false;
            }

        }
    function consulta(){
        closePanel();
        var id=document.getElementById("nId");
        var fabrica=document.getElementById("nCHFabrica");
        var modelo=document.getElementById("nCHModelo");
        var anio=document.getElementById("nCHAnio");
        var color=document.getElementById("nCHColor");
        var motor=document.getElementById("nCHMotor");
        var tipo=document.getElementById("nCHTipo");
        var kilometraje=document.getElementById("nKilometraje");
        var ordenar=document.getElementById("nOrdenar");
        var limitar=document.getElementById("nRegistros");
        
        var selectFabrica="";
        var selectModelo="";
        var selectAnio="";
        var selectColor=""
        var selectMotor="";
        var selectTipo="";
        var selectKilometraje="";
        
        var valorId="";
        var valorFabrica="";
        var valorModelo="";
        var valorAnio="";
        var valorColor=""
        var valorMotor="";
        var valorTipo="";
        var valorKilometraje="";
        var catalogoOrdenar="";
        var DESCASC="";
        var limite="";
        
        if(id.checked){
            valorId=$('#nIdData').val();
            selectFabrica="fabrica.nombre as fabrica";
            selectModelo="modelo.nombre as modelo"
            selectAnio="anio.ANIO";
            selectColor="color.color";
            selectMotor="motor.motor";
            selectTipo="tipo.tipo";
            selectKilometraje="kilometraje";
        }
        if(fabrica.checked){
          selectFabrica="fabrica.nombre as fabrica";
          if($('#nFabrica').select().val()!=''){
              valorFabrica="fabrica.nombre='"+$('#nFabrica').select().val()+"'";
             }
        }
        if(modelo.checked){
            selectModelo="modelo.nombre as modelo";
            if($('#nModelo').select().val()!=''){
                valorModelo="modelo.nombre='"+$('#nModelo').select().val()+"'";
            }
         }
        if(anio.checked){
            selectAnio="anio.ANIO";
            if($('#nAnio').select().val()!=''){
                 valorAnio="anio.ANIO='"+$('#nAnio').select().val()+"'";
            }
         }
        if(color.checked){ 
            selectColor="color.color";
            if($('#nColor').select().val()!=''){
                valorColor="color.color='"+$('#nColor').select().val()+"'";
         }
         }
         if(motor.checked){
           selectMotor="motor.motor";
           if($('#nMotor').select().val()!=''){
             valorMotor="motor.motor='"+$('#nMotor').select().val()+"'";
             }
         }
         if(tipo.checked){
           selectTipo="tipo.tipo";
           if($('#nTipo').select().val()!=''){
              valorTipo="tipo.tipo='"+$('#nTipo').select().val()+"'";
            }
         }
         if(kilometraje.checked){
           selectKilometraje="kilometraje";
           if($('#nKilometrajeData').val()!=''){
               valorKilometraje="kilometraje='"+$('#nKilometrajeData').val()+"'";
             }
         }
         if(ordenar.checked){
           catalogoOrdenar=" ORDER BY "+$('#catalogosOrdenar').select().val();
            DESCASC=$('#catalogosOrdenarDESCASC').select().val();
         }
         if(limitar.checked){
           limite=" LIMIT "+$('#nLimite').val();
         }
       // alert('ServicesReportes/getReporte.php?id='+valorId+'&selectFabrica='+selectFabrica+'&valorFabrica='+valorFabrica+'&selectModelo='+selectModelo+'&valorModelo='+valorModelo+'&selectAnio='+selectAnio+'&valorAnio='+valorAnio+'&selectColor='+selectColor+'&valorColor='+valorColor+'&selectMotor='+selectMotor+'&valorMotor='+valorMotor+'&selectTipo='+selectTipo+'&valorTipo='+valorTipo+'&selectKilometraje='+selectKilometraje+'&valorKilometraje='+valorKilometraje+'&catalogoOrdenar='+catalogoOrdenar+'&formaOrdenar='+DESCASC+'&selectLimite='+limite);
          $.ajax({type: 'GET',
            data: {},
            url: 'ServicesReportes/getReporte.php?id='+valorId+'&selectFabrica='+selectFabrica+'&valorFabrica='+valorFabrica+'&selectModelo='+selectModelo+'&valorModelo='+valorModelo+'&selectAnio='+selectAnio+'&valorAnio='+valorAnio+'&selectColor='+selectColor+'&valorColor='+valorColor+'&selectMotor='+selectMotor+'&valorMotor='+valorMotor+'&selectTipo='+selectTipo+'&valorTipo='+valorTipo+'&selectKilometraje='+selectKilometraje+'&valorKilometraje='+valorKilometraje+'&catalogoOrdenar='+catalogoOrdenar+'&formaOrdenar='+DESCASC+'&selectLimite='+limite, // <=== llamado a la funcion.
            success: function (data) {
               //   alert(data);
              
          var html = '<table id="tablaConsulta" class="container">';
                            // si la consulta ajax devuelve datos
		if (data.length > 0) {
			$.each(data, function (i, item) {
				html += '<tr>';
                                 html += '<td>' + item.id + '</td>';
                                if(item.fabrica){
                                    html += '<td>' + item.fabrica + '</td>';
                                  }
                               if(item.modelo){
				html += '<td>' + item.modelo + '</td>';
                                 }
                                 if(item.ANIO){
				html += '<td>' + item.ANIO + '</td>';
                                 }
                                 if(item.color){
				html += '<td>' + item.color + '</td>';
                                 }
                                 if(item.motor){
				html += '<td>' + item.motor + '</td>';
                                 }
                                 if(item.tipo){
				html += '<td>' + item.tipo + '</td>';
                                 }
                                 if(item.kilometraje){
				html += '<td>' + item.kilometraje + '</td>';
                                 }
				html += '</tr>';
			});
		}
		html += '</table>';
		// si no hay datos mostramos mensaje de no encontraron registros
		if (html == '')
			html = '<tr><td colspan="6">No se encontraron registros..</td></tr>'
		// añadimos  a nuestra tabla todos los datos encontrados mediante la funcion html
		$("#Consulta").html(html);
                $("#tituloConsulta").text("Datos Encontrados");
            },
            error: function (xhr) {
                    alert("error");
            }
        });
    }
            </script>
    </head>
    <body>
        <?php include 'header.php';?> 
        <h1>Reportes Dinamicos</h1>
    <center>
        <img src="img/busqueda.png" alt="Crear Consulta" style="width: 200px;" onclick="openPanel();"/>
        <div id="nuevoReporte" class="panelRegistros" style="height: 80%;">
            
            <div onclick="closePanel();" style="float: right;cursor: pointer;color: firebrick;font-weight: bold;top:0;">X</div>
            <center>
                 <h1>Reportes Dinamicos</h1>
             <h3>seleccione campos y condiciones</h3>
             <span style="float: left;width:100px;">
            ID:
            </span>
            <span style="float: left;">
                <input type="checkbox" id="nId" onchange="cargarCondicionId();"/>
            </span>
            <span id="comboId" style="float: left;display:none;">
              = <input type="text" id="nIdData" maxlength="10" onkeyup="validaCharsEsp(this);"/>
            </span>
             <br><br>
            <span style="float: left;width:100px;">
            Fabrica:
             </span>
            <span style="float: left;">
                <input type="checkbox" id="nCHFabrica" onchange="cargarCondicionFabrica();">
            
            </span>
            <span id="comboFabrica" style="float: left;display:none;">
                
            </span>
            <br>
           <span style="float: left;width:100px;">
            Modelo:
             </span>
            <span style="float: left;">
                <input type="checkbox" id="nCHModelo" onchange="cargarCondicionModelo();">
            </span>
            <span id="comboModelo" style="float: left;display:none;">
                
            </span>
            <br>
            <span style="float: left;width:100px;">
            A&ntilde;o:
              </span>
            <span style="float: left;">
                <input type="checkbox" id="nCHAnio" onchange="cargarCondicionAnio();">
            </span>
            <span id="comboAnio" style="float: left;display:none;">
                
            </span>
            <br>
            <span style="float: left;width:100px;">
            Color:
             </span>
            <span style="float: left;">
                <input type="checkbox" id="nCHColor" onchange="cargarCondicionColor();">
           </span>
            <span id="comboColor" style="float: left;display:none;">
                
            </span>
            <br>
            <span style="float: left;width:100px;">
            Motor:
             </span>
            <span style="float: left;">
                <input type="checkbox" id="nCHMotor" onchange="cargarCondicionMotor();">
            </span>
            <span id="comboMotor" style="float: left;display:none;">
                
            </span>
            <br>
            <span style="float: left;width:100px;">
            Tipo:
            </span>
            <span style="float: left;">
                <input type="checkbox" id="nCHTipo" onchange="cargarCondicionTipo();">
             </span>
            <span id="comboTipo" style="float: left;display:none;">
                
            </span>
            <br>
            <span style="float: left;width:100px;">
            Kilometraje:
            </span>
            <span style="float: left;">
                <input type="checkbox" id="nKilometraje" onchange="cargarCondicionKilometraje();"/>
            </span>
            <span id="comboKilometraje" style="float: left;display:none;">
              = <input type="text" id="nKilometrajeData" maxlength="8" onkeyup="validaCharsEsp(this);"/>
            </span>
             <br>
             <span style="float: left;width:100px;">
            Ordenar por:
            </span>
            <span style="float: left;">
                <input type="checkbox" id="nOrdenar" onchange="cargarCondicionOrdenar();">
             </span>
            <span id="comboOrdenar" style="float: left;display:none;">
                 = <select id="catalogosOrdenar" >
                    <option value="0">Seleccione un Catalogo</option>
                    <option value="vehiculo.id">Id</option>
                    <option value="fabrica.nombre">Fabrica</option>
                    <option value="modelo.nombre">Modelo</option>
                    <option value="anio.ANIO">A&ntilde;o</option>
                    <option value="motor.motor">Motor</option>
                    <option value="color.color">Color</option>
                    <option value="tipo.tipo">Tipo</option>
                </select>
                 <select id="catalogosOrdenarDESCASC">
                    <option value="DESC">DESC</option>
                    <option value="ASC">ASC</option>
                </select>
            </span>
            <br>
            <br>
            <span style="float: left;width:100px;">
            Limitar No. Registros:
            </span>
            <span style="float: left;">
                <input type="checkbox" id="nRegistros" onchange="cargarCondicionLimite();"/>
            </span>
            <span id="comboLimite" style="float: left;display:none;">
              = <input type="text" id="nLimite" maxlength="2" onkeyup="validaCharsEsp(this);"/>
            </span>
            <br>
             <br>
             <img src="img/check.png" alt="agregar registro" onclick="consulta();"/>
            </center>
        </div>
            <div id="baackDiv" class="black_overlay"></div>
                    <h1 id="tituloConsulta"></h1>
                    <div id="Consulta"></div>

    </center>
    </body>
</html>
