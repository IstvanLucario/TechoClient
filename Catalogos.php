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

        <title>Techo Client</title>
        <script type = "text/javascript">
            function selectCatalogoAjax(id) {

               // alert("busca" + id);
                $.ajax({type: 'POST',
                    data: {},
                    url: 'ServicesCatalogos/CatalogoData.php?id=' + id, // <=== llamado a la funcion.
                    success: function (data) {

                       // alert(data);
                        if (id == 1) {
                            var html = '<table id="tableCatalogos" class="container">';
                            // si la consulta ajax devuelve datos
                            if (data.length > 0) {
                                $.each(data, function (i, item) {
                                    html += '<tr>';
                                    html += '<td>' + item.id + '</td>';
                                    html += '<td>' + item.nombre + '</td>';
                                    html += '<td style="width:110px;"><img class="update" src="img/edit.png" alt="modificar" onclick="openPanelModifica(' + item.id + ',\'' + item.nombre + '\');"></td>';
                                    html += '<td style="width:110px;"><img class="delete" src="img/trash-icon.png" alt="eliminar" onclick="eliminar(' + item.id +');"/></td>';

                                    html += '</tr>';
                                });
                            }
                            html += '</table>';
                            // si no hay datos mostramos mensaje de no encontraron registros
                            if (html == '')
                                html = '<tr><td colspan="6">No se encontraron registros..</td></tr>'
                            // añadimos  a nuestra tabla todos los datos encontrados mediante la funcion html
                            $("#tablaCatalogos").html(html);
                        } else if (id == 2) {
                            var html = '<table id="tableCatalogos" class="container">';
                            // si la consulta ajax devuelve datos
                            if (data.length > 0) {
                                $.each(data, function (i, item) {
                                    html += '<tr>';
                                    html += '<td>' + item.id + '</td>';
                                    html += '<td>' + item.nombre + '</td>';
                                    html += '<td style="width:110px;"><img class="update" src="img/edit.png" alt="modificar" onclick="openPanelModifica(' + item.id + ',\'' + item.nombre + '\');"></td>';
                                    html += '<td style="width:110px;"><img class="delete" src="img/trash-icon.png" alt="eliminar" onclick="eliminar(' + item.id +');"/></td>';

                                    html += '</tr>';
                                });
                            }
                            html += '</table>';
                            // si no hay datos mostramos mensaje de no encontraron registros
                            if (html == '')
                                html = '<tr><td colspan="6">No se encontraron registros..</td></tr>'
                            // añadimos  a nuestra tabla todos los datos encontrados mediante la funcion html
                            $("#tablaCatalogos").html(html);
                        } else if (id == 3) {
                            var html = '<table id="tableCatalogos" class="container">';
                            // si la consulta ajax devuelve datos
                            if (data.length > 0) {
                                $.each(data, function (i, item) {
                                    html += '<tr>';
                                    html += '<td>' + item.id + '</td>';
                                    html += '<td>' + item.ANIO + '</td>';
                                    html += '<td style="width:110px;"><img class="update" src="img/edit.png" alt="modificar" onclick="openPanelModifica(' + item.id + ',\'' + item.ANIO + '\');"></td>';
                                    html += '<td style="width:110px;"><img class="delete" src="img/trash-icon.png" alt="eliminar" onclick="eliminar(' + item.id +');"/></td>';

                                    html += '</tr>';
                                });
                            }
                            html += '</table>';
                            // si no hay datos mostramos mensaje de no encontraron registros
                            if (html == '')
                                html = '<tr><td colspan="6">No se encontraron registros..</td></tr>'
                            // añadimos  a nuestra tabla todos los datos encontrados mediante la funcion html
                            $("#tablaCatalogos").html(html);
                        } else if (id == 4) {
                            var html = '<table id="tableCatalogos" class="container">';
                            // si la consulta ajax devuelve datos
                           // alert(data);
                            if (data.length > 0) {
                                $.each(data, function (i, item) {
                                    html += '<tr>';
                                    html += '<td>' + item.id + '</td>';
                                    html += '<td>' + item.motor + '</td>';
                                    html += '<td style="width:110px;"><img class="update" src="img/edit.png" alt="modificar" onclick="openPanelModifica(' + item.id + ',\'' + item.motor + '\');"></td>';
                                    html += '<td style="width:110px;"><img class="delete" src="img/trash-icon.png" alt="eliminar" onclick="eliminar(' + item.id +');"/></td>';

                                    html += '</tr>';
                                });
                            }
                            html += '</table>';
                            // si no hay datos mostramos mensaje de no encontraron registros
                            if (html == '')
                                html = '<tr><td colspan="6">No se encontraron registros..</td></tr>'
                            // añadimos  a nuestra tabla todos los datos encontrados mediante la funcion html
                            $("#tablaCatalogos").html(html);
                        } else if (id == 5) {
                            var html = '<table id="tableCatalogos" class="container">';
                            // si la consulta ajax devuelve datos
                            if (data.length > 0) {
                                $.each(data, function (i, item) {
                                    html += '<tr>';
                                    html += '<td>' + item.id + '</td>';
                                    html += '<td>' + item.color + '</td>';
                                    html += '<td style="width:110px;"><img class="update" src="img/edit.png" alt="modificar" onclick="openPanelModifica(' + item.id + ',\'' + item.color + '\');"></td>';
                                    html += '<td style="width:110px;"><img class="delete" src="img/trash-icon.png" alt="eliminar" onclick="eliminar(' + item.id +');"/></td>';

                                    html += '</tr>';
                                });
                            }
                            html += '</table>';
                            // si no hay datos mostramos mensaje de no encontraron registros
                            if (html == '')
                                html = '<tr><td colspan="6">No se encontraron registros..</td></tr>'
                            // añadimos  a nuestra tabla todos los datos encontrados mediante la funcion html
                            $("#tablaCatalogos").html(html);
                        } else if (id == 6) {
                            var html = '<table id="tableCatalogos" class="container">';
                            // si la consulta ajax devuelve datos
                            if (data.length > 0) {
                                $.each(data, function (i, item) {
                                    html += '<tr>';
                                    html += '<td>' + item.id + '</td>';
                                    html += '<td>' + item.tipo + '</td>';
                                     html += '<td style="width:110px;"><img class="update" src="img/edit.png" alt="modificar" onclick="openPanelModifica(' + item.id + ',\'' + item.tipo + '\');"></td>';
                                    html += '<td style="width:110px;"><img class="delete" src="img/trash-icon.png" alt="eliminar" onclick="eliminar(' + item.id +');"/></td>';

                                    html += '</tr>';
                                });
                            }
                            html += '</table>';
                            // si no hay datos mostramos mensaje de no encontraron registros
                            if (html == '')
                                html = '<tr><td colspan="6">No se encontraron registros..</td></tr>'
                            // añadimos  a nuestra tabla todos los datos encontrados mediante la funcion html
                            $("#tablaCatalogos").html(html);
                        }
                    },
                    error: function (xhr) {
                        alert("error");
                    }

                });
            }
    function openPanel(){
            if($("#catalogos").select().val()==1){
             $("#nuevoCatalogo").text("Fabrica");               
            }
            else if($("#catalogos").select().val()==2){
              $("#nuevoCatalogo").text("Modelo");   
            }
            else if($("#catalogos").select().val()==3){
              $("#nuevoCatalogo").text("A&ntilde;o");   
            }
            else if($("#catalogos").select().val()==4){
              $("#nuevoCatalogo").text("Motor");   
            }
            else if($("#catalogos").select().val()==5){
              $("#nuevoCatalogo").text("Color");   
            }
            else if($("#catalogos").select().val()==6){
              $("#nuevoCatalogo").text("Tipo");    
            }
            else{
                alert("Seleccione un Catalogo");
                return false;
            }
            $("#nuevoRegistro").show(100);
            $("#baackDiv").show(100);

        }
        function closePanel(){
            
            $("#nuevoRegistro").hide(100);
            $("#baackDiv").hide(100);

        }
        
        function openPanelModifica(id,dato){
            if($("#catalogos").select().val()==1){
             $("#modificaCatalogo").text("Fabrica");               
            }
            else if($("#catalogos").select().val()==2){
              $("#modificaCatalogo").text("Modelo");   
            }
            else if($("#catalogos").select().val()==3){
              $("#modificaCatalogo").text("A&ntilde;o");   
            }
            else if($("#catalogos").select().val()==4){
              $("#modificaCatalogo").text("Motor");   
            }
            else if($("#catalogos").select().val()==5){
              $("#modificaCatalogo").text("Color");   
            }
            else if($("#catalogos").select().val()==6){
              $("#modificaCatalogo").text("Tipo");    
            }
            else{
                alert("Seleccione un Catalogo");
                return false;
            }
             $('#mId').val(id);
            $('#mDato').val(dato);
            $("#modificaRegistro").show(100);
            $("#baackDiv").show(100);

        }
         function closePanelModifica(){
            
            $("#modificaRegistro").hide(100);
            $("#baackDiv").hide(100);

        }
        function agregar(dato){
            $('#nDato').val("");
           var con=confirm("desea agregar un nuevo registro");
               if(con){
                   closePanel();
              // alert('ServicesVehiculos/AddVehiculo.php?fabrica='+fabrica+'&modelo='+modelo+'&ANIO='+ANIO+'&color='+color+'&motor='+motor+'&tipo='+tipo+'&kilometraje='+kilometraje+'km');
        $.ajax( { type : 'POST',
                  data : { },
                  url  : 'ServicesCatalogos/AddCatalogo.php?id='+$("#catalogos").select().val()+'&dato='+dato,              // <=== llamado a la funcion.
                  success: function ( data ) {
                   // alert(data);
                    alert( "Registro Agregado Correctamete" );               // <=== valor de retorno.
                       selectCatalogoAjax($("#catalogos").select().val());
                  },
                  error: function ( xhr ) {
                    alert( "error" );
                  }
                });
            }
        }
        function actualizar(id,dato){
           var con=confirm("desea modificar el registro con id: "+id);
               if(con){
                   closePanelModifica();
                    var catalogo="";
            if($("#catalogos").select().val()==1){
            catalogo="fabrica";               
            }
            else if($("#catalogos").select().val()==2){
              catalogo="modelo";   
            }
            else if($("#catalogos").select().val()==3){
             catalogo="anio";   
            }
            else if($("#catalogos").select().val()==4){
              catalogo="motor";   
            }
            else if($("#catalogos").select().val()==5){
             catalogo="color";   
            }
            else if($("#catalogos").select().val()==6){
             catalogo="tipo";    
            }
              // alert('ServicesVehiculos/AddVehiculo.php?fabrica='+fabrica+'&modelo='+modelo+'&ANIO='+ANIO+'&color='+color+'&motor='+motor+'&tipo='+tipo+'&kilometraje='+kilometraje+'km');
        $.ajax( { type : 'POST',
                  data : { },
                  url  : 'ServicesCatalogos/updateCatalogo.php?id='+id+'&catalogo='+catalogo+'&dato='+dato,              // <=== llamado a la funcion.
                  success: function ( data ) {
                    //alert(data);
                    alert( "Registro Modificado Correctamete" );               // <=== valor de retorno.
                       selectCatalogoAjax($("#catalogos").select().val());
                  },
                  error: function ( xhr ) {
                    alert( "error" );
                  }
                });
            }
        }
        function eliminar(id) {
           var con=confirm("desea eliminar el registro "+id);
               if(con){
             var catalogo="";
            if($("#catalogos").select().val()==1){
            catalogo="fabrica";               
            }
            else if($("#catalogos").select().val()==2){
              catalogo="modelo";   
            }
            else if($("#catalogos").select().val()==3){
             catalogo="anio";   
            }
            else if($("#catalogos").select().val()==4){
              catalogo="motor";   
            }
            else if($("#catalogos").select().val()==5){
             catalogo="color";   
            }
            else if($("#catalogos").select().val()==6){
             catalogo="tipo";    
            }
        $.ajax( { type : 'POST',
                  data : { },
                  url  : 'ServicesCatalogos/DeleteCatalogo.php?id='+id+'&catalogo='+catalogo,              // <=== llamado a la funcion.
                  success: function ( data ) {
                      //alert(data);
                    alert( "Registro"+id+" Eliminado" );               // <=== valor de retorno.
                       selectCatalogoAjax($("#catalogos").select().val());
                  },
                  error: function ( xhr ) {
                    alert( "error" );
                  }
                });
            }
        }
        </script>
    </head>
    <body>
<?php include 'header.php'; ?> 
        <h1>Catalogos Registrados</h1>
    <center>
        <select id="catalogos" onchange="selectCatalogoAjax(this.value);">
            <option value="0">Seleccione un Catalogo</option>
            <option value="1">Fabrica</option>
            <option value="2">Modelo</option>
            <option value="3">A&ntilde;o</option>
            <option value="4">Motor</option>
            <option value="5">Color</option>
            <option value="6">Tipo</option>
        </select><br><br>
         <img src="img/add.png" alt="agregar catalogo" onclick="openPanel();"/>
        <div id="nuevoRegistro" class="panelRegistros">
            <div onclick="closePanel();" style="float: right;cursor: pointer;color: firebrick;font-weight: bold;top:0;">X</div>
            <center>
                <h1>Nuevo registro<br> para el catalogo:<label id="nuevoCatalogo"></label></h1>
            <span style="float: left;width:100px;">
                Nuevo Registro 
            </span>
            <span id="inputDato" style="float: left;">
                <input type="text" id="nDato"/>
            </span>
             <br><br>
             <img src="img/check.png" alt="agregar registro" onclick="agregar($('#nDato').val());"/>
            </center>
        </div>
         
          <div id="modificaRegistro" class="panelRegistros">
            <div onclick="closePanelModifica();" style="float: right;cursor: pointer;color: firebrick;font-weight: bold;top:0;">X</div>
            <center>
                <h1>Nuevo registro<br> para el catalogo:<label id="modificaCatalogo"></label></h1>
            <span style="float: left;width:100px;">
                Nuevo Registro 
            </span>
            <span id="inputDatoModifica" style="float: left;">
                <input type="text" id="mDato"/>
                <input type="hidden" id="mId"/>
            </span>
             <br><br>
             <img src="img/check.png" alt="Modificar registro" onclick="actualizar($('#mId').val(),$('#mDato').val());"/>
            </center>
        </div>
             <div id="baackDiv" class="black_overlay"></div>
        <div id="tablaCatalogos"></div>
    </center>
</body>
</html>



