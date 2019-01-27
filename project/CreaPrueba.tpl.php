<?php
$strPageTitle = QApplication::Translate('Crea Prueba');
require(__CONFIGURATION__ . '/header.inc.php');
?>


<style>
    td{
        cursor:pointer;
        background: -moz-linear-gradient(top, #ffffff, #D1E3E9);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ffffff), to(#D1E3E9));
        text-align:center;
    }

    td:hover{
        background: -moz-linear-gradient(top, #249ee4, #057cc0);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#249ee4), to(#057cc0));
    }

    td:active
    {
        background: -moz-linear-gradient(top, #057cc0, #249ee4);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#057cc0), to(#249ee4));
    }

    #result{
        font-weight:bold;
        font-size:16pt;
    }

    .formato_a4 {
        width: 595px;
        height: 842px;

        /*595 x 842*/
    }
</style>

<style>

    .animacion {
        animation-name: parpadeo;
        animation-duration: 1.5s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;

        -webkit-animation-name:parpadeo;
        -webkit-animation-duration: 1.5s;
        -webkit-animation-timing-function: linear;
        -webkit-animation-iteration-count: infinite;
    }

    @-moz-keyframes parpadeo{  
        0% { opacity: 1.0; }
        50% { opacity: 0.5; }
        100% { opacity: 1.0; }
    }

    @-webkit-keyframes parpadeo {  
        0% { opacity: 1.0; }
        50% { opacity: 0.5; }
        100% { opacity: 1.0; }
    }

    @keyframes parpadeo {  
        0% { opacity: 1.0; }
        50% { opacity: 0.5; }
        100% { opacity: 1.0; }
    }

</style>


<style>

    .seleccion-alternativa{
        background: -moz-linear-gradient(top, #ffffff, #8acdef);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ffffff), to(#8acdef));
    }

    .alternativa-correcta{
        background: -moz-linear-gradient(top, #ffffff, #15dcc6);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ffffff), to(#15dcc6));
    }
    
</style>



<?php $this->RenderBegin() ?>

<!-- Start content -->
<div class="content" style="margin-bottom: 70px">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row" style="margin-top: 90px; ">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Bienvenido(a) !</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Minton</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Creación de la prueba</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        <!--Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.-->
                    </p>

                    <!--<form id="basic-form" action="#">-->
                    <div role="application" class="wizard clearfix" id="steps-uid-0"><div class="steps clearfix"><ul role="tablist"><li id="li_paso_0"  role="tab" class="first current" aria-disabled="false" aria-selected="true"><a  onclick="return false;" id="steps-uid-0-t-0" href="#steps-uid-0-h-0" aria-controls="steps-uid-0-p-0"><span class="current-info audible">current step: </span><span class="number">1.</span> Estructura Previa</a></li><li role="tab" id="li_paso_1" class="disabled" aria-disabled="true"><a  onclick="return false;" id="steps-uid-0-t-1" href="#steps-uid-0-h-1" aria-controls="steps-uid-0-p-1"><span class="number">2.</span> Diseño de la Prueba</a></li><li role="tab" id="li_paso_2" class="disabled" aria-disabled="true"><a onclick="return false;" id="steps-uid-0-t-2" href="#steps-uid-0-h-2" aria-controls="steps-uid-0-p-2"><span class="number">3.</span> Correción Automática</a></li><li role="tab" id="li_paso_3" class="disabled last" aria-disabled="true"><a  onclick="return false;" id="steps-uid-0-t-3" href="#steps-uid-0-h-3" aria-controls="steps-uid-0-p-3"><span class="number">4.</span> Presentación Final</a></li></ul></div><div class="content clearfix">
                            <h3 id="steps-uid-0-h-0" tabindex="-1" class="title current">Account</h3>
                            <section id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current" aria-hidden="false">

                                <div class="row">

                                    <div class="col-md-12">
                                        <h5 class="header-title">Contenido de Encabezado:</h5>
                                        <div class="mt-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ckb_nombres" checked="">
                                                <label class="custom-control-label" for="ckb_nombres">Nombres y Apellidos</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ckb_fecha"  checked="">
                                                <label class="custom-control-label" for="ckb_fecha">Fecha</label>
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ckb_grado"  checked="">
                                                <label class="custom-control-label" for="ckb_grado">Grado</label>
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ckb_seccion"  checked="">
                                                <label class="custom-control-label" for="ckb_seccion">Sección</label>
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ckb_logo_ie"  checked="">
                                                <label class="custom-control-label" for="ckb_logo_ie">Logo de la I.E.</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 10px">
                                    <div class="col-md-12">
                                        <h5 class="header-title">Tipo de enumeración de las preguntas:</h5>
                                        <div class="mt-2">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="rb_tipo_enumeracion1" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="rb_tipo_enumeracion1">Números decimales</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="rb_tipo_enumeracion2" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="rb_tipo_enumeracion2">Números romanos</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="rb_tipo_enumeracion3" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="rb_tipo_enumeracion3">Letras minúsculas</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="rb_tipo_enumeracion4" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="rb_tipo_enumeracion4">Letras mayúsculas</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-10 header-title">Número aproximado de preguntas:</label>
                                    <div class="col-md-2">
                                        <input class="form-control" type="number" id="txt_numero_preguntas" value="10">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-10 header-title">Número  aproximado de alternativas:</label>
                                    <div class="col-md-2">
                                        <input class="form-control" type="number" id="txt_numero_alternativas" value="5">
                                    </div>
                                </div>



                            </section>
                            <h3 id="steps-uid-0-h-1" tabindex="-1" class="title">Profilesfsdfsd</h3>
                            <section id="steps-uid-0-p-1" role="tabpanel" aria-labelledby="steps-uid-0-h-1" class="body" aria-hidden="true" style="display: none;">

                                <div class="row">

                                    <div class="col-md-4">                                  
                                        <button id="btn_guarda_estructura" class="btn btn-success btn-block waves-effect waves-light m-b-5"> <i class="fa fa-save m-r-5"></i> <span>Guardar</span> </button>
                                    </div>

                                    <div class="col-md-4">                                  
                                        <button id="btn_correcion_automatica" class="btn btn-info btn-block waves-effect waves-light m-b-5"> <i class="fa fa-check m-r-5"></i><i class="fa fa-close m-r-5"></i> <span>Correción Automática</span> </button>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-12" id="div_tabla_cabecera">
                                        <table border=0 cellpadding=0 cellspacing=0 class="table-bordered" style="width: 100%">

                                            <tr height=20 >
                                                <td width=34 ></td>                                                
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                            </tr>
                                            <tr height=60 >
                                                <td colspan=2   width=68 >&nbsp;</td>
                                                <td colspan=12  width=408 >EXAMEN DE COMUNICACION</td>
                                                <td colspan=2   width=68 >&nbsp;</td>
                                            </tr>

                                            <tr height=20 >
                                                <td colspan=4 height=20 >Nombre y Apelllidos</td>
                                                <td colspan=12 >&nbsp;</td>
                                            </tr>
                                            <tr height=20 >
                                                <td colspan=2 >Grado:</td>
                                                <td colspan=4  >&nbsp;</td>
                                                <td colspan=2 >seccion</td>
                                                <td colspan=3 >&nbsp;</td>
                                                <td colspan=2 >fecha</td>
                                                <td colspan=3 >&nbsp;</td>
                                            </tr>
                                            <tr height=20 >
                                                <td width=34 ></td>                                                
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                                <td width=34 ></td>
                                            </tr>


                                        </table>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-lg-12" id="div_tabla_contenido">
                                        <table id="table_contenido" class="table-bordered" style="width: 100%">
                                            <tr>
                                                <td>1.-</td>
                                                <td colspan="10">Debido a qué sustancia las hojas de las plantas tienen color verde.</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>a)</td>
                                                <td>Clorofila</td>
                                                <td>b)</td>
                                                <td>Estambres</td>
                                                <td>c)</td>
                                                <td>Nectar</td>
                                                <td>d)</td>
                                                <td>Sabia</td>
                                                <td>e)</td>
                                                <td>No sé</td>
                                            </tr>

                                        </table>

                                    </div>



                                </div>







                            </section>
                            <h3 id="steps-uid-0-h-2" tabindex="-1" class="title">Hints</h3>
                            <section id="steps-uid-0-p-2" role="tabpanel" aria-labelledby="steps-uid-0-h-2" class="body" aria-hidden="true" style="display: none;">
                                <div class="form-group clearfix">
                                    <div class="col-lg-12">
                                        <ul class="list-unstyled w-list">
                                            <li><b>First Name :</b> Jonathan </li>
                                            <li><b>Last Name :</b> Smith </li>
                                            <li><b>Emial:</b> jonathan@smith.com</li>
                                            <li><b>Address:</b> 123 Your City, Cityname. </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                            <h3 id="steps-uid-0-h-3" tabindex="-1" class="title">Finish</h3>
                            <section id="steps-uid-0-p-3" role="tabpanel" aria-labelledby="steps-uid-0-h-3" class="body" aria-hidden="true" style="display: none;">
                                <div class="form-group clearfix">
                                    <div class="col-lg-12">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox-h" type="checkbox">
                                            <label for="checkbox-h">
                                                I agree with the Terms and Conditions.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" id="li_anterior_wizard" aria-disabled="true"><a  href="#previous" role="menuitem">Anterior</a></li><li id="li_siguiente_wizard" aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li><li id="li_final_wizard" aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li></ul></div></div>
                    <!--</form>-->

                </div>
            </div>
        </div>

    </div>
    <!-- end container -->
</div>




<?php $this->RenderEnd() ?>


<script>

    var numeroPreguntas = 10;
    var numeroAlternativas = 5;
    var tipoEnumeracion = "decimal";
    var tieneNombreAlumno = true;
    var tieneFecha = true;
    var tieneSeccion = true;
    var tieneGrado = true;
    var tieneLogo = true;

    $(document).ready(function () {

        //REESCRIBIENDO EL PAGINADOR DEL WIZART (NO FUNCIONA EL DEL TEMPLATE)
        var faseActual = 0;

        $("#li_anterior_wizard , #li_siguiente_wizard").click(function () {

            event.preventDefault();

            var tabs = $("li[id^='li_paso_']");
            var faseNueva = 0;
            var href = $(this).children("a").attr('href');

            if (href == "#next") {
                faseNueva = faseActual + 1;
            } else if (href == "#previous") {
                faseNueva = faseActual - 1;
            }

            if (faseNueva >= 0 && faseNueva < tabs.length) {

                var tab = $("#li_paso_" + (faseActual));
                var titulo = $("#steps-uid-0-h-" + (faseActual));
                var contenido = $("#steps-uid-0-p-" + (faseActual));

                var tabNuevo = $("#li_paso_" + (faseNueva));
                var tituloNuevo = $("#steps-uid-0-h-" + (faseNueva));
                var contenidoNuevo = $("#steps-uid-0-p-" + (faseNueva));

                tab.removeClass("current").addClass("done");
                titulo.removeClass("current");
                contenido.removeClass("current").hide();

                tabNuevo.removeClass("disabled done").addClass("current");
                tituloNuevo.addClass("current");
                contenidoNuevo.addClass("current").show();

                faseActual = faseNueva;

                if (faseNueva == 1) {
                    capturaParametrosInciales();
                    generaCabecera();
                    generaContenido();
                }
            }
        });

    });

    function capturaParametrosInciales() {

        numeroPreguntas = $("#txt_numero_preguntas").val();
        numeroAlternativas = $("#txt_numero_alternativas").val();
        tipoEnumeracion = "decimal";
        tieneNombreAlumno = $("#ckb_nombres").is(':checked');
        tieneFecha = $("#ckb_fecha").is(':checked');
        tieneSeccion = $("#ckb_seccion").is(':checked');
        tieneGrado = $("#ckb_grado").is(':checked');
        tieneLogo = $("#ckb_logo_ie").is(':checked');

    }


    function generaCabecera() {

        var htmlTablaCebecera = '<table id="table_cabecera" border=0 cellpadding=0 cellspacing=0 class="table-bordered" style="width: 100%">' +
                '                                            <tr height=20 >' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                            </tr>' +
                '                                            <tr height=60 >' +
                '                                                <td colspan=2   width=68 > </td>' +
                '                                                <td colspan=12  width=408 >TITULO</td>' +
                '                                                <td colspan=2   width=68 > </td>' +
                '                                            </tr>';
        if (tieneNombreAlumno) {
            htmlTablaCebecera = htmlTablaCebecera + '        <tr height=20 >' +
                    '                                            <td colspan=4 >Nombre y Apelllidos</td>' +
                    '                                            <td colspan=12 > </td>' +
                    '                                        </tr>';
        }
        htmlTablaCebecera = htmlTablaCebecera +
                '                                            <tr height=20 >';
        if (tieneGrado) {
            htmlTablaCebecera = htmlTablaCebecera + '            <td colspan=2 >Grado:</td>' +
                    '                                            <td colspan=4  > </td>';
        }

        if (tieneSeccion) {
            htmlTablaCebecera = htmlTablaCebecera + '            <td colspan=2 >seccion</td>' +
                    '                                            <td colspan=3 > </td>';
        }

        if (tieneFecha) {
            htmlTablaCebecera = htmlTablaCebecera + '            <td colspan=2 >fecha</td>' +
                    '                                            <td colspan=3 > </td>';
        }

        htmlTablaCebecera = htmlTablaCebecera + '             </tr>' +
                '                                             <tr height=20 >' +
                '                                                <td width=34 ></td>                                                ' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                                <td width=34 ></td>' +
                '                                            </tr>' +
                '                                        </table>';

        $("#div_tabla_cabecera").html(htmlTablaCebecera);

    }

    function generaContenido() {

        var htmlTablaContenido = '<table id="table_contenido" class="table-bordered" style="width: 100%">';

        for (var i = 0; i < numeroPreguntas; i++) {
            htmlTablaContenido = htmlTablaContenido + '     <tr>' +
                    '                                           <td class="numero_pregunta">' + (i + 1) + '.-</td>' +
                    '                                           <td colspan="10">Debido a qué sustancia las hojas de las plantas tienen color verde.</td>' +
                    '                                       </tr>' +
                    '                                       <tr>' +
                    '                                           <td></td>';

            for (var j = 0; j < numeroAlternativas; j++) {
                htmlTablaContenido = htmlTablaContenido + '     <td class="alternativa-pregunta">' + String.fromCharCode(97 + j) + ')</td>' +
                        '                                       <td>Clorofila</td>';
            }
            htmlTablaContenido = htmlTablaContenido + '     </tr>';
        }
        htmlTablaContenido = htmlTablaContenido + '</table>';

        $("#div_tabla_contenido").html(htmlTablaContenido);

    }



//  EVENTOS : 

    $(document).on("blur", '#input_editando', function (event) {
        var input = $(this);
        var td = input.parent();
        td.html(input.val());
        td.removeClass("editando");
    });

//  PARA PODER EDITAR LOS CAMPOS 
    $(document).on("click", '#table_cabecera td, #table_contenido td', function (event) {

        var td = $(this);

        if (td.hasClass("animacion")) {
            td.siblings("td.animacion").removeClass("alternativa-correcta");
            td.addClass("alternativa-correcta");
        } else if (td.hasClass("alternativa-correcta")) {

        } else if (!td.hasClass("editando")) {
            var html = td.html();
            var newHtml = '<input id="input_editando"  type="text" value="' + html + '" style="width:' + (td.width() - 2) + 'px">';
            td.width(td.width());
            td.html(newHtml);
            td.addClass("editando");
            $("#input_editando").focus();
            $("#input_editando").select();
        }
    });

//  PARA QUITAR EL FOCO CUANDO HACEMOS ENTER DESPUES DE EDITAR
    $(document).on('keypress', '#input_editando', function (e) {
        if (e.which == 13) {
            $(this).blur();
        }
    });

// PARA MANEJAR LA ENTRADA Y SALIDA DEL MOUSE 
    $(document).on('mouseenter', '.numero_pregunta', function (e) {
        console.log("entrando");
        console.log($(this).position());
    }).on('mouseleave', '.numero_pregunta', function (e) {
        console.log("SALIENDO");
    });

    // CLICK EN BOTON AUTOCORRECION:
    $(document).on('click', '#btn_correcion_automatica', function (e) {

        var btn = $(this);

        if (btn.hasClass("animacion")) {
            btn.removeClass("animacion");
            btn.children("span").html("Corrección Automática");

            $("td.alternativa-pregunta").removeClass("animacion seleccion-alternativa");
            $("#btn_guarda_estructura").click();

        } else {
            btn.children("span").html("Terminar");
            btn.addClass("animacion");
            $("td.alternativa-pregunta").addClass("animacion seleccion-alternativa");
        }
    });

    $(document).on('click', '#btn_guarda_estructura', function (e) {

        var btn = $(this);

        btn.children("span").html("Guardando ...");
        btn.addClass("animacion");
        btn.attr("disabled", true);

        $.ajax({
            url: "crea-prueba/functionName",
            type: "POST",
//            dataType: 'json',
            data: {ajaxmsg: "saludos desde ajax"},
            success: function (data) {
                msg_exito("Exito", data);
                btn.removeClass("animacion");
                btn.children("span").html("Guardar");
                btn.attr("disabled", false);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                msg_error("Error", errorThrown);
                btn.removeClass("animacion");
                btn.children("span").html("Guardar");
                btn.attr("disabled", false);
            }
        });

//        setTimeout(function () {
//            btn.removeClass("animacion");
//            btn.children("span").html("Guardar");
//            btn.attr("disabled", false);
//        }, 3000);
    });

</script>


<!-- end content -->
<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>
